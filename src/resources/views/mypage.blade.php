@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/mypage.css">
@endsection

@section('content')
<div class="container">
    <div class="user-name">
        <h3>{{ Auth::user()->name }}さん</h3>
    </div>
    <div class="contents">
        <div class="reservation">
            <div class="reservation__title">
                <h4>予約状況</h4>
            </div>
            @foreach ($user->reservations as $reservation)
            <div class="reservation-card">
                <div class="reservation-card__title">
                    <i></i>
                    <p>予約{{ $reservation->pivot->id }}</p>
                    <form action="{{ route('reserve.delete', ['reservation_id' => $reservation->pivot->id]) }}" method="POST">
                        @csrf
                        <input type="submit" onclick='return confirm("予約を取り消しますか？");'>
                    </form>
                </div>
                <table>
                    <tr>
                        <th>Shop</th>
                        <td>{{ $reservation->pivot->shop_id }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $reservation->pivot->date }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $reservation->pivot->time_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>{{ $reservation->pivot->number_id }}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
        <div class="favorite">
            <div class="favorite__title">
                <h4>お気に入り店舗</h4>
                <div>
                    @foreach($user->favorites as $shop)
                    <div class="shop-card">
                        <h2 class="shop-card__content_ttl">{{ $shop->name }}</h2>
                        <p class="shop-card__content_txt">
                            #{{$shop->area->area}}&nbsp;#{{$shop->genre->genre}}
                        </p>
                        <div>
                            <a class="shop-card__content_link" href="{!! '/detail' . $shop->id !!}">
                                詳しく見る
                            </a>
                            @if( Auth::check() )
                            @if(count($shop->favorites) == 0)
                            <form action="{{ route('favorite', ['shop_id' => $shop->id]) }}">
                                @csrf
                                <input class="unfavorite" type="image" alt="いいね">
                            </form>
                            @else
                            <form method="POST" action="{{ route('unfavorite', ['shop_id' => $shop->id]) }}">
                                @csrf
                                <input class="favorite" type="image" alt="いいねを外す">
                            </form>
                            @endif
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection