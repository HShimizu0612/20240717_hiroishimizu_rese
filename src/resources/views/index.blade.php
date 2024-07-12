@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')
@auth
<p>ようこそ{{ Auth::user()->name }}さん</p>
@endauth
<div class="search-form">
    <form action="/search" method="GET">
        @csrf
        <select name="area_id">
            <option value="">All area</option>
            @foreach ($areas as $area)
            <option value="{{ $area['id'] }}">{{ $area['area'] }}</option>
            @endforeach
        </select>
        <select name="genre_id" id="">
            <option value="">All genre</option>
            @foreach ($genres as $genre)
            <option value="{{ $genre['id'] }}">{{ $genre['genre'] }}</option>
            @endforeach
        </select>
        <input type="text" name="keyword">
        <div>
            <button type="submit">検索</button>
        </div>
    </form>
</div>
@foreach ($shops as $shop)
<div class="shop-card">
    <div class="shop-card__image">
        <div>
            <img src="{{ asset('image/' . $shop->image) }}" alt="">
        </div>
    </div>
    <div class="shop-card__contents">
        <h6>{{ $shop->name }}</h6>
        <p class="tag">#{{ $shop['area']['area'] }}</p>
        <p class="tag">#{{ $shop['genre']['genre'] }}</p>
        <a href="{{ route('shop.detail', ['id'=>$shop->id]) }}">詳しくみる</a>
        @if (Auth::check())
        @if ($favorite)
        <form action="{{ action('ReservationController@unfavorite', $shop->id) }}" method="POST">
            @csrf
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
            @method('DELETE')
            <button type="submit">★</button>
        </form>
        @else
        <form action="{{ action('ReservationController@favorite') }}" method="POST">
            @csrf
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
            <button type="submit">♡</button>
        </form>
        @endif
        @endif
    </div>
</div>
@endforeach
@endsection