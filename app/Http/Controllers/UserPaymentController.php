<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPaymentRequest;
use App\User;
use App\Payment;
use Session;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    
    public function __construct()
    {
       $this->data['user_tab'] = 'payment';
    }
    public function index($id){
        $this->data['user'] = User::findOrFail($id);
        return view('users.payment.index', $this->data);
        // return $this->data['sales'] = $user->sales;
    }

    public function store(UserPaymentRequest $request, $user_id){
        $data            = $request->all();
        $data['user_id'] = $user_id;
        if(Payment::create($data)){
            Session::flash('message', 'Payment create successfully');
        }

        return redirect()->route('payment.store', ['id'=> $user_id]);
        
    }

    public function destroy($id, $payment_id){
        if(Payment::find($payment_id)->delete()){
            Session::flash('message', 'Payment deleted successfully');
        }

        return redirect()->route('payment', ['id'=> $id]);
        
    }
}
