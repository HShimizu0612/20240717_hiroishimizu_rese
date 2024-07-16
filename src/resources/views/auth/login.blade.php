@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-form__heading">
        <h2>Login</h2>
    </div>
    <div class="auth-form__contents">
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__group">
                <i class="fa-solid fa-envelope form-icon"></i>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="email">
                @error('email')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form__group">
                <i class="fa-solid fa-key form-icon"></i>
                <input type="password" name="password" placeholder="Password">
                @error('password')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form__button">
                <button class=" form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection