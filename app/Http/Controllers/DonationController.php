<?php
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
class DonationController extends Controller
{
    public function donationView()
    {
        $latestDonations = Donation::orderBy('created_at', 'desc')->take(10)->get();
        $highestPlantedDonation = Donation::orderBy('planted', 'desc')->first();
        $nextHighestPlantedDonations = Donation::orderBy('planted', 'desc')->skip(1)->take(9)->get();
        $totalDonated = Donation::sum('planted');

        return view('donation', [
            'latestDonations' => $latestDonations,
            'highestPlantedDonation' => $highestPlantedDonation,
            'nextHighestPlantedDonations' => $nextHighestPlantedDonations,
            'totalDonated' => $totalDonated
        ]);
    }
    public function store(Request $request)
    {
        if($request->input('step')==='1'){
            $messages = [
            'planted.required' => 'Jumlah tanaman harus diisi.',
            'planted.integer' => 'Jumlah tanaman harus berupa angka.',
            'planted.min' => 'Jumlah tanaman minimal 1.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 30 karakter.',
            'name.required' => 'Nama harus diisi.',
            'name.max' => 'Nama maksimal 20 karakter.',
            'message.required' => 'Pesan harus diisi.',
            'message.max' => 'Pesan maksimal 40 karakter.',
        ];
        $validated = $request->validate([
            'planted' => 'required|integer|min:1',
            'email' => 'required|email|max:30',
            'name' => 'required|string|max:20',
            'message' => 'required|string|max:40',
        ],$messages);
        
        $request->session()->put('donation', $validated);
        return redirect()->back()->with('step', '2');
    }

        if ($request->input('step') === '2') {
            $donationData = $request->session()->get('donation');
            Donation::create($donationData);

            $request->session()->forget('donation');
            $latestDonations = Donation::orderBy('created_at', 'desc')->take(10)->get();
            $highestPlantedDonation = Donation::orderBy('planted', 'desc')->first();
            $nextHighestPlantedDonations = Donation::orderBy('planted', 'desc')->skip(1)->take(9)->get();
            $totalDonated = Donation::sum('planted');
            return view('donation', [
                'latestDonations' => $latestDonations,
                'highestPlantedDonation' => $highestPlantedDonation,
                'nextHighestPlantedDonations' => $nextHighestPlantedDonations,
                'totalDonated' => $totalDonated
            ]);

        }
    }
 }