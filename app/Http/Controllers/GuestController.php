<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function showInvitation($guestName)
    {
        $guestName = urldecode($guestName);

        $guest = Guest::where('name', $guestName)->first();
        $comments = Comment::with('guest')->get();

        if (!$guest) {
            return abort(404, 'Guest not found');
        }

        if (!$guest->has_opened) {
            $guest->update(['has_opened' => true]);
        }

        return view('invitation.index', compact('guest','comments'));
    }

    public function comment(Request $request, $guestName)
    {
        $guestName = urldecode($guestName);
        $guest = Guest::where('name', $guestName)->firstOrFail();
    
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);
    
        $comment = Comment::create([
            'guest_id' => $guest->id,
            'comment' => $request->comment,
        ]);
    
        return response()->json([
            'success' => true,
            'message' => 'Komentar berhasil ditambahkan!...',
            'comment' => [
                'guest_name' => $guest->name,
                'text' => $comment->comment,
            ],
        ]);
    }       
}
