<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Time;
use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        // $reservations = Reservation::with('shop', 'time', 'number');
        // $shops = Shop::all();
        // $times = Time::all();
        // $numbers = Number::all();
        // return view('mypage', compact('reservations', 'shops', 'times', 'numbers'));

        $user = User::find(Auth::id())->with('reservations')->first();

        return view('/mypage', compact('user'));
    }
}
