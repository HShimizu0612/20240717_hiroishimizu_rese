@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/detail.css">
@endsection

@section('content')
<div class="container">
    <div class="shop-detail">
        <div class="title">
            <a href="/"><i class="fa-solid fa-angle-left"></i></a>
            <h2>{{ $shop->name }}</h2>
        </div>
        <div class="shop-img">
            <img src="{{ asset('image/' . $shop->image) }}" alt="">
        </div>
        <div class="tags">
            <p>#{{ $shop['area']['area'] }}</p>
            <p>#{{ $shop['genre']['genre'] }}</p>
        </div>
        <div class="overview">
            <p>{{ $shop->overview }}</p>
        </div>
    </div>
    <div class="reservation-form">
        <form action="/reservation" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
            <input type="date" name="date">
            <select name="time_id" id="">
                @foreach ($times as $time)
                <option value="{{ $time['id'] }}">{{ $time['time'] }}</option>
                @endforeach
                <!-- <option value="1">17:00</option>
                <option value="2">17:30</option>
                <option value="3">18:00</option>
                <option value="4">18:30</option>
                <option value="5">19:00</option>
                <option value="6">19:30</option>
                <option value="7">20:00</option>
                <option value="8">20:30</option>
                <option value="9">21:00</option>
                <option value="10">21:30</option>
                <option value="11">22:00</option> -->
            </select>
            <select name="number_id" id="">
                @foreach ($numbers as $number)
                <option value="{{ $number['id'] }}">{{ $number['number'] }}</option>
                @endforeach
                <!-- <option value="1">1人</option>
                <option value="2">2人</option>
                <option value="3">3人</option>
                <option value="4">4人</option>
                <option value="5">5人</option>
                <option value="6">6人</option>
                <option value="7">7人</option>
                <option value="8">8人</option> -->
            </select>
            <button type="submit">予約する</button>
        </form>
    </div>
</div>
@endsection