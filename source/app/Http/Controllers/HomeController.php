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
use App\Gallery;
use App\FacultyStudent;
use App\Conference;
use App\Course;
use App\Publication;
use App\Project;
use App\Honor;
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
        return view('faculty_edit_details');
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
        }else if($request->input('type')=='gallery'){
            $file=$request->file('photo');
            if($file!=null){
                $imageName =time().'.'.$file->getClientOriginalExtension();
                $path = base_path() . '/public/proPic/';
                $file->move($path , $imageName);
                $user_id=Auth::id();
                $gallery=new Gallery;
                $gallery->user_id=$user_id;
                $gallery->description=$request->input('gallery_description');
                $gallery->filename=$imageName;
                $gallery->save();
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
        $user->address=$request->input('address');
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
        // var_dump($administrative_position_title);die();
        if(!empty($administrative_position_title)){
            foreach ($administrative_position_title as $index => $title) {
            # code...
                $position=new AdministrativePosition;
                $position->user_id=Auth::id();
                $position->title=$title;
                $position->description=$administrative_position_description[$index];
                $position->from=$administrative_position_from[$index];
                $position->to=$administrative_position_to[$index];
                $position->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
    public function update_cv(Request $request){
        if($request->file('cv')){
            $file=$request->file('cv');
            if($file!=null){
                $fileName =time().'.'.$file->getClientOriginalExtension();
                $path = base_path() . '/public/cv/';
                $file->move($path , $fileName);
                $user=Auth::user();
                $user->cv=$fileName;
                $user->save();
                return back()->with('msg','CV Upload successful');
            }else{
                return back()->with('msg','CV Upload un-successful');
            }
            
        }
    }
    public function delete_cv(){
        $user=Auth::user();
        $file_loc=base_path() .'/public'.$user->cv;
        if(file_exists($file_loc)){
            unlink($file_loc);
        }
        $user->cv=null;
        $user->save();
        return back()->with('msg','CV Deleted');
    }
    public function delete_images($id){
        $image=Gallery::where(['user_id'=>Auth::id(),'id'=>$id])->first();
        $file_loc=base_path() .'/public'.$image->filename;
        if(file_exists($file_loc)){
            unlink($file_loc);
        }
        $image->delete();
        return back()->with('msg','Image Deleted');
    }
    public function update_students(Request $request){
        $roll_numbers=$request->input('roll_number');
        $names=$request->input('name');
        $categories=$request->input('category');
        $status=$request->input('status');
        $years=$request->input('year');
        $title_works=$request->input('title_work');
        $co_guides=$request->input('co_guide');
        $students=FacultyStudent::where('faculty_id',Auth::id())->get();
        foreach ($students as $student) {
            $student->delete();
        }
        if(!empty($names)){
            foreach ($names as $index => $name) {
            # code...
                $student=new FacultyStudent;
                $student->faculty_id=Auth::id();
                $student->roll_number=$roll_numbers[$index];
                $student->name=$name;
                $student->category=$categories[$index];
                $student->status=$status[$index];
                $student->year=$years[$index];
                $student->title_work=$title_works[$index];
                $student->co_guide=$co_guides[$index];
                $student->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
    public function update_web_data(Request $request){
        $user=Auth::user();
        $user->gmail=$request->input('gmail');
        $user->facebook=$request->input('facebook');
        $user->twitter=$request->input('twitter');
        $user->skype=$request->input('skype');
        $user->alternate_phone=$request->input('alternate_phone');
        $user->fax=$request->input('fax');
        $user->linkedin=$request->input('linkedin');
        $user->save();
        return back()->with('msg','Updated successfully');
    }
    public function update_conferences(Request $request){
        $descriptions=$request->input('description');
        $links=$request->input('link');
        $conferences=Conference::where('user_id',Auth::id())->get();
        foreach ($conferences as $conference) {
            $conference->delete();
        }
        if(!empty($descriptions)){
            foreach ($descriptions as $index => $description) {
            # code...
                $conference=new Conference;
                $conference->user_id=Auth::id();
                $conference->description=$description;
                $conference->link=$links[$index];
                $conference->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
    public function update_courses(Request $request){
        $codes=$request->input('code');
        $names=$request->input('name');
        $currently_teaching=$request->input('currently_teaching');
        $department=$request->input('department');
        $links=$request->input('link');
        $institute=$request->input('institute');
        $ugs=$request->input('ug');
        $pgs=$request->input('pg');
        $phds=$request->input('phd');
        var_dump($request->all());
        $courses=Course::where('user_id',Auth::id())->get();
        // var_dump(json_encode($category[]));
        // die();
        foreach ($courses as $course) {
            $course->delete();
        }
        if(!empty($names)){
            foreach ($names as $index => $name) {
            # code...
                $course=new Course;
                $course->user_id=Auth::id();
                $course->code=$codes[$index];
                $course->name=$name;
                $course->currently_teaching=$currently_teaching[$index];
                $course->department=$department[$index];
                $course->link=$links[$index];
                $course->institute=$institute[$index];
                $course->ug=$ugs[$index];
                $course->pg=$pgs[$index];
                $course->phd=$phds[$index];
                $course->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
    public function update_publications(Request $request){
        $titles=$request->input('title');
        $authors=$request->input('author');
        $description=$request->input('description');
        $types=$request->input('type');
        $links=$request->input('link');
        $publications=Publication::where('user_id',Auth::id())->get();
        foreach ($publications as $publication) {
            $publication->delete();
        }
        if(!empty($titles)){
            foreach ($titles as $index => $title) {
            # code...
                $publication=new Publication;
                $publication->user_id=Auth::id();
                $publication->title=$title;
                $publication->type=$types[$index];
                $publication->author=$authors[$index];
                $publication->description=$description[$index];
                $publication->link=$links[$index];
                $publication->save();
            }
        }
        
        return back()->with('msg','Updated successfully');
    }
    public function update_projects(Request $request){
        $titles=$request->input('title');
        $descriptions=$request->input('description');
        $projects=Project::where('user_id',Auth::id())->get();
        foreach ($projects as $project) {
            $project->delete();
        }
        if(!empty($titles)){
            foreach ($titles as $index => $title) {
            # code...
                $project=new Project;
                $project->user_id=Auth::id();
                $project->title=$title;
                $project->description=$descriptions[$index];
                $project->save();
            }
        }        
        return back()->with('msg','Updated successfully');
    }
    public function update_honors(Request $request){
        $titles=$request->input('title');
        $descriptions=$request->input('description');
        $periods=$request->input('period');
        $honors=Honor::where('user_id',Auth::id())->get();
        foreach ($honors as $honor) {
            $honor->delete();
        }
        if(!empty($titles)){
            foreach ($titles as $index => $title) {
            # code...
                $honor=new Honor;
                $honor->user_id=Auth::id();
                $honor->title=$title;
                $honor->description=$descriptions[$index];
                $honor->period=$periods[$index];
                $honor->save();
            }
        }        
        return back()->with('msg','Updated successfully');
    }
}
