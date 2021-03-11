<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\ReceiptsRequest as RequestsReceiptsRequest;
use App\Receipt;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReceiptsController extends Controller
{
    public function __construct()
    {
       $this->data['user_tab'] = 'receipts';
    }
    public function index($id){
        $this->data['user'] = User::findOrFail($id);
        return view('users.receipts.index', $this->data);
        // return $this->data['sales'] = $user->sales;
    }

    public function store(RequestsReceiptsRequest $request, $user_id){
        $data = $request->all();
        $data['user_id'] = $user_id;
        $data['admin_id'] = Auth::id();
        if(Receipt::create($data)){
            Session::flash('message', 'Receipt create successfully');
        }

        return redirect()->route('receipts', ['id'=> $user_id]);

    }

    public function destroy($id, $receipt_id){
        if(Receipt::find($receipt_id)->delete()){
            Session::flash('message', 'Payment deleted successfully');
        }

        return redirect()->route('receipts', ['id'=> $id]);
    }
}
