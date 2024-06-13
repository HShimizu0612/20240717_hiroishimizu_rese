<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function getIndex()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }
}
