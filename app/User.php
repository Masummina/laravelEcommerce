<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public $table = "users";
    protected $fillable = ['group_id', 'name', 'email', 'phone','address'];
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function sales(){
        return $this->hasMany(Sale_invoice::class);
    }
    public function purchase(){
        return $this->hasMany(Purchase_invoice::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function receipts(){
        return $this->hasMany(Receipt::class);
    }
}
