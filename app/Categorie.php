<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['title'];
    
    public function products(){
        return $this->hasMany(Product::class);
    }
    public static function selectCategoryList(){
        $arr = [];
        $categories = Categorie::all();
        foreach ($categories as $categorie) {
           $arr[$categorie->id] = $categorie->title;
        }
        return $arr;
    }
}

