<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Session;
class UserGroupController extends Controller
{
    public function groups(){
        $this->data['groups'] = Group::all();
        return view('groups.group', $this->data);
    }
    public function create(){
        return view('groups.create');
    }
    public function store(Request $request){
        $form_date = $request->all();
        // dd($form_date);
        if(Group::create($form_date)){
            Session::flash('message', 'Group created Sucessfully');
        }
        return redirect()->to('groups');
    }
    public function destroy($id){
        $delete = Group::find($id)->delete();
        // session message start
        if($delete){
            Session::flash('message', 'Group Deleted Sucessfully');
        }
        return redirect()->to('groups');
        // session message End
    }

    
}
