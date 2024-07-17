@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/done.css">
@endsection

@section('content')
<div class="container">
    <div class="comment">
        <p>会員登録ありがとうございます</p>
    </div>
    <div class="login-button">
        <a class="login-button__link" href="/login">ログインする</a>
    </div>
</div>
@endsection