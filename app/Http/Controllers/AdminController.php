<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Guest;
use App\Models\Invitation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }
    
    public function viewComment() {
        $comments = Comment::with('guest')->get();
        return view('dashboard.comment.index', compact('comments'));
    }

    public function viewGuest() {
        $guests = Guest::all();
        return view('dashboard.guest.index', compact('guests'));
    }

    public function createGuest(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        if (substr($request->phone_number, 0, 1) === '0') {
            $request->phone_number = '+62' . substr($request->phone_number, 1);
        }

        Guest::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
        ]);
    

        return redirect()->back()->with('success', 'Guest added successfully.');
    }

    public function editGuest(Request $request, $guestId) {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);
    
        if (substr($request->phone_number, 0, 1) === '0') {
            $request->phone_number = '+62' . substr($request->phone_number, 1);
        }

        $guest = Guest::findOrFail($guestId);
        $guest->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
        ]);
    
        return redirect()->back()->with('success', 'Guest updated successfully.');
    }

    public function destroyGuest($guestId)
    {
        $guest = Guest::findOrFail($guestId);
        $guest->delete();

        return redirect()->route('guest')->with('success', 'Guest deleted successfully.');
    }

    public function sendInvitation($guestId) {
        $guest = Guest::findOrFail($guestId);
        $uniqueLink = url('/invitation/' . urlencode($guest->name));
    
        Invitation::create([
            'guest_id' => $guest->id,
            'unique_link' => $uniqueLink,
        ]);
        
        $phoneNumber = $guest->phone_number;
        if (substr($phoneNumber, 0, 1) === '0') {
            $phoneNumber = '+62' . substr($phoneNumber, 1);
        }

        $message = "*Assalamualaikum Warahmatullahi Wabarakatuh*\n\n";
        $message .= "Kepada Yth. Bpk/Ibu/Saudara/i\n";
        $message .= "*$guest->name* & Partner/Keluarga\n\n";
        $message .= "Berikut link undangan Pernikahan kami, untuk info lengkap dari acara, bisa kunjungi :.\n\n";
        $message .= "$uniqueLink\n\n";
        $message .= "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu..\n\n";
        $message .= "*Wassalamualaikum Warahmatullahi Wabarakatuh.*\n\n";
        $message .= "Terima kasih.\n\n";
        $message .= "Hormat kami,\n";
        $message .= "Risma & Rhizon";        

        $whatsappLink = "https://wa.me/$phoneNumber?text=" . rawurlencode($message);
    
        return response()->json([
            'whatsappLink' => $whatsappLink,
            'successMessage' => 'Pesan Berhasil Dikirim ke ' . $guest->name
        ]);
    }

}
