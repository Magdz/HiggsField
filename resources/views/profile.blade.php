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
                                <!--Share an update button-->
                                <img></img>
                                <h4 style="margin-top: auto; margin-bottom:auto; padding-top:10px; font-size: 13px; height:50px;
                                width: 120px; text-align:center; font-weight:bold;
                                border-bottom:2px solid #691A99; ">
                                    Share an Update
                                </h4>
                                <!--Textarea-->
                                <form method="post" action="{!! route('post.save') !!}">
                                    <textarea name="caption" id="status-txt" cols="75" rows="5" 
                                        placeholder="What's on your mind?" style="padding-top:10px;"></textarea>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type = "submit" value="Post"></input>
                                </form>
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
