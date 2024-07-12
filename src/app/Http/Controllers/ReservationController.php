<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Time;
use App\Models\Number;
use App\Models\Favorite;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function postReservation(ReservationRequest $request)
    {
        $reservation = $request->only(['user_id', 'shop_id', 'date', 'time_id', 'number_id']);
        Reservation::create($reservation);
        return view('done');
    }

    public function favorite(Request $request, Shop $shop)
    {
        $favorite = new Favorite;
        $favorite->shop_id = $request->shop_id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();

        return view('/');
    }

    public function unfavorite(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);

        $shop->favorites()->delete();

        return view('/');
    }
}
