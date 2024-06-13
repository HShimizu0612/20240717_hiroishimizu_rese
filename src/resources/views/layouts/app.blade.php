<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1>Rese</h1>
            @yield('header')
        </div>
    </header>
    <main>
        <div class="sidebar">
            @guest
            <link href="/" alt="Home">
            <link href="/register" alt="Registration">
            <link href="/login" alt="Login">
            @endguest
            @auth
            @endauth
        </div>
        @yield('content')
    </main>
</body>

</html>