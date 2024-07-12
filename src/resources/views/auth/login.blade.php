@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-form__heading">
        <h2>Login</h2>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__group">
            <i class="form__group--icon"></i>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email">
        </div>
        <div class="form__group">
            <i class="form__group--icon"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form__group">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection