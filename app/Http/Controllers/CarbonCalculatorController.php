<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarbonCalculator;

class CarbonCalculatorController extends Controller
{
    public function index()
    {
        $carbonEmission="hasil akan muncul disini";
        return view('carboncalculator',compact('carbonEmission'));
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

        // Kirim hasil ke view
       return view('carboncalculator',compact('carbonEmission'));
    }
}