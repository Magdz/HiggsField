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
                            <div class='request container' style="position:relative;">
                                <div class="row" style="margin-left:auto; margin-right:auto;">
                                    <img 
                                    src="images/default_profile.jpg"
                                    style="height: 100px; width: auto;
                                    padding-left:50px;">
                                </div>
                                <div class="row" style="margin-left:auto;
                                 margin-right:auto; margin-bottom:10px;">
                                    <h4 style="font-size:14px;
                                    text-align:center">{{$request->user->firstname}} {{$request->user->lastname}}</h4>
                                </div>
                                <div class="row" style="margin-left:auto; bottom: 0px;
                                                        margin-right:auto;
                                                        position:absolute;">
                                    <div class="col-md-6" style="padding-left: 0px; padding-right:0px;">
                                        <form method="post" action="{!! route('request.accept', $request->user_id) !!}" >
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type= "submit" value="Add Friend" style="background-color:#8BC34A;">
                                        </form>
                                    </div>
                                    <div class="col-md-6"style="padding-left: 0px; padding-right:0px;">
                                        <form method="post" action="{!! route('request.reject', $request->user_id) !!}" >
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type= "submit" value="Ignore" style="background-color:#F44336;">
                                        </form>
                                    </div>
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
                            <form method="post" action="{!! route('friend.remove', $friend->id) !!}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" id="close-btn" value = "" style="float: left;margin-top: -7px;"> 
                            </form>
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