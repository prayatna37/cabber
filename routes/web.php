<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('driver/home', 'HomeController@driverHome')->name('driver.home')->middleware('is_driver');

Route::get('/drivers', 'DriverController@index')->name('drivers.show');

Route::get('/profile/{id}', 'ProfileController@index')->name('profile.show');

Route::get('/booking/{id}', 'BookingController@index')->name('booking.show');

Route::post('/booking/create', 'BookingController@create')->name('booking.create');

Route::get('/bookings/active', 'BookingController@activeBooking')->name('booking.active');

Route::put('/booking/{id}', 'BookingController@update')->name('booking.update');
