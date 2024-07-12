@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/mypage.css">
@endsection

@section('content')
<div class="container">
    <div class="user-name">
        <h3>{{ Auth::user()->name }}さん</h3>
    </div>
    <!-- <div class="contents">
        <div class="reservation">
            <div class="reservation__title">
                <h4>予約状況</h4>
            </div>
            @foreach ($reservations as $reservation)
            <div class="reservation-card">
                <div class="reservation-card__title">
                    <i></i>
                    <p>予約</p>
                </div>
                <table>
                    <tr>
                        <th>Shop</th>
                        <td>{{ $reservation->'shop_id' }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $reservation->'date'</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <tr>{{ $reservation->'time_id' }}
                    </tr>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>{{ $reservation->'number' }}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
        <div class="favorite">
            <div class="favorite__title">
                <h4>お気に入り店舗</h4>
            </div>
            @foreach ($favorites as $favorite)
            <div class="shop-card"></div>
            @endforeach
        </div>
    </div> -->

</div>
@endsection