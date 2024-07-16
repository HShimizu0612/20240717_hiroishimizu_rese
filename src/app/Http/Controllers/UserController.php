<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Time;
use App\Models\Number;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mypage()
    {
        $reservations = Reservation::with('shop', 'time', 'number');
        $shops = Shop::all();
        $times = Time::all();
        $numbers = Number::all();
        return view('mypage', compact('reservations', 'shops', 'times', 'numbers'));
    }
}
