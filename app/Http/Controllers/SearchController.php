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
      $result = User::where('firstname', $query)->orWhere('lastname',$query)->orWhere('email',$query)->get();
      return view('search', compact('result'));
    }
}
