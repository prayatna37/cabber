<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        if (Auth::user()->is_driver == false) {
            $bookings = User::find($id)->bookings->sortByDesc('created_at');

            return view('booking')->with('bookings', $bookings);
        } else {
            return back()->with('error', 'Only customerrs are allowed to book');
        }
    }


    public function create(Request $request)
    {
        $booking = new Booking();
        $booking->name = $request->get('name');
        $booking->phone = $request->get('phone');
        $booking->pickupAddress = $request->get('pickupAddress');
        $booking->dropoffAddress = $request->get('dropoffAddress');
        request()->user()->bookings()->save($booking);
        return back()->with('success', 'Booking Successful! Taxi will be with u Shortly');
    }

    public function activeBooking()
    {
        if (Auth::user()->is_driver == true) {
            $bookings = Booking::all();
            $bookings = Booking::orderBy('created_at', 'desc')->paginate(15);
            return view('driver.active')->with('bookings', $bookings);
        } else {
            return back()->with('error', 'Only Drivers Are Allowed to view active bookings');
        }
    }
    public function update(Request $request, $id)
    {
        $bookingUpdate = Booking::find($id);
        $bookingUpdate->is_active = false;
        $bookingUpdate->save();
        return back()->with('success', 'Booking Closed.');
    }
}
