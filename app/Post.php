<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table ='posts';

    protected $fillable = [
        'caption',
        'image',
        'is_public',
        'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id'); 
    }
}
