<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Qualification;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faculty_details');
    }
    public function upload_pic(Request $request){
        if($request->input('type')=='proPic'){
            $file=$request->file('photo');
            if($file!=null){
                $imageName =time().'.'.$file->getClientOriginalExtension();
                $path = base_path() . '/public/proPic/';
                $file->move($path , $imageName);
                $user=Auth::user();
                $user->proPic=$imageName;
                $user->save();
                return back()->with('msg','Image Upload successful');
            }else{
                return back()->with('msg','Image Upload un-successful');
            }
            
        }
    }
    public function update_password(Request $request){
        
        if($request->input('new_pass')!=$request->input('confirm_pass')){
            return back()->with('msg-password','Password mismatch');
        }
        $current_password = Auth::user()->password;           
          if(Hash::check($request->input('old_pass'), $current_password))
          {           
            $user=Auth::user();              
            $user->password = Hash::make($request->input('new_pass'));
            $user->save(); 
            return back()->with('msg-password','Password changed successfully');
          }else{
            return back()->with('msg-password','Incorrect password');
        }
    }
    public function update_index_page(Request $request){
        $user=Auth::user();
        $user->department=$request->input('department');
        $user->specialization=$request->input('specialization');
        $user->save();
        return back()->with('msg-index-page','Updated successfully');
    }
    public function update_basic_details(Request $request){
        $user=Auth::user();
        $user->name=$request->input('name');
        $user->designation=$request->input('designation');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->webpage=$request->input('webpage');
        $user->about_me=$request->input('about_me');
        $user->interests=$request->input('interests');
        $user->save();
        return back()->with('msg-basic-details','Updated successfully');
    }
    public function update_qualifications(Request $request){
        // var_dump($request->input('degree_description'));
        $degree_description=$request->input('degree_description');
        $degrees=$request->input('degree');
        $degree_college=$request->input('degree_college');
        $qualifications=Qualification::where('user_id',Auth::id())->get();
        foreach ($qualifications as $qualification) {
            $qualification->delete();
        }
        foreach ($degrees as $index => $degree) {
            # code...
            $qualification=new Qualification;
            $qualification->user_id=Auth::id();
            $qualification->degree=$degree;
            $qualification->college=$degree_college[$index];
            $qualification->description=$degree_description[$index];
            $qualification->save();
        }
    }
}
