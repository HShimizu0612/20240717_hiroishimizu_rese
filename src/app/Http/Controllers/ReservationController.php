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

    public function delete($reservation_id)
    {
        Reservation::find($reservation_id)->delete();
        session()->flash('fs_msg', '削除されました');
        return redirect('mypage');
    }

    public function favorite($shop_id)
    {
        Favorite::favorite(Auth::id(), $shop_id);
        return redirect()->back();
    }

    public function unfavorite($shop_id)
    {
        Favorite::where('user_id', Auth::id())->where('shop_id', $shop_id)->delete();
        return redirect()->back();
    }
}
