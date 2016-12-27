<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/settings.css">
    
</head>

<body>
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
    
    <div id = "pageContainer" sytle = "margin-top: 5px;"class = "row">
        <div id = "leftpane" class = "col-sm-6">
            <ul class = "tab">
                        <li id="required-li" > <a href="#"> Required </a></li>
                        <li id="optional-li" class="selected"> <a href="#"> Optional </a></li>
            </ul>
            <h4 style="color:white;">Your profile is a few clicks away... </h4>
            <form id = "optional" class = "show">
                <input type = "text" class = "inputStyle" placeholder = "Nickname"></input><br>
                <input type = "text" class = "inputStyle" placeholder = "Phone Number"></input><br>
                <input type = "text" class = "inputStyle" placeholder = "Hometown" ></input><br>
                <select class="inputStyle" placeholder = "Marital Status" style="color:white;"><br>
                    <option value = "Select">Select</option>
                    <option value = "Single">Single</option>
                    <option value = "Engaged">Engaged</option>
                    <option value = "Married">Married</option>
                </select>
                <textarea class = "inputStyle" style = "height:70px" placeholder = "Biography" rows= "4" cols= "50"></textarea> <br>
            </form>
            <form id = "required" method="" class="hide" action="">
                    <input class= "inputStyle" type = "text" placeholder = "First Name"></input><br>
                    <input class= "inputStyle" type = "text" placeholder = "Last Name"></input><br>
                    <input class= "inputStyle" type = "text" placeholder = "Gender"></input> <br>
                    <input class= "inputStyle" type = "text" placeholder = "Password"></input> <br>
                    <input class= "inputStyle" type = "text" placeholder = "Email"></input><br>
                    <input class= "inputStyle" type = "date" placeholder = "Birth Date" style="color:#A9B0C4"></input><br>
            </form>  
            <div class = "bottom-btns">
                <a href="#" style="font-size:14px; text-decoration: underline;">Later</a>
            <input class= "addPic2" style= "border: 2px solid #6ed3cf; margin-left:349px"type="submit" value = "Go">
            </div>
                          
        </div>  
        <div id = "picturepane" class = "col-sm-6">
            <img class = "displayed" src="Images/default_profile.jpg"></img>
            <div id = "overlay-img">
                <input class= "addPic" type="submit" value = "">
                <input  style = "width: 100px;border:none; color:white; margin-top: -50px"  class = "inputStyle" type= "text" Value = "User Name">
            </div>
        </div>

    </div>
</body>
<script src="js/action.js"></script>
</html>