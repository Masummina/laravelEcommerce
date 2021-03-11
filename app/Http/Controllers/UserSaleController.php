<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserSaleController extends Controller
{
    public function __construct()
    {
       $this->data['user_tab'] = 'seles';
    }
    public function sales($id){
        $this->data['user'] = User::findOrFail($id);
        return view('users.sales.sales', $this->data);
        // return $this->data['sales'] = $user->sales;
    }
    
}
