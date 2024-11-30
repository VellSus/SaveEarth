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
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|max:30',
            'message' => 'nullable|max:40',
            'plants' => 'required|integer|min:1',
        ]);

        Donation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'planted' => $request->input('plants'),
        ]);

        return response()->json(['success' => 'Donation saved successfully!']);
    }
 }