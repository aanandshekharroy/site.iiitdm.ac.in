<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
    	$users=User::all();
    	return view('admin_dashboard')->with('users',$users);
    }
    public function delete(Request $request){
    	$user=User::where('id',$request->input('user_id'))->first();
    	if($user->delete()){
    		return 1;
    	}else{
    		return 0;
    	}
    }
    public function add_user(Request $request){
    	$user=new User;
    	$user->name=$request->input('name');
    	$user->email=$request->input('email');
    	$user->password=bcrypt($request->input('password'));
    	$user->save();
    	return back()->with('msg','New user added');
    }
    public function change_password(Request $request){
    	$user=User::where('id',$request->input('user_id'))->first();
    	$user->password=bcrypt($user->email);
    	$user->save();
    	return 1;
    }
}
