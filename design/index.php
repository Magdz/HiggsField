<!DOCTYPE html>

<html> 
    <!--HEAD SECTION-->
    <head>
        <!--Page External Imports-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">       
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
               
        <!--Page Local Imports-->
        <link rel="stylesheet" href="css/index.css">
        <!-- Page Title -->
        <title>HiggsField</title>
        
        <!-- Page Scripts -->
        <!-- Page Scroll Script -->
        <script>
            $(document).ready(function (){
                $("#click").click(function (){
                    $('html, body').animate({
                        scrollTop: $("#signupSection").offset().top
                    }, 700);
                });
            });
        </script>
    </head>
    
    <!--BODY SECTION-->
    <body>
        <!--HEADER SECTION -->
        <header>
            <!--Background Image -->
            <div id="body-bg">
                <img src="images/index-bg.jpg" alt="Share what matters">
                
            </div>
            <div id="body-overlay"></div>
            <!--Header Title-->
            <div id="header-title">
                <div id="header-title-1"><h1>Share what</h1></div>
                <div id="header-title-2"><h2>Matters</h2> </div>
            </div>
            <!--Header Sign up -->
            <div id="header-signupbox">
                <ul class = "tab">
                    <li id="signin-li" class="selected"> <a href="#"> Sign in </a></li>
                    <li id="signup-li"> <a href="#"> Sign up </a></li>
                </ul>
                <div id="signinContainer" class="show">
                    <form id = "signin" method="" class="" action="">
                        <input type = "text" placeholder = "Username"></input><br>
                        <input type = "text" placeholder = "Password"></input><br>
                        <input type = "submit" value = "Sign in">
                    </form>
                </div>
                <div id="signupContainer" class="hide">
                    <form id = "signup" method="" class="" action="">
                        <input type = "text" placeholder = "First Name"></input><br>
                        <input type = "text" placeholder = "Last Name"></input><br>
                        <input type = "text" placeholder = "Nickname"></input> <br>
                        <input type = "text" placeholder = "Password"></input> <br>
                        <input type = "text" placeholder = "Email"></input><br>
                        <input type = "submit" value = "Sign up">
                    </form>                
                </div>
                <div id="signinContainer">
                </div>
            </div>
        </header>
    </body>
<script src="js/action.js"></script>
</html> 