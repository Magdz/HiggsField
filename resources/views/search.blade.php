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
@stop