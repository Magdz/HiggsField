<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      $rules = [
          'querydata'=>'required'
      ];  
      $this->validate($request,$rules);
      $data = $request->all();
      $query = $data['querydata'];
      $user_result = User::where('firstname', $query)->orWhere('lastname',$query)->orWhere('email',$query)->orWhere('hometown',$query)->get();
      $post_result = Post::where('caption','LIKE', '%'.$query.'%')->get();
      return view('search', compact('post_result','user_result'));
    }

    public function filter(Request $request)
    {
        $queryf = [];
        $queryl = [];
        $querye = [];
        $queryh = [];
        if($request->firstname)
            $queryf = User::where('firstname',$request->firstname)->get();
        if($request->lastname)
            $queryl = User::where('lastname',$request->lastname)->get();
        if($request->email)
            $querye = User::where('email',$request->email)->get();
        if($request->hometown)
            $queryh = User::where('hometown',$request->hometown)->get();            
        $result = $queryf->merge($queryl)->merge($querye)->merge($queryh);

        $final = User::where('firstname', $result[0]->firstname)->where('lastname',$result[1]->lastname)->get();
        dd($final);
    }
}
