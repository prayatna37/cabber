<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = User::all();
        return view('driver.drivers')->with('drivers', $drivers);
    }
}
