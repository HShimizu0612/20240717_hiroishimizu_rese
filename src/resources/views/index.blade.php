@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('header')
<div class="search-form">
    <form action="/search" method="GET">
        @csrf
        <select name="area_id">
            <option value="">All area</option>
            @foreach ($areas as $area)
            <option value="{{ $area['id'] }}">{{ $area['area'] }}</option>
            @endforeach
        </select>
        <select name="genre_id">
            <option value="">All genre</option>
            @foreach ($genres as $genre)
            <option value="{{ $genre['id'] }}">{{ $genre['genre'] }}</option>
            @endforeach
        </select>
        <input type="text" name="keyword" placeholder="Search ...">
        <button type="submit">検索</button>
    </form>
</div>
@endsection

@section('content')
<div class="shops">
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
            <a class="detail-button__link" href="{{ route('shop.detail', ['id'=>$shop->id]) }}">詳しくみる</a>
            <a class="favorite-button" href="/favorite"><i class="fa-solid fa-heart"></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection