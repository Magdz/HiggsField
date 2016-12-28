@extends('layout.profile-template')

@section('includes')
<link rel="stylesheet" href="css/search.css">
@stop
@section('content')
        <div class="container" style="margin-top:30px;">
            <div class="row">
                <!--{Filters: Search Fields}-->
                <div class="col-md-2">
                    <div id = "Filter-Box" class = "white-box" style="margin-left: -55px; padding-left: 18px;
                    padding-top: 30px; height:auto; width:250px; padding-bottom: 20px;">
                        <div>
                            <h4 style="font-weight:14px; margin-bottom:-5px;">Filter Search</h4> <br>
                        </div>
                        <form id = "filter-search" method = "post"  action="">
                            <h5 style="font-weight:bold;">First Name:</h5><input name = "firstname" type="text" placeholder="First Name"><br><br>
                            <h5 style="font-weight:bold;">Last Name:</h5><input name = "lastname" type="text" placeholder="Last Name"><br><br>
                            <h5 style="font-weight:bold;">Email:</h5><input name = "Email" type="text" placeholder="Email"><br><br>
                            <h5 style="font-weight:bold;">Hometown:</h5><input name = "hometown" type="text" placeholder="Hometown"><br><br>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                    <h5  style="float:right;" >{{count($user_result)}} Results</h5>
                                </div>
                            </div>
                        </div>
                        <!--{People Results}-->
                        @foreach($user_result as $item)
                        <!--RESULT 1-->
                        <div class="row" id = "" style="margin-top: 20px; margin-bottom:20px; padding-bottom: 10px;">
                            <div class="col-md-3" id = "user-pic" style="margin-left:20px;border-radius:60px; width:60px; height:60px; background-color:#6ed3cf;">
                            </div>
                            <div class="col-md-9" id = "user-info" style="float: left;border-bottom:1px solid #e3e3e3; padding-bottom: 40px; ">
                                {{$item->firstname}} {{$item->lastname}}<br>
                                {{$item->nickname}}
                                @unless($item->id == Auth::id() || App\Helpers\CommonHelper::areFriends(Auth::id(), $item->id))
                                    <form method="post" action="{!! route('friend.request', $item->id) !!}">
                                        <input 
                                        type="submit" 
                                        value = "Send Request"
                                        style = "border-radius: 60px; height: 35px; width: 120px;
                                        margin-top: -15px;
                                        color: #691A99;
                                        background-color: transparent; float:right; border: 3px solid #691A99">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                @endunless
                            </div>   
                        </div>
                        @endforeach

                        <div class="row" id="" style="border-bottom:1px solid #e3e3e3;">
                            <div class="col-md-12">
                                <div id="search-header">
                                    <h5 style="float:left;">Posts</h5>
                                    <h5  style="float:right;" >{{count($post_result)}} Results</h5>
                                </div>
                            </div>
                        </div>
                        <!--{Post Results}-->
                        @foreach($post_result as $item)
                        <!--RESULT 1-->
                        <div class="row" id = "" style="margin-top: 20px; margin-bottom:20px; padding-bottom: 10px; border-bottom:1px solid #e3e3e3;">
                            <div class="col-md-2" id = "user-pic" style="margin-left:20px;border-radius:60px; width:60px; height:60px; background-color:#6ed3cf;">
                            </div>
                            <div class="col-md-2" id = "user-info" style="float: left; padding-bottom: 40px; ">
                                {{Auth::user()->firstname}} {{Auth::user()->lastname}}<br>
                                {{Auth::user()->nickname}}
                            </div>
                            <div class="col-md-8" style="padding-top:10px;">
                                <p>
                                    {{$item->caption}}
                                </p>
                            </div> 
                        </div>
                        @endforeach
                     </div>
                </div>
            </div>
        </div>
@stop