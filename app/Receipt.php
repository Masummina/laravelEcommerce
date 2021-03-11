<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['note', 'amount', 'date', 'user_id', 'admin_id'];
    public function admin()
    {
       return $this->belongsTo(Admin::class);
    }
}
