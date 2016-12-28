<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
    	$user_id = Auth::id();
    	$friends = Auth::user()->friends()->get();
        $posts = Post::where('user_id', $user_id)->orWhere('is_public', '0')->latest()->get();
        foreach($friends as $friend){
        	$posts = $posts->merge($friend->posts()->latest()->get());
        }

  //       select * from posts 
  //       inner join users on users.id=posts.user_id
  //       where users.id=$user_id;
  //       union
  //       select * from posts
  //       inner join friends_users on friends_users.user_id=posts.user_id
  //       where friends_users.state=1
  //       union
  //	   select * from posts
  //       inner join friends_users on friends_users.user_id=posts.user_id
  //       where friends_users.state=0 AND posts.is_public=1;

    	return view('profile', compact('posts'));
    }

    public function profile(){
    	$user_id = Auth::id();
      $posts = Post::where('user_id', $user_id)->latest()->get();
    	return view('profile', compact('posts'));
    }

    public function user($id){
      $posts = Post::where('user_id', $id)->latest()->get();
      return view('profile', compact('posts'));
    }
}
