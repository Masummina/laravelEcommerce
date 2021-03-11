<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserPurchaseController extends Controller
{
    public function __construct()
    {
       $this->data['user_tab'] = 'purchase';
    }
     public function index($id)
    {
        $this->data['user'] = User::findOrFail($id);
        return view('users.purchase.index', $this->data);
    }
}
