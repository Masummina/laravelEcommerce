<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
    	$name =  "My name is Masum";
    	$age = 29;

    	$data2 = [
    		'name' => 'Masum Mina',
    		'age' => 77
    	];
    	$this->date = [
    		'name' => $name,
    		'age' => 99
    	];
        $test = DB::table('categories')->get();
        dd($test);
    
    	// $this->date['name'] = $name;
    	// $this->date['age'] = $age;
    	// $this->date['subject'] = ['Bangla', 'English', 'Math'];
    	return view('home.index', $this->date);
    }
}
