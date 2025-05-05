<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

class HomeController extends Controller
{
    public function showSlug($slug = null)
    {
        // You can fetch something using the slug here
        if(!$slug)
            return view('home', ['invitee' => null]);

        $invitee = Invitation::where('slug', strtoupper($slug))->first();
        if(!$invitee)
            return view('home', ['invitee' => null]);

        return view('home', ['invitee' => $invitee]);
    }

    public function store(Request $request) {
        $request->validate([
            'response' => 'required|in:yes,no',
            'id' => 'required|integer'
        ]);
        // Save response
        $invitee = Invitation::find($request->id)->where('status', 'pending');
        if(!$invitee) {
            return response()->json([
                'success' => false,
                'message' => "Sorry, The Data can't be updated.",
            ]);
        }
        $invitee->update(['status' => $request->response === 'yes' ? 'accepted' : 'declined']);
        return response()->json([
            'success' => true,
            'message' => $request->response === 'yes'
                ? 'Thanks for confirming your attendance!'
                : 'Sorry to hear you can’t come.',
            'response' => $request->response
        ]);
    }
}
