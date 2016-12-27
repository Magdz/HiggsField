@extends('layout.profile-template')
@section('includes')
<link rel="stylesheet" href="css/settings.css">
@stop
@section('content')
<div id = "pageContainer" style = "margin-top: 5px;" class = "row ">
    <div id = "leftpane" class = "col-sm-6">
        <ul class = "tab">
                    <li id="required-li" > <a href="#"> Required </a></li>
                    <li id="optional-li" class="selected"> <a href="#"> Optional </a></li>
        </ul>
        <h4 style="color:white;">Your profile is a few clicks away... </h4>
        <form id = "optional" class = "show">
            <input type = "text" class = "inputStyle" placeholder = "Nickname"></input><br>
            <input type = "text" class = "inputStyle" placeholder = "Phone Number"></input><br>
            <input type = "text" class = "inputStyle" placeholder = "Hometown" ></input><br>
            <select class="inputStyle" placeholder = "Marital Status" style="color:white;"><br>
                <option value = "Select">Select</option>
                <option value = "Single">Single</option>
                <option value = "Engaged">Engaged</option>
                <option value = "Married">Married</option>
            </select>
            <textarea class = "inputStyle" style = "height:70px" placeholder = "Biography" rows= "4" cols= "50"></textarea> <br>
        </form>
        <form id = "required" method="" class="hide" action="">
                <input class= "inputStyle" type = "text" placeholder = "First Name"></input><br>
                <input class= "inputStyle" type = "text" placeholder = "Last Name"></input><br>
                <input class= "inputStyle" type = "text" placeholder = "Gender"></input> <br>
                <input class= "inputStyle" type = "text" placeholder = "Password"></input> <br>
                <input class= "inputStyle" type = "text" placeholder = "Email"></input><br>
                <input class= "inputStyle" type = "date" placeholder = "Birth Date" style="color:#A9B0C4"></input><br>
        </form>  
        <div class = "bottom-btns">
            <a href="#" style="font-size:14px; text-decoration: underline;">Later</a>
        <input class= "addPic2" style= "border: 2px solid #6ed3cf; margin-left:349px"type="submit" value = "Go">
        </div>
                        
    </div>  
    <div id = "picturepane" class = "col-sm-6">
        <img class = "displayed" src="Images/default_profile.jpg"></img>
        <div id = "overlay-img">
            <input class= "addPic" type="submit" value = "">
            <input  style = "width: 100px;border:none; color:white; margin-top: -50px"  class = "inputStyle" type= "text" Value = "User Name">
        </div>
    </div>
</div>
<script src="js/action.js"></script>
@stop