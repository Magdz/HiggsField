@extends('layout.profile-template')
@section('includes')
<link rel="stylesheet" href="css/profile.css">
@stop
@section('content')
      <div class = "adjust container">
            <div class="row">
                <div class="col-md-3">  
                    <!--LEFT USER PANE-->
                    @include('layout.sidebar')
                </div>
                
                <div class="col-md-9">     
                    <!--MIDDLE POSTS-->
                    <div class="container">
                            <!--FIXED DIV TO WRITE STATUS UPDATE-->
                            <div id="status-update" class="row">
                                <div class = "row">
                                    <!--Share an update button-->
                                    <a id = "textUpdate"  href = "#">
                                        <div id = "textUpdateDiv" class="col-md-3 tabSelected" style="margin-top: auto; 
                                                                margin-bottom:auto; 
                                                                padding-top:10px; height:50px;
                                                                width: 140px; ">
                                            <h4 style=" font-size: 13px; text-align:center; font-weight:bold">
                                                Share an Update
                                            </h4>
                                        </div>
                                    </a>

                                    <!--Browse Photo button-->
                                    <a id = "photoUpdate" href="#">
                                    <div class="col-md-3" id = "photoUpdateDiv" style="margin-top: auto; margin-bottom:auto; padding-top:10px; height:50px;
                                        width: 140px;">
                                        <h4 style=" font-size: 13px; text-align:center; font-weight:bold">
                                            Share Photo
                                        </h4>
                                    </div>
                                    </a>

                                    <!--Picture Upload-->
                                    <div id = "status-photo" class = "hide" style="width: 590px; height:160px;
                                                                            margin-bottom:3px; 
                                                                            margin-top:50px;
                                                                            text-align:center;
                                                                            padding-top:60px;
                                                                            border: 1px solid #eeeeee;">
                                        <a href="#" >
                                            Upload Photos
                                        </a>
                                    </div>
                                    <!--Textarea-->
                                    <textarea name="" id="status-txt" class = "show" cols="75" rows="7" 
                                        placeholder="What's on your mind?" style="padding-top:10px; margin-top:10px;"></textarea>
                                </div>
                                <div class = "row" id="user-action">
                                    <input type = "submit" style = "position:relative;" value="Post"></input>
                                    <input type = "checkbox"></input>
                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop