<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index($id)
    {
        if (Auth::id() == $id) {
            $profile = User::find($id);
            return view('profile')->with('profile', $profile);
        } else return back()->with('error', 'Profile cannot be accessed');
    }
}
