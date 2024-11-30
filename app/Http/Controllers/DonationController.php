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
        $validated = $request->validate([
            'planted' => 'required|integer|min:1',
            'email' => 'required|email|max:30',
            'name' => 'required|string|max:20',
            'message' => 'nullable|string|max:40',
        ]);

        // Store data in the database
        Donation::create([
            'planted' => $validated['planted'],
            'email' => $validated['email'],
            'name' => $validated['name'],
            'message' => $validated['message'] ?? '',
        ]);
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