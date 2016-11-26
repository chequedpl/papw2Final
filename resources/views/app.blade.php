<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/product') }}" style="margin-left:3px; margin-top: 15px;">
                        Dragón
                    </a>

                </div>

                <div class="navbar-search"> 
                
                    <form action="{{ url('/search') }}" style=" margin-left: 300px; position: relative; ">

                        <input type="text" name="searchinfo" style="width: 400px; margin-top: 20px; position: relative; ">
                        <input type="submit" name="" style="margin-top: 20px; margin-right: 40px; position: relative;" >
                    
                    </form>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="position: absolute; margin-left: 70%; margin-top: -55px;">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                        @if (Auth::guest())
                            <li><a href="{{ url('/user') }}">Entra</a></li>
                            <li><a href="{{ url('/registro') }}">Registro</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/product') }}"
                                            onclick="">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
