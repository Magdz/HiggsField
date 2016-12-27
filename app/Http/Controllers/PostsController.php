<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostsController extends Controller
{

    public function save(Request $request)
    {
    	$rules = [
    		'caption'=>'required',
    	];
    	$this->validate($request, $rules);

    	$data = $request->all();
    	$data['is_public'] = 1;
    	$data['user_id'] = Auth::id();

    	Post::create($data);

    	return redirect(route('home'));
    }

}
