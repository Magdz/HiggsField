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

                                    <form method="post" action="{!! route('post.save') !!}">
                                    <!--Picture Upload-->
                                    <div id = "status-photo" class = "hide" style="width: 590px; height:160px;
                                                                            margin-bottom:3px; 
                                                                            margin-top:50px;
                                                                            text-align:center;
                                                                            padding-top:60px;
                                                                            border: 1px solid #eeeeee;">
                                        <input type="file" name="image">

                                    </div>
                                    <!--Textarea-->
                                        <textarea name="caption" id="status-txt" cols="75" rows="7" 
                                            placeholder="What's on your mind?" style="padding-top:10px;"></textarea>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class = "row" id="user-action">
                                            <input type = "submit" style = "position:relative; margin-left:30px;" value="Post"></input>
                                            <input type = "checkbox" name="is_public" <h4 style=" font-size: 13px; text-align:center; font-weight:bold">
                                            Private Post
                                        </h4>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--USER PAST POSTS-->
                            @foreach($posts as $post)
                            <div class="row container post-update" style="position:relative;">
                                <!--Top Row-->
                                <div id="top" class="row">
                                    @if($post->user_id == Auth::id())
                                    <form  method="post" action="{!! route('post.delete', $post->id) !!}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" id="close-btn" value=""> 
                                    </form>
                                    @endif
                                    <!--Image-->
                                     <div id="thumb-img">
                                            <div id = "image" class="row">
                                                @if($post->image)
                                                 <img src="{ post->image }">
                                                 <img src="{ asset(post->image) }" >
                                                 <form method="post" action="{!! route('post.save') !!}">
                                                 
                                                 @endif
                                        </div>
                                    </div>
                                    <!--Poster Name-->
                                    <div style="margin-left:-30px; margin-top:10px;" class="col-md-2">
                                        <h6 style="font-weight:bold">{{$post->user->firstname}} {{$post->user->lastname}}</h6>
                                        <h6>{{$post->user->nickname}}</h6>
                                    </div>
                                    <!--Time posted-->
                                    <div style="margin-left:-30px; margin-top:10px; float:right;" class="col-md-2">
                                        <h6 style="font-weight:bold">{{$post->created_at->diffForHumans()}} </h6>
                                    </div>
                                </div>
                                <!--Text Row-->
                                <div id="text" style = "margin-top:20px; margin-left:20px; margin-bottom:10px;" class="row">
                                    <p>{{ $post->caption }}</p>
                                </div>
                                <div id="interaction" class="row" style="position:absolute; bottom:0; width:100%">
                                    <input type="submit" id="like-btn" value = "">
                                    <input type="submit" id="comment-btn" value = "">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
