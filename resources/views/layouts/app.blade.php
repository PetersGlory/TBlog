<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .footer{
            padding: 20px;
            margin-top: 20px;
            background-color: #FFFFFF;
        }
        .footer .container .row{
            display: flex;
        }
        .all{
        padding: 10px;
        border: solid 5px purple;
        border-radius: 30px;
        margin-bottom: 5px;
      }
        .links li{
            display: block;
            text-decoration: none;
            list-style: none;
            padding: 10px;
        }
        .links li a:hover{
            transition: 3s;
            text-decoration: none;
            list-style: none;  
            color: red;
            padding: 10px;
            border: solid 1px grey;
        }
        .others{
            float: right;
            /*right: 50%;*/
            justify-content: right;
        }
        .others li{
            display: block;
            text-decoration: none;
            list-style: none;
            padding: 10px;
        }
        .others li a:hover{
            text-decoration: none;
            list-style: none;  
            color: red;
            padding: 10px;
            border: solid 1px grey;
        }
        
    </style>
</head>
<body style="background-color:#f0f0f0;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <a href="/tech">Technology</a>
                            </li>
                            <li>
                                <a href="/entertainment">Entertainment</a>
                            </li>
                            <li>
                                <a href="/news">Information</a>
                            </li>
                            <li>
                                <a href="/edu">Education</a>
                            </li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/home">Home</a>
                                    </li>
                                    <li>
                                        <a href="/articles">Feeds</a>
                                    </li>
                                    <li>
                                        <a href="/profile">My Profile</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="/articles/create">Create Article</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <ul class="links ">
                    @guest
                        <li>
                            <a href="/">All Posts</a>
                        </li>
                    @else
                        <li>
                            <a href="/articles">All Posts</a>
                        </li>
                    @endguest
                    <li>
                        <a href="/tech">Technology</a>
                    </li>
                    <li>
                        <a href="/entertainment">Entertainment</a>
                    </li>
                    <li>
                        <a href="/news">Information</a>
                    </li>
                    <li>
                        <a href="/edu">Education</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto pull-right">
                <ul class="others">
                    <li>
                        <i class="fa fa-mail"></i> techobservers2020@gmail.com
                    </li>
                     <li>
                        <i class="fa fa-log"></i> <a href="/login">Sign In</a>
                    </li>
                    <li>
                        <i class="fa fa-log"></i> <a href="/register">Sign up</a>
                    </li>
                     <li>
                        <a href="/adverts/create">Promote your product</a>
                    </li>
                    <li>
                        <a href="/contact">Contact us</a>
                    </li>
                    <li>
                        <a href="/howitworks">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <center>
        <h3 class="at">
            &copy; All rights are reserved.
        </h3>
    </center>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
