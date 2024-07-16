@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-form__heading">
        <h2>Registration</h2>
    </div>
    <div class="auth-form__contents">
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">
                <i class="fa-solid fa-user form-icon"></i>
                <input type="text" name="name" placeholder="Username">
                @error('name')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form__group">
                <i class="fa-solid fa-envelope form-icon"></i>
                <input type="email" name="email" placeholder="Email">
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
            <div class="form__group">
                <i class="fa-solid fa-key form-icon"></i>
                <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                @error('password_confilmation')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection