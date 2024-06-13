@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h2>Registration</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <i class="form__group--icon"></i>
            <input type="text" name="name" placeholder="Username">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form__group">
            <i class="form__group--icon"></i>
            <input type="email" name="email" placeholder="Email">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form__group">
            <i class="form__group--icon"></i>
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div c;ass="form__group">
            <input type="password" name="password_confirmation" placeholder="Password Confirmation">
        </div>
        <div class="form__group">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection