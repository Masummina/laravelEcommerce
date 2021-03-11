<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Categorie::class);
    }
    protected $fillable = ['title', 'description', 'cost_price', 'price', 'category_id'];
}
