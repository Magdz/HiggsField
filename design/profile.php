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
    <link rel="stylesheet" href="css/continue.css">
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
                    <!--MIDDLE POSTS-->
                    <div class="container">
                            <!--FIXED DIV TO WRITE STATUS UPDATE-->
                                <div id="status-update" class="row">
                                <!--Share an update button-->
                                <img></img>
                                <h4 style="margin-top: auto; margin-bottom:auto; padding-top:10px; font-size: 13px; height:50px;
                                width: 120px; text-align:center; font-weight:bold;
                                border-bottom:2px solid #691A99; ">
                                    Share an Update
                                </h4>
                                <!--Textarea-->
                                <textarea name="" id="status-txt" cols="75" rows="5" 
                                    placeholder="What's on your mind?" style="padding-top:10px;"></textarea>
                                <input type = "submit" value="Post"></input>
                            </div>
                            <!--USER PAST POSTS-->
                            <div class="row container post-update">
                                <!--Top Row-->
                                <div id="top" class="row">
                                    <!--Image-->
                                    <div class="col-md-2">
                                        <div id="thumb-img"></div>
                                    </div>
                                    <!--Poster Name-->
                                    <div style="margin-left:-30px; margin-top:10px;"class="col-md-2">
                                        <h6 style="font-weight:bold">First Last</h6>
                                        <h6>Nickname</h6>
                                    </div>
                                    <!--Time posted-->
                                    <div style="margin-left:-30px; margin-top:10px; float:right;" class="col-md-2">
                                        <h6 style="font-weight:bold">3 Hours ago</h6>
                                    </div>
                                </div>
                                <!--Text Row-->
                                <div id="text" style = "margin-top:20px; margin-left:20px; margin-bottom:10px;" class="row">
                                    <p>
                                        Lorem ipsum dolor sit amet, vim at denique consequat, postea omnium lobortis duo cu, volumus intellegam dissentiunt ei cum. Ius id utinam facilisis. Est et legimus singulis expetenda. Ad sit mazim corrumpit, ea pri primis facilis nostrum, usu et primis cetero. Nam invenire sapientem ut.
                                    </p>
                                </div>
                                <div id="interaction" class="row">
                                    <input type="submit" id="like-btn" value = ""></input>
                                    <input type="submit" id="comment-btn" value = ""></input>
                                </div>
                            </div>
                            <div class="row container post-update">
                                <!--Top Row-->
                                <div id="top" class="row">
                                    <!--Image-->
                                    <div class="col-md-2">
                                        <div id="thumb-img"></div>
                                    </div>
                                    <!--Poster Name-->
                                    <div style="margin-left:-30px; margin-top:10px;"class="col-md-2">
                                        <h6 style="font-weight:bold">First Last</h6>
                                        <h6>Nickname</h6>
                                    </div>
                                    <!--Time posted-->
                                    <div style="margin-left:-30px; margin-top:10px; float:right;" class="col-md-2">
                                        <h6 style="font-weight:bold">3 Hours ago</h6>
                                    </div>
                                </div>
                                <!--Text Row-->
                                <div id="text" style = "margin-top:20px; margin-left:20px; margin-bottom:10px;" class="row">
                                    <p>
                                        Lorem ipsum dolor sit amet, vim at denique consequat, postea omnium lobortis duo cu, volumus intellegam dissentiunt ei cum. Ius id utinam facilisis. Est et legimus singulis expetenda. Ad sit mazim corrumpit, ea pri primis facilis nostrum, usu et primis cetero. Nam invenire sapientem ut.
                                    </p>
                                </div>
                                <div id="interaction" class="row">
                                    <input type="submit" id="like-btn" value = ""></input>
                                    <input type="submit" id="comment-btn" value = ""></input>
                                </div>
                            </div>
                            <div class="row container post-update">
                                <!--Top Row-->
                                <div id="top" class="row">
                                    <!--Image-->
                                    <div class="col-md-2">
                                        <div id="thumb-img"></div>
                                    </div>
                                    <!--Poster Name-->
                                    <div style="margin-left:-30px; margin-top:10px;"class="col-md-2">
                                        <h6 style="font-weight:bold">First Last</h6>
                                        <h6>Nickname</h6>
                                    </div>
                                    <!--Time posted-->
                                    <div style="margin-left:-30px; margin-top:10px; float:right;" class="col-md-2">
                                        <h6 style="font-weight:bold">3 Hours ago</h6>
                                    </div>
                                </div>
                                <!--Text Row-->
                                <div id="text" style = "margin-top:20px; margin-left:20px; margin-bottom:10px;" class="row">
                                    <p>
                                        Lorem ipsum dolor sit amet, vim at denique consequat, postea omnium lobortis duo cu, volumus intellegam dissentiunt ei cum. Ius id utinam facilisis. Est et legimus singulis expetenda. Ad sit mazim corrumpit, ea pri primis facilis nostrum, usu et primis cetero. Nam invenire sapientem ut.
                                    </p>
                                </div>
                                <div id="interaction" class="row">
                                    <input type="submit" id="like-btn" value = ""></input>
                                    <input type="submit" id="comment-btn" value = ""></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>