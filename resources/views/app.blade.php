<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'laravel') }}</title>

  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="conrainer">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'laravel') }}

                </a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupporteContent"
                aria-controls="navbarSupporteContent"
                aria-expanded="false"
                aria-label="{{__('Toggle navegacion')}}">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">

                        @guest
                            @if(Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{__('Login')}}</a>

                                </li>
                            @endif

                            @if(Route::has('register-user'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register-user') }}">{{__('Register')}}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown"...>

                        @endguest


                    </ul>
                </div>

            </div>

        </nav>

        <main class="py-4">
            @yield('content')

        </main>

    </div>

</body>
</html>
