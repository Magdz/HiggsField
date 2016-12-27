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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/search.css">
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
        <!--LINKS BAR-->
        <div id="links-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        <!--MAIN BODY-->
        <div class="container" style="margin-top:30px;">
            <div class="row">
                <!--{Filters: Search Fields}-->
                <div class="col-md-2">
                    <div id = "Filter-Box" class = "white-box" style="margin-left: -55px; padding-left: 18px;
                    padding-top: 30px; height:auto; width:250px; padding-bottom: 20px;">
                        <div>
                            <h4 style="font-weight:14px; margin-bottom:-5px;">Filter Search</h4> <br>
                        </div>
                        <form id = "filter-search"action="">
                            <h5 style="font-weight:bold;">First Name:</h5><input type="text" placeholder="First Name"><br><br>
                            <h5 style="font-weight:bold;">Last Name:</h5><input type="text" placeholder="Last Name"><br><br>
                            <h5 style="font-weight:bold;">Nickname:</h5><input type="text" placeholder="NickName"><br><br>
                            <h5 style="font-weight:bold;">Hometown:</h5><input type="text" placeholder="Hometown"><br><br>
                            <input type="submit" value="Search" style="float: right;">
                        </form>
                    </div>
                </div>
                <div class="col-md-10">
                    <!--{Contains search entry}-->
                    <div class="container white-box">
                        <!--Search header-->
                        <div class="row" id="" style="border-bottom:1px solid #e3e3e3;">
                            <div class="col-md-12">
                                <div id="search-header">
                                    <h5 style="float:left;">People</h5>
                                    <h5  style="float:right;" >10 Results</h5>
                                </div>
                            </div>
                        </div>
                        <!--{Search Results}-->
                        <!--RESULT 1-->
                        <div class="row" id = "" style="margin-top: 20px; margin-bottom:20px; padding-bottom: 10px;">
                            <div class="col-md-3" id = "user-pic" style="margin-left:20px;border-radius:60px; width:60px; height:60px; background-color:#6ed3cf;">
                            </div>
                            <div class="col-md-9" id = "user-info" style="float: left;border-bottom:1px solid #e3e3e3; padding-bottom: 40px; ">
                                {First Last Name}<br>
                                {Nickname}
                                <input 
                                type="submit" 
                                value = "Send Request"
                                style = "border-radius: 60px; height: 35px; width: 120px;
                                margin-top: -15px;
                                color: #691A99;
                                background-color: transparent; float:right; border: 3px solid #691A99">
                            </div>   
                        </div>
                        <!--RESULT 2-->
                        <div class="row" id = "" style="margin-top: 20px; margin-bottom:20px; padding-bottom: 10px;">
                            <div class="col-md-3" id = "user-pic" style="margin-left:20px;border-radius:60px; width:60px; height:60px; background-color:#6ed3cf;">
                            </div>
                            <div class="col-md-9" id = "user-info" style="float: left;border-bottom:1px solid #e3e3e3; padding-bottom: 40px; ">
                                {First Last Name}<br>
                                {Nickname}
                                <input 
                                type="submit" 
                                value = "Send Request"
                                style = "border-radius: 60px; height: 35px; width: 120px;
                                margin-top: -15px;
                                color: #691A99;
                                background-color: transparent; float:right; border: 3px solid #691A99">
                            </div>   
                        </div>
                     </div>
                </div>
            </div>
        </div>
</body>
</html>