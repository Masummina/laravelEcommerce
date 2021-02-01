<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'discription', 'status', 'user_id '
    ];

    public function user(){
    	return $this->belongsTo('App\user', 'user_id', 'id');
    }
    public function tags(){
    	return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
