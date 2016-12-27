<!DOCTYPE html>
<html>

<head>
  <!--Page External Imports-->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/settings.css">
        <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div id= "pageContainer">
        </div>

    <!--FIXED NAVIGATION BAR--> 
        <nav class="navbar navbar-default">
            <div class="container-fluid" id="navigation-fixed">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">HiggsField</a>
                </div>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </nav>
            <div id="links-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
    
        @yield('content')
</body>
</html>