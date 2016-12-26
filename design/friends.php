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
    <link rel="stylesheet" href="css/continue.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/friends.css">
</head>
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
        <div class = "adjust container">
            <div class="row">
                <div class="col-md-3">  
                    <!--LEFT USER PANE-->
                    <div id="user-info-box" class="row container">
                        <div id="pic-name" class="white-box row">
                            <div id="user-info">
                                <!--Profile Picture-->
                                <div id = "profile-pic" class="white-box row"> 
                                    <img src=""></img>
                                </div>
                                <!--User Information{Name, Nickname, Age, Gender}-->
                                <div id = "user-info" class="row">
                                    <h4>First Last Name</h4>
                                    <h4 id="Nickname" style="color: rgba(79,79,79,0.8)"> Nickname</h4>
                                </div>
                            </div>
                        </div>
                        <!--{Number of Friends} {Number of Requests}-->
                        <div id = "connections" class="row" >
                            <div class="col-md-6 white-box "style="padding-top:18px; height:70px; width: 135px;">
                                <h4 style="font-size: 15px">48 Friends</h4>
                            </div> 
                            <div class="col-md-6 white-box" style="padding-top:18px; height:70px; width: 135px; margin-left:10px;">
                                <h4 style="font-size: 15px; ">12 Requests</h4>
                            </div> 
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-9"> 
                    <h2 style="margin-left: 30px;margin-top:30px;">Friend Requests</h2>
                    <h4 style="margin-left: 30px;margin-top:30px;">You have 4 friends Requests</h4>
                    <!--FRIEND REQUESTS-->
                    <div id="request-wrapper">
                        <div>
                            <div class='request container'>
                                <div class="row" style="margin-left:auto; margin-right:auto;">
                                    <img 
                                    src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                </div>
                                <div class="row" style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                                <div class="row" style="margin-left:auto; bottom: 0px;margin-right:auto;">
                                    <input type= "submit" value="Add Friend">
                                </div>
                            </div>
                            <div class='request container'>
                                <div class="row" style="margin-left:auto; margin-right:auto;">
                                    <img 
                                    src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                </div>
                                <div class="row" style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                                <div class="row" style="margin-left:auto; bottom: 0px;margin-right:auto;">
                                    <input type= "submit" value="Add Friend">
                                </div>
                            </div>
                            <div class='request container'>
                                <div class="row" style="margin-left:auto; margin-right:auto;">
                                    <img 
                                    src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                </div>
                                <div class="row" style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                                <div class="row" style="margin-left:auto; bottom: 0px;margin-right:auto;">
                                    <input type= "submit" value="Add Friend">
                                </div>
                            </div>
                            <div class='request container'>
                                <div class="row" style="margin-left:auto; margin-right:auto;">
                                    <img 
                                    src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                </div>
                                <div class="row" style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                                <div class="row" style="margin-left:auto; bottom: 0px;margin-right:auto;">
                                    <input type= "submit" value="Add Friend">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FRIENDS-->
                    <div class="row">
                        <h2 style="margin-left: 57px;margin-top:30px;">Friends List:</h4>
                        <a href="">
                        <div class="col-md-3 friend" style="padding-top:10px;">
                             <img src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                <div style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                        </div>
                        </a>
                        <a href="">
                        <div class="col-md-3 friend" style="padding-top:10px;">
                             <img src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                <div style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                        </div>
                        </a>
                        <a href="">
                        <div class="col-md-3 friend" style="padding-top:10px;">
                             <img src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                <div style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                        </div>
                        </a>
                        <a href="">
                        <div class="col-md-3 friend" style="padding-top:10px;">
                             <img src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                <div style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                        </div>
                        </a>
                        <a href="">
                        <div class="col-md-3 friend" style="padding-top:10px;">
                             <img src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                <div style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">FirstN LastN</h4>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>
        </div>