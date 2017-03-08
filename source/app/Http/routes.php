<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;
use App\Staff;
use App\ResearchStaff;
use App\OfficeAdministration;
Route::get('/', function () {
    return view('index');
});






Route::auth();


//To register new faculty, remove the next block of code. From....
Route::get('/register',function(){
	return "Not permitted! See the routes.php for further info";
});
// ...To here

Route::get('/seed-username',function(){
$users=User::all();
foreach ($users as $user) {
	# code...
	if(empty($user->username)){
		$user->username=substr($user->email,0,strpos($user->email,"@"));
		$user->save();
	}
}
});


Route::get('/home', 'HomeController@index');
Route::post('upload-photo','HomeController@upload_pic');
Route::post('update-password','HomeController@update_password');
Route::post('update-index-page','HomeController@update_index_page');
Route::post('update-basic-details','HomeController@update_basic_details');
Route::post('update-qualifications','HomeController@update_qualifications');
Route::post('update-professional-experience','HomeController@update_professional_qualification');
Route::post('update-administrative-position','HomeController@update_administrative_position');
Route::post('update-cv','HomeController@update_cv');
Route::post('update-students','HomeController@update_students');
Route::post('update-webdata','HomeController@update_web_data');
Route::post('update-conferences','HomeController@update_conferences');
Route::post('update-courses','HomeController@update_courses');
Route::post('update-publications','HomeController@update_publications');
Route::post('update-projects','HomeController@update_projects');
Route::post('update-honors','HomeController@update_honors');

Route::get('/faculty',function(){
	$users=User::orderBy('name')->get();
	$computer_science_users=User::where('department', 'like', '%'.'Computer'.'%')
	->orderBy('name')->get();
	$design_users=User::where('department', 'like', '%'.'Design'.'%')
	->orderBy('name')->get();
	$electronics_users=User::where('department', 'like', '%'.'Electronics'.'%')
	->orderBy('name')->get();
	$mechanical_users=User::where('department', 'like', '%'.'mechanical'.'%')
	->orderBy('name')->get();
	$natural_science_users=User::where('department', 'like', '%'.'Physics'.'%')
	->orWhere('department', 'like', '%'.'Maths'.'%')
	->orderBy('name')->get();
	return view('faculty')->with(['users'=>$users,
		'computer_science_users'=>$computer_science_users,
		'design_users'=>$design_users,
		'electronics_users'=>$electronics_users,
		'mechanical_users'=>$mechanical_users,
		'natural_science_users'=>$natural_science_users]);
});
Route::get('/faculty/{username}',function($username){

	$user=User::where('username',$username)->first();
	// return $user->username;
	return view('faculty_detail')->with('user',$user);
});
Route::get('/staff',function(){
	$staff=Staff::orderBy('name','ASC')->get();
	return view('staff')->with('staff',$staff);
});
Route::get('/research-staff',function(){
	$staff=ResearchStaff::orderBy('name','ASC')->get();
	return view('research_staff')->with('staff',$staff);
});
Route::get('/office-administration',function(){
	$staff=OfficeAdministration::orderBy('name','ASC')->get();
	return view('office_administration')->with('staff',$staff);
});
Route::get('delete-cv','HomeController@delete_cv');
Route::get('delete-image/{id}','HomeController@delete_images');
Route::get('tender', function(){
	return view('tender');
});
Route::get('jobs', function(){
	return view('jobs');
});
Route::get('administration/administrative_structure',function(){
	return view('administrative_structure');
});
Route::get('administration/bog',function(){
	return view('bog');
});
Route::get('administration/senate',function(){
	return view('senate');
});
Route::get('administration/finance-committee',function(){
	return view('finance_committee');
});
Route::get('administration/bwc',function(){
	return view('bwc');
});

Route::group(['prefix' => 'students'], function () {
    Route::get('achievements', function ()    {
        return view('student_achievements');
    });
    Route::get('gymkhana',function(){
    	return view('gymkhana');
    });
    Route::get('activities',function(){
    	return view('student_activities');
    });
    Route::get('hostels',function(){
    	return view('hostels');
    });
    Route::get('dean_office',function(){
    	return view('dean_office');
    });
    Route::get('councelling',function(){
    	return view('councelling');
    });
});

Route::get('calendar',function(){
	return view('calendar');
});
Route::get('programme',function(){
	return view('programme');
});
Route::get('admission',function(){
	return view('admission');
});
Route::get('college-tour',function(){
	return view('college_tour');
});
Route::get('class-tour',function(){
	return view('class_tour');
});
Route::get('hostel-tour',function(){
	return view('hostel_tour');
});
Route::get('jagriti-tour',function(){
	return view('jagriti_tour');
});
Route::get('achievements',function(){
	return view('achievements');
});
Route::get('activities',function(){
	return view('activities');
});
Route::get('gallery',function(){
	return view('gallery');
});
Route::get('collaborators',function(){
	return view('collaborators');
});
Route::get('webteam',function(){
	return view('webteam');
});
Route::get('calender',function(){
	return view('calender');
});
Route::get('maps-direction',function(){
	return view('maps_direction');
});
Route::get('hindi',function(){
	return view('hindi');
});
Route::get('contact',function(){
	return view('contact');
});
Route::get('research',function(){
	return view('research');
});