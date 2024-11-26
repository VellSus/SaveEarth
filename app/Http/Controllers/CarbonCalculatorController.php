<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarbonCalculator;

class CarbonCalculatorController extends Controller
{
    public function index()
    {
        // Menampilkan form
        return view('carboncalculator');
    }

    public function calculate(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'activity' => 'required|string',
            'distance' => 'nullable|numeric',
            'electricity' => 'nullable|numeric',
        ]);

        // Inisialisasi variabel emisi karbon
        $carbonEmission = 0;

        // Hitung berdasarkan aktivitas
        if ($data['activity'] === 'driving' && isset($data['distance'])) {
            $carbonEmission = $data['distance'] * 0.24; // 0.24 kgCO2e/km
        } elseif ($data['activity'] === 'electricity' && isset($data['electricity'])) {
            $carbonEmission = $data['electricity'] * 0.85; // 0.85 kgCO2e/kWh
        }

        // Simpan data ke database
        CarbonCalculator::create([
            'activity' => $data['activity'],
            'carbon_emission' => $carbonEmission,
        ]);

        // Kirim hasil ke view
        return back()->with('success', "Jejak karbon Anda adalah $carbonEmission kgCO2e.");
    }
}