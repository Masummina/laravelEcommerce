<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title'];
    public static function listSelectGroup(){
        $groupList = [];
        $groups = Group::all();
        foreach ($groups as $group) {
            $groupList[$group->id]= $group->title;
        }
        return $groupList;
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}

