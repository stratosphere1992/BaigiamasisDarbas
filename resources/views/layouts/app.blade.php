<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'THUNDERSOUND') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    
</head>
<body>
    <div id="app">
        <div></div>
        <!-- Navigacijos eilutė čia -->
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    THUNDERSOUND
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if(Auth::check() && Auth::user()->isadmin==1)
                                    <a class="dropdown-item" href="{{ url('auth/category') }}">{{ __('Dashboard') }}</a>
                                @else
                                    <a class="dropdown-item" href="{{ url('ads') }}">{{ __('Ads') }}</a>
                                    <a class="dropdown-item" href="{{ url('messages') }}">{{ __('Messages') }}</a>
                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Antra navigacija čia -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-hover">
                <a class="navbar-brand" href="#">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarHover">
                    <!-- Container-fluid nesuveikė, palieku container -->
                    <ul class="container navbar-nav">
                        @foreach($menus as $menuItem)
                        <li class="nav-item dropdown">
                            <!-- Kategorija -->
                            <a class="nav-link dropdown-toggle" href="{{ route('category.show',$menuItem->slug )}}" data-bs-toggle="dropdown_remove_dropdown_class_for_clickable_link" aria-haspopup="true" aria-expanded="false">
                                {{ $menuItem->name }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($menuItem->subcategories as $subMenuItem)
                                <li>
                                    <!-- Subkategorija -->
                                    <a class="dropdown-item dropdown-toggle" href="{{ route('subcategory.show',[$menuItem->slug,$subMenuItem->slug]) }}">{{$subMenuItem->name}}</a>
                                    <ul class="dropdown-menu">
                                    @foreach($subMenuItem->childcategories as $childMenu)
                                        <li>
                                            <!--Antra Subkategorija -->
                                            <a class="dropdown-item" href="{{ route('childcategory.show',[$menuItem->slug,$subMenuItem->slug,$childMenu->slug]) }}">{{ $childMenu->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        <!-- Navigacijos pabaiga -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Navigacijos stilius -->
    <style>
        .dropdown:hover>.dropdown-menu{
            display: block;
        }
        /* Responsive/Reaguojantis menu stilius */
        @media only screen and (max-width: 9991px) {
            .navbar-hover .show> .dropdown-toggle::after{
                transform: rotate(-90deg);
            }
        }   
        @media only screen and (min-width: 492px) {
            .navbar-hover .collapse ul li {position: relative;}
            .navbar-hover .collapse ul li:hover > ul {display: block;}
            .navbar-hover .collapse ul ul {position: absolute; top: 100%; left: 0; min-width: 250px; display: none}
            .navbar-hover .collapse ul ul ul {position: absolute; top: 0;left: 100%; min-width: 250px; display: none}
        }
        .vertical-menu a{
            background-color: #fff;
            color: #000;
            display: block;
            padding: 12px;
            text-decoration: none;
            }
        .vertical-menu a:hover{
            background-color: green;
            color: #fff;
        }
        .vertical-menu a:active{
            background-color: green;
            color: #fff;
        }
    </style>

</body>
</html>
