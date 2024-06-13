@extends('layouts.app')

@section('content')
@auth
<p>ようこそゲストさん</p>
@endauth
@foreach ($shops as $shop)
<div class="shop-card">
    <div class="shop-card__image">
        <div>
            <img src="{{ asset('image/' . $shop->image) }}" alt="">
        </div>
    </div>
    <div class="shop-card__contents">
        <h6>{{ $shop->name }}</h6>
        <p class="tag">#{{ $shop->area }}</p>
        <p class="tag">#{{ $shop->genre }}</p>
        <button class="good"></button>
    </div>
</div>
@endforeach
@endsection