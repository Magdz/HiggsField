<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\FriendsUsers;

class FriendsController extends Controller
{
    public function index(){
    	$friends = Auth::user()->friends()->get();
    	$friendRequests = Auth::user()->requests()->get();	
    	return view('friends', compact('friends', 'friendRequests'));
    }
}
