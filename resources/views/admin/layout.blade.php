<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf_token" content="{{ csrf_token() }}">
    
        <title>@yield('title')</title>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/7807b4c945.js" crossorigin="anonymous"></script>
    </head><!--//-->

    <body>
        <div id="app">
            <!-- ヘッダー -->
            <nav class="navbar navbar-expand-md top-bar">
                <a href="/"><h2>MainTitle</h2></a>
                <span class="page-title ml-5">@yield('page')</span>
            
            
                @guest
                <span></span>
                @else
                    <div class="admin-name">{{ Auth::user()->name }}</div>
                        
                    <div class="logout">
                        <a class="logout-btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            
            </nav>

            <main class="main-body" >
                @yield('content')
            </main>

            <footer class="container-fluid fixed-bottom">
                @yield('footer')
                <div class="text-center copywriter">©️ 2021 Y-Kikuchi</div>
            </footer>            
        </div>
    </body>
</html>