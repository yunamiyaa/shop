<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container nub">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="container">
                        <div class="row">
                            <div class="col span-12">
                                <div class="head">
                                    <h1><a href="index.html">お家deパフェ</a></h1>
                                    <div class="snsbox">
                                        <img src="img/in-icon.png" alt="Instagram">
                                        <img src="img/fb-icon.png" alt="Facebook"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-12">
                                <nav>
                                    <div id="open"><img src="img/button.png"></div>
                                    <div id="close"><img src="img/button2.png"></div>
                                    <div id="navi">
                                        <ul>
                                            <li><a href="/">ホーム</a></li>
                                            <li><a href="subpage.html">お知らせ</a></li>
                                            <li><a href="subpage.html">お問い合わせ</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                    <a class="dropdown-item" href="{{ url('/cart') }}">--}}
{{--                                        カートを見る--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </li>--}}

                        <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto" >
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" style="color:#fefefe;"  href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" style="color:#16181b;"  href="{{ route('register') }}">{{ __('会員登録') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" style="color:#16181b;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                {{ __('ログアウト') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                            {{-- 追加 --}}
                                            <a class="dropdown-item" href="{{ url('/cart') }}">
                                                カートを見る
                                            </a>
                                        </div>
                                    </li>
                                    {{-- 追加 --}}
                                    <a href="{{ url('/cart') }}" >
                                        <img src="{{ asset('image/cart.png') }}" class="cart" >
                                    </a>
                                @endguest


                            </ul>
                        @endguest
                    </ul>
                </div>
                <div class="nub-bar" style="background-color:#16181b;">

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
