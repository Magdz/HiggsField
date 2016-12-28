<!DOCTYPE html>
<html>

<head>
  <!--Page External Imports-->
        <!-- Latest compiled and minified JavaScript
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
         -->
        <script src="js/action.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-2.2.4.min.js"></script>

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ URL::asset('/') }}js/bootstrap.min.js">
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/default.css">
        @yield('includes')
</head>

<body>
    <div id= "pageContainer">
        </div>

    <!--FIXED NAVIGATION BAR--> 
        <nav class="navbar navbar-default">
            <div class="container-fluid" id="navigation-fixed">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{!! route('home') !!}">HiggsField</a>
                </div>
                <form class="navbar-form navbar-left" role="search" method = "post" action="{!! route('search') !!}">
                    <div class="form-group">
                        <input type="text" name = "querydata" class="form-control" placeholder="Search">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <form action="{!! route('auth.logout') !!}">
                    <input type="submit" id="logout-btn" value="" > 
                </form>
            </div>
        </nav>
        <div id="links-bar">
            <ul>
                <li><a href="{!! route('home') !!}">Home</a></li>
                <li><a href="{!! route('profile') !!}">Profile</a></li>
                <li><a href="{!! route('friends') !!}">Friends</a></li>
                <li><a href="{!! route('settings') !!}">Settings</a></li>
            </ul>
        </div>
    
        @yield('content')
</body>
<script src="js/action.js"></script>
</html>