<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', '') }}</title> -->
    <title>@yield('title', 'monitoring')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Bootstrap chart.jsf를 사용하기 위한 차트 링크 -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script> -->

    @yield('link')
    @yield('script')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm ">
            <div class="container position:fixed">
                <a class="navbar-brand" href="{{ url('/') }}" width="50%"><img src="/images/gs/gs.jpg" width="50%" alt="GS"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">GS Energy Monitoring System<span class="sr-only">
                        (current)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="/totalstatus">종합감시</a></li>
                        <li class="nav-item"><a class="nav-link" href="/status">발전현황</a></li>
                        <li class="nav-item"><a class="nav-link" href="/monitoring">모니터링</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">계통도</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">통계</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">경보</a></li>
                        @can('manage-users')
                        <li class="nav-item dropdown">
                            <!-- 드롭다운 메뉴 -->
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">관리</a>
                            <div class="dropdown-menu">
                                <div class="dropdown-header">입력데이터</div>
                                    <a class="dropdown-item" href="/tasks">수용가 정보</a>
                                    <a class="dropdown-item" href="/devices">발전원 설치정보</a>
                                    <a class="dropdown-item" href="#">발전설비재원</a>
                                <div class="dropdown-header">액션모음</div>
                                    <a class="dropdown-item" href="#" target="_blank">Link 1</a>
                                    <a class="dropdown-item" href="#">Link 2</a>
                                    <a class="dropdown-item" href="#">Link 2</a>
                            </div>
                        </li>
                        @endcan
                    </ul>
                    <!-- Search -->
                    <!-- <form class="form-inline" action=""> -->
                        <!-- inline 여야 간격이 없이 메뉴처럼 나온다. -->
                        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
                        <!-- form-control 입력창 꾸며주는 클래스 -->
                        <!-- <button class="btn btn-success" type="submit">Search</button>
                    </form> -->

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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @can('manage-users')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                        User Management
                                    </a>
                                    @endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @include('partials.alert')
                @yield('content')
            </div>
            
        </main>

    </div>
    
    @yield('js')
</body>
</html>
