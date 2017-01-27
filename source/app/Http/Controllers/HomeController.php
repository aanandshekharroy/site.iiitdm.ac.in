<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Qualification;
use Illuminate\Support\Facades\Input;
use App\ProfessionalExperience;
use App\AdministrativePosition;
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
            return back()->with('msg','Password mismatch');
        }
        $current_password = Auth::user()->password;           
          if(Hash::check($request->input('old_pass'), $current_password))
          {           
            $user=Auth::user();              
            $user->password = Hash::make($request->input('new_pass'));
            $user->save(); 
            return back()->with('msg','Password changed successfully');
          }else{
            return back()->with('msg','Incorrect password');
        }
    }
    public function update_index_page(Request $request){
        $user=Auth::user();
        $user->department=$request->input('department');
        $user->specialization=$request->input('specialization');
        $user->save();
        return back()->with('msg','Updated successfully');
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
        return back()->with('msg','Updated successfully');
    }
    public function update_qualifications(Request $request){
        // var_dump($request->input('degree_description'));
        
  // Display text here
        
        $degree_description=$request->input('degree_description');
        $degrees=$request->input('degree');
        $degree_college=$request->input('degree_college');
        $qualifications=Qualification::where('user_id',Auth::id())->get();
        foreach ($qualifications as $qualification) {
            $qualification->delete();
        }
        if(!empty($degrees)){
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
        
        return back()->with('msg','Updated successfully');
    }
    public function update_professional_qualification(Request $request){
        $professional_experience_title=$request->input('professional_experience_title');
        $professional_experience_description=$request->input('professional_experience_description');
        $professional_experience_from=$request->input('professional_experience_from');
        $professional_experience_to=$request->input('professional_experience_to');
        $professional_experiences=ProfessionalExperience::where('user_id',Auth::id())->get();
        foreach ($professional_experiences as $experience) {
            $experience->delete();
        }
        if(!empty($professional_experience_title)){
            foreach ($professional_experience_title as $index => $title) {
            # code...
                $experience=new ProfessionalExperience;
                $experience->user_id=Auth::id();
                $experience->title=$title;
                $experience->description=$professional_experience_description[$index];
                $experience->from=$professional_experience_from[$index];
                $experience->to=$professional_experience_to[$index];
                $experience->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
    public function update_administrative_position(Request $request){
        $administrative_position_title=$request->input('administrative_position_title');
        $administrative_position_description=$request->input('administrative_position_description');
        $administrative_position_from=$request->input('administrative_position_from');
        $administrative_position_to=$request->input('administrative_position_to');
        $administrative_positions=AdministrativePosition::where('user_id',Auth::id())->get();
        foreach ($administrative_positions as $position) {
            $position->delete();
        }
        if(!empty($administrative_position_title)){
            foreach ($administrative_position_title as $index => $title) {
            # code...
                $position=new AdministrativePosition;
                $position->user_id=Auth::id();
                $position->title=$title;
                $position->description=$position[$index];
                $position->from=$position[$index];
                $position->to=$position[$index];
                $position->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
}
