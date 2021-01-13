<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>Admin</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <style>
      .all{
        padding: 10px;
        border: solid 5px purple;
        border-radius: 25px;
        margin: 5px;
      }
    .sidenav {
    height: 100%;
    width: 150px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    list-style: none;
    padding-top: 20px;
}

.sidenav a {
    padding: 5px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 150px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
  </head>
<body class="bg-secondary">
  <div class="d-flex all">
   <div class="sidenav"> 
    <nav class="navbar bg-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin_articles">All Posts.</a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="/adverts">All Ads</a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link" href="/notification">Notifications</a>
        </li>
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
                  
            <li>
                <a href="/profile">My Profile</a>
            </li>
            <li>
                <a href="/articles/create">Create Article</a>
            </li>
      </ul>
    </nav>
   </div>
   <div class="main">
     <nav class="navbar navbar-primary navbar-sticky-top">
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
                    <a class="navbar-brand" href="{{ url('/TBlog') }}">
                        Admin
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
          
                                    <li>
                                        <a href="/home">Home</a>
                                    </li>
                                    <li>
                                        <a href="/articles">Feeds</a>
                                    </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                   Admin <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                                    <hr>
                                    <li>
                                        <a href="/profile">My Profile</a>
                                    </li>
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
                       
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-fluid">
      @yield('content')
    </div>
   </div>
  </div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>