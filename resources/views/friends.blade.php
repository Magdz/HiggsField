@extends('layout.profile-template')
@section('includes')
<link rel="stylesheet" href="css/friends.css">
@stop
@section('content')
<div class = "adjust container">
            <div class="row">
                <div class="col-md-3">  
                    @include('layout.sidebar')
                </div>
                <div class="col-md-9"> 
                    <h2 style="margin-left: 30px;margin-top:30px;">Friend Requests</h2>
                    <h4 style="margin-left: 30px;margin-top:30px;">You have {{count($friendRequests)}} Friends Requests</h4>
                    
                    <div id="request-wrapper">
                        <div>
                            <!--FRIEND REQUESTS-->
                            @foreach($friendRequests as $request)
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
                                    text-align:center">{{$request->firstname}} {{$request->lastname}}</h4>
                                </div>
                                <div class="row" style="margin-left:auto; bottom: 0px;margin-right:auto;">
                                    <input type= "submit" value="Add Friend">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <h2 style="margin-left: 57px;margin-top:30px;">Friends List:</h4>
                        <!--FRIENDS-->
                        @foreach($friends as $friend)
                        <a href="">
                        <div class="col-md-3 friend" style="padding-top:10px;">
                             <img src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                <div style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">{{$friend->firstname}} {{$friend->lastname}}</h4>
                                </div>
                        </div>
                        @endforeach
                        </a>
                    </div>
                </div>
        </div>
@stop