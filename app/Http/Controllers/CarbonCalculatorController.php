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
        $messages = [
            'number.required' => 'Jumlah angka harus diisi.',
        ];
        // Validasi input
        $data = $request->validate([
            'activity' => 'required|string',
            'number' => 'required|numeric',
        ],$messages);

        // Inisialisasi variabel emisi karbon
        $carbonEmission = 0;

        // Hitung berdasarkan aktivitas
        if ($data['activity'] === 'driving') {
            $carbonEmission = $data['number'] * 0.24; // 0.24 kgCO2e/km
        } elseif ($data['activity'] === 'electricity') {
            $carbonEmission = $data['number'] * 0.85; // 0.85 kgCO2e/kWh
        }

        // Kirim hasil ke view
       return view('carboncalculator',compact('carbonEmission'));
    }
}