<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
    	$user_id = Auth::id();
        $posts = Post::where('user_id', $user_id)->latest()->get();
    	return view('profile', compact('posts'));
    }
}
