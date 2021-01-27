<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create(){
    	$this->date = [
    		'name' => 'Masum',
    		'email' =>'masum@gmail.com',
    		'password' => '123456789'
    		

    	];
    	User::create($this->date);

    }
}
