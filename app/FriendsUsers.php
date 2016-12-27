<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendsUsers extends Model
{
    
	protected $table = 'friends_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'friend_id',
        'user_id',
        'state',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
