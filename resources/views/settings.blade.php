@extends('layout.profile-template')
@section('includes')
<link rel="stylesheet" href="css/settings.css">
@stop
@section('content')
<form enctype="multipart/form-data" method="post" action="{!! route('settings.update') !!}">
<div id = "pageContainer" style = "margin-top: 5px;" class = "row ">
    <div id = "leftpane" class = "col-sm-6">
        <ul class = "tab">
                    <li id="required-li" > <a href="#"> Required </a></li>
                    <li id="optional-li" class="selected"> <a href="#"> Optional </a></li>
        </ul>
        <h4 style="color:white;">Your profile is a few clicks away... </h4>
        <div id = "optional" class = "show">
            <input type = "text" class = "inputStyle" placeholder = "Nickname" name="nickname" value="{{ $user->nickname }}"><br>
            <input type = "text" class = "inputStyle" placeholder = "Phone Number" name="phone_number" @if(count($user->phoneNumbers)) value="{{ $user->phoneNumbers->first->phone_number }}" @endif><br>
            <input type = "text" class = "inputStyle" placeholder = "Hometown" name="hometown" value="{{ $user->hometown }}"><br>
            <select class="inputStyle" placeholder = "Marital Status" name="marital_status" value="{{ $user-> marital_status }}" style="color:white;"><br>
                <option value = "Select">Select</option>
                <option value = "Single">Single</option>
                <option value = "Engaged">Engaged</option>
                <option value = "Married">Married</option>
            </select>
            <textarea class = "inputStyle" style = "height:70px" placeholder = "Biography" name="about" rows= "4" cols= "50"></textarea> <br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class = "bottom-btns">
                <a href="#" style="font-size:14px; text-decoration: underline;">Later</a>
            <input class= "addPic2" style= "border: 2px solid #6ed3cf; margin-left:349px" type="submit" value = "Go">
            </div>
        </div>
        <div id = "required"  class="hide">
                <input class= "inputStyle" type = "text" placeholder = "First Name" name="firstname" value="{{ $user->firstname }}"><br>
                <input class= "inputStyle" type = "text" placeholder = "Last Name" name="lastname" value="{{ $user->lastname }}"><br>
                <input class= "inputStyle" type = "text" placeholder = "Gender" name="gender" value="{{ $user->gender }}"> <br>
                <input class= "inputStyle" type = "date" placeholder = "Birth Date" name="birthdate" style="color:#A9B0C4" value="{{ $user->birthdate }}"><br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class = "bottom-btns">
                    <a href="#" style="font-size:14px; text-decoration: underline;">Later</a>
                <input class= "addPic2" style= "border: 2px solid #6ed3cf; margin-left:349px" type="submit" value = "Go">
                </div>
        </div> 
    </div>  
    <div id = "picturepane" class = "col-sm-6">
        @if($user->profile_picture)
            <img class = "displayed" src="{{ $user->profile_picture }}">
        @else
            <img class = "displayed" src="{{ URL::asset('/') }}images/default_profile.jpg">
        @endif
        <div id = "overlay-img">
            <input class= "addPic form-control" type="file" name="profile_picture">
        </div>
    </div>
</div>
</form>
@stop