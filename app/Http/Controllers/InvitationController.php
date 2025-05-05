<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;


class InvitationController extends Controller
{
    public function index()
    {
        $invitations = Invitation::latest()->get();
        return view('invitation.index', compact('invitations'));
    }

}
