<?php

namespace App\Helpers;

use App\FriendsUsers;

class CommonHelper
{

	public static function areFriends($user_id, $friend_id){
		if(count(FriendsUsers::where('user_id', $user_id)->where('friend_id', $friend_id)->get())){
			return true;
		}else{
			return false;
		}
	}

}