@extends('layouts.app')

@section('content')
<div class="container_gray_bg">

	<div class="container margin_60">
	@if(Session::has('msg'))
	    <div class="alert-box success">
	        <h2>{{ Session::get('msg') }}</h2>
	    </div>
	@endif
    	<div class="row">
  			<div class="col-md-9">
                <div class="box_style_1">
         			<div id="faculty_image" style="margin-left: 40%;" >
                 		<img src="{{Auth::user()->proPic}}" alt="Faculty Image" class="img-circle styled">
    					<form action="upload-photo" method="post" enctype="multipart/form-data" id="uploadPicForm">
    					{{ csrf_field() }}
						    <br>Want to change your profile picture?<br>
						        (Max Size < 2MB)<br><br>
						    <input type="file" name="photo" id="fileToUpload">
						    <input type="hidden" name="type" value="proPic">
						    <input class="button" type="submit" value="Upload Image" name="submit">
					    </form>

    					<div id="faculty_image_status"></div>
    				</div>
					<br><br><br>
		           <div class="indent_title_in">
		                    

		                <h3>Change Password</h3>
		                <p>Change your current password</p>
		            </div>
                	<div class="wrapper_indent">
                		<div class="change_password">
                		@if(Session::has('msg-password'))
						    <div class="alert-box success">
						        <strong><h2>{{ Session::get('msg-password') }}</h2><strong>
						    </div>
						@endif
							<form action="update-password" method="POST">
							{{csrf_field()}}
                      			<div class="row">
                            		<div class="col-md-6">
                                		<div class="form-group">
                                			<label>Old Password</label> 
                                        	<input type="password" class="form-control styled required" id="old_pass" name="old_pass" placeholder="Enter your current password" value="" required>
                                		</div>
                            		</div>
                      			</div> <!-- End row -->
								<div class="row">
                            		<div class="col-md-6">
	                                	<div class="form-group">
	                                		<label>New Password</label> 
                                    			<input type="password" class="form-control styled required" id="new_pass" name="new_pass" placeholder="Enter new password" value="" required>
                                		</div>
                            		</div>
                      			</div> <!-- End row -->

                       			<div class="row">
                            		<div class="col-md-6">
                                		<div class="form-group">
                                			<label>Confirm Password</label> 
                                    		<input type="password" class="form-control styled required" id="confirm_pass" name="confirm_pass" placeholder="Re-enter new password" value="" required>
                                		</div>
                            		</div>
                      			</div> <!-- End row -->
								<div class="row">
                      				<div class="col-md-2">    
                                
                        				<input class="button" type="submit" value="Update Password" name="submit"> 
                      
                        			</div>
                     			</div> <!-- End row -->
                  			</form>
              			</div>
                	</div>
                	<br><br><br>
                	<div class="indent_title_in">             
                		<h3>Index Page</h3>
                		<p>Details present on the first link to your webpage in the faculty section</p>
            		</div>
            		<div class="wrapper_indent">
                		<div class="index_page_area">
							<div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                <label>Name</label> 
	                                        <input type="text" class="form-control styled required" id="name_apply" name="name_apply" placeholder="Name" value="{{Auth::user()->name}}" disabled> <h5 style="color:green">Edit in Basic Details</h5>  
	                                </div>
	                            </div>
                      		</div> <!-- End row -->

	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                <label>Designation</label> 
	                                        <input type="text" class="form-control styled required" id="desig" name="desig" placeholder="Designation in the institute" value="{{Auth::user()->designation}}" disabled><h5 style="color:green">Edit in Basic Details</h5>
	                                </div>
	                            </div>
	                      	</div> 
							<form action="update-index-page" method="POST">
								{{csrf_field()}}
		                        <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                <label>Department</label> 
		                                        <input type="text" class="form-control styled required" id="dep" name="department" placeholder="Department" value="{{Auth::user()->department}}">
		                                </div>
		                            </div>
		                      	</div> <!-- End row -->

		                        <div class="row">
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                <label>Specialization</label> 
		                                        <input type="text" class="form-control styled required" id="specialisation" name="specialization" placeholder="Specialization (40 words)" value="{{Auth::user()->specialization}}">
		                                </div>
		                            </div>
		                      	</div> <!-- End row -->
		                      	<div class="row">
	                  				<div class="col-md-2">    
	                                	<input class="button" type="submit" value="Update" name="submit"> 
	                  				</div>
	                 			</div>
		                    </form>
	                	</div>
	                </div>
                	<hr class="styled_2">





					 <div class="panel-group" id="accordion">
					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        Basic Details </a>
					      </h4>
					    </div>
					    <div id="collapse1" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	
					      	<div class="indent_title_in">
		                <h3>Basic Details</h3>
                		<p>Details present in the left panel</p>
            		</div>
                	<div class="wrapper_indent">
            			<div class="basic_details_area">
							<form action="/update-basic-details" method="POST">
								{{csrf_field()}}
								<div class="row">
	                            	<div class="col-md-6">
	                                	<div class="form-group">
		                                	<label>Name</label> 
		                                    <input type="text" class="form-control styled required" id="name_apply" name="name" placeholder="Name" value="{{Auth::user()->name}}">
	                                	</div>
	                            	</div>
	                      		</div> <!-- End row -->
								<div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
			                                <label>Designation</label>
			                                <input type="designation" class="form-control styled required" id="designation" name="designation" value="{{Auth::user()->designation}}" placeholder="Your designation in the institute">
		                            	</div>
	                            	</div>
	                    		</div> <!-- End row -->
								<div class="row">
	                            	<div class="col-md-6">
	                                	<div class="form-group">
	                                		<label>Institute Email</label>
	                                		<input type="email" class="form-control styled required" id="email_apply" name="email" value="{{Auth::user()->email}}" placeholder="youremail@domain.com">
	                            		</div>
									</div>
	                    		</div> <!-- End row -->
								<div class="row">
	                            	<div class="col-md-6">
	                                	<div class="form-group">
	                                		<label>Phone</label>
	                                		<input type="contact" class="form-control styled required" id="contact" name="phone" value="{{Auth::user()->phone}}" placeholder="Contact number">
	                            		</div>
	                            	</div>
	                    		</div> <!-- End row -->
			                    <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                    	            <label>Webpage</label>
			                                <input type="webpage" class="form-control styled required" id="webpage" name="webpage" value="{{Auth::user()->webpage}}" placeholder="Link of your webpage">
			                            </div>
		                            </div>
			                    </div> <!-- End row -->
			                    <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                    	            <label>Address</label>
			                                <input type="text" class="form-control styled required" 
			                                id="webpage" name="address" value="{{Auth::user()->address}}"
			                                 placeholder="Address">
			                            </div>
		                            </div>
			                    </div>
			                    <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                    	            <label>About me</label>
			                                <textarea id="about_me" name="about_me"  placeholder="Describe yourself (max 500 characters)" rows="7" cols="45"  >{{Auth::user()->about_me}}</textarea>
			                            </div>
		                            </div>
			                    </div>
			                    <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                    	            <label>Interests</label>
			                                <textarea id="about_interests" name="interests"  placeholder="Your academic interests (max 500 characters)" rows="7" cols="45">{{Auth::user()->interests}}
			                                </textarea>
			                            </div>
		                            </div>
			                    </div>
			                    <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                    	            <label>Profile link</label>
			                                <input type="webpage" class="form-control styled " 
			                                name="profile_url" value="{{Auth::user()->profile_url}}" placeholder="Link of your profile">
			                            </div>
			                            <div class="form-group">
		                    	            
			                            	@if(!empty(Auth::user()->profile_url))
		                                    <a href="{{Auth::user()->profile_url}}" target="_blank" 
		                                    class="" style="margin-top: 15px;">Current public link</a>
		                                    @else
		                                        <a href="/faculty/{{Auth::user()->username}}" target="_blank" 
		                                    class="" style="margin-top: 15px;">Current public link</a>
		                                    @endif    
		                                </div>
		                            </div>
			                    </div>
			                    <div class="row">
	                  				<div class="col-md-2">    
	                                	<input class="button" type="submit" value="Update basic details" name="submit"> 
	                  				</div>
	                 			</div>
                 			</form>
                		</div>
                	</div> 


					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					        Qualification, Professional experience, Administrative positions and CV</a>
					      </h4>
					    </div>
					    <div id="collapse2" class="panel-collapse collapse">
					      <div class="panel-body">


<div class="indent_title_in">              
                		<h4>3) Qualification</h4><br>
                		
              			<div class="more_qual">
              			@if(Session::has('msg-qualification'))
						    <div class="alert-box success">
						        <strong><h2>{{ Session::get('msg-qualification') }}</h2><strong>
						    </div>
						@endif
	              			<form action="/update-qualifications" method="post">
	              				{{csrf_field()}}
	              				@foreach (Auth::user()->qualifications as $qualification)
	                  			<div class="qualification">
	                  				<a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
	                    			<div class="row">
			                            <div class="col-md-6">
			                                <div class="form-group">
				                                <label>Degree</label>
				                                <input type="text" class="form-control styled required"  name="degree[]" placeholder="Degree you attained" value="{{$qualification->degree}}">
			                            	</div>
	                            		</div>
			                            <div class="col-md-6">
			                                <div class="form-group">
				                                <label>Institute</label>
				                                <input type="text"   class="form-control styled required"  name="degree_college[]" placeholder="Institute of degree attainment" value="{{$qualification->college}}">
	                                        </div>
	                                    </div>
	                        		</div><!-- End row -->
	                        		<div class="row">
	                    				<div class="col-md-6">
	                                		<label>Description</label>
	                              			<textarea id="q_description"  name="degree_description[]"  placeholder="Period of completion or any other information (200 characters)" rows="7" cols="45">{{$qualification->description}}</textarea>
				                               <!-- div hidden>
				                               <input type="text" class="form-control styled required" id="q_desc" name="q_desc" value="" placeholder="Describe your work" >
				                               </div> -->
	                           			</div>
	                   				</div>
			                     <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>   
		                     	</div>
		                     	@endforeach
								<div class="row">
		                            <div class="col-md-3">
		                                <div class="form-group">		                        
			                                <button type="button" class="add_qualification"  ><img src="/img/plus.png"/></button>
			                                 &nbsp&nbsp  <label>Add more fields</label>
		                            	</div>
		                            </div>
	                            </div>


	              				<div class="row">
	                  				<div class="col-md-2">    
	                                	<input class="button" type="submit" value="Update Qualifiactions" name="submit"> 
	                  				</div>
	                 			</div>
	              			</form> 

              			<!-- end of row -->
                            
                 <br><br><br>



                <h4>4) Professional Experience</h4><br>
              
             
                <div class="more_position">
                <form action="/update-professional-experience" method="post">
      				{{csrf_field()}}
	               	@foreach(Auth::user()->professional_experiences as  $experience)
	               		<div>
	                  		<a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
	                   		<div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
		                                <label>Title</label>
		                                <input type="text" class="form-control styled required" 
		                                name="professional_experience_title[]" placeholder="Title of position eg. Professor etc." 
		                                value="{{$experience->title}}">
	                            	</div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
		                                <label>Description</label>
		                                <input type="text" class="form-control styled required" 
		                                name="professional_experience_description[]" 
		                                placeholder="Description" value="{{$experience->description}}">
	                            	</div>
	                            </div>
	                        </div><!-- End row -->                        
	                        <div class="row">
	                    		<div class="col-md-6">
	                                <label>From</label>
	                            	<input type="text" class="form-control styled required" 
	                            	 name="professional_experience_from[]" 
	                            	 placeholder="Start date (year or month etc)" value="{{$experience->from}}">
	                           	</div>
	                     		<div class="col-md-6">
	                                <label>To</label>
	                            	<input type="text" class="form-control styled required"  
	                            	name="professional_experience_to[]" placeholder="End date (year or month etc)" 
	                            	value="{{$experience->to}}">
	                           	</div>                             
	                   		</div>
	                     	<hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>   
	                    </div>
	               	@endforeach
	               	<div class="row">
                        <div class="col-md-3">
                            <div class="form-group">		                        
                                <button type="button" class="add_professional_experience"  ><img src="/img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                        	</div>
                        </div>
                    </div>


      				<div class="row">
          				<div class="col-md-2">    
                        	<input class="button" type="submit" value="Update Professional Experience" name="submit"> 
          				</div>
         			</div>
      			</form>

                  	
                </div>                            
                 <br><br><br>



                <h4>5) Administrative Positions</h4><br>
              
             
                <div class="more_admin_position">
	                <form action="update-administrative-position" method="post">
	      				{{csrf_field()}}
	      				@foreach(Auth::user()->administrative_positions as  $position)
	                  		<div>
	                  			<a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
	                    		<div class="row">
	                            	<div class="col-md-6">
	                                	<div class="form-group">
		                                	<label>Title</label>
		                                	<input type="text" class="form-control styled required" required name="administrative_position_title[]" placeholder="Title of position eg. Professor etc." value="{{$position->title}}">
	                            		</div>
	                            	</div>
	                            	<div class="col-md-6">
	                                	<div class="form-group">
		                                	<label>Description</label>
		                                	<input type="text" class="form-control styled required" name="administrative_position_description[]" placeholder="Description" value="{{$position->description}}">
	                            		</div>
	                            	</div>
	                        	</div><!-- End row -->                        
	                         	<div class="row">
	                    			<div class="col-md-6">
	                                	<label>From</label>
	                            		<input type="text" class="form-control styled required" name="administrative_position_from[]" placeholder="Start date (year or month etc)" value="{{$position->from}}">
	                           
	                            	</div>
	                     			<div class="col-md-6">
	                                	<label>To</label>
	                             		<input type="text" class="form-control styled required" name="administrative_position_to[]" placeholder="End date (year or month etc)" value="{{$position->to}}">
		                           </div>
			                   	</div>
	                     		<hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>   
	                     	</div>
	                 	@endforeach
	                 	<div class="row">
	                        <div class="col-md-3">
	                            <div class="form-group">		                        
	                                <button type="button" class="add_administrative_position"  ><img src="/img/plus.png"/></button>
	                                 &nbsp&nbsp  <label>Add more fields</label>
	                        	</div>
	                        </div>
	                    </div>
	      				<div class="row">
	          				<div class="col-md-2">    
	                        	<input class="button" type="submit" value="Update Administrative Position" name="submit"> 
	          				</div>
	         			</div>
	      			</form>                  	
                </div>                            
                <br><br><br>

                <h4>6) Honors</h4><br>


                <div class="more_honors">
                <form action="/update-honors" method="post">
                	{{csrf_field()}}
                	@foreach(Auth::user()->honors as $honor)
            		<div><a href='javascript:void(0);' class='remove_button' 
            		title='Remove field'>Remove</a><br><br>
	                    <div class='row'>
	                        <div class='col-md-6'>
	                            <div class='form-group'>
	                                <label>Title</label>
	                                <input type='text' maxlength=500 
	                                class='form-control styled ' required 
	                                name='title[]' placeholder='Title of this honor' 
	                                value='{{$honor->title}}'>
	                            </div>
	                        </div>
	                        <div class='col-md-6'>
	                            <div class='form-group'>
	                                <label>Period</label>
	                                <input type='text' maxlength=15 
	                                class='form-control styled required' 
	                                 name='period[]' placeholder='When did you receive it?' 
	                                 value='{{$honor->value}}'>
	                            </div>
	                        </div>
	                    </div><!-- End row -->
						<div class='row'>
	                    	<div class='col-md-6'>
	                            <label>Description</label>
								<textarea maxlength=500 id='honor_about' 
								name='description[]'  placeholder='Describe this honour' 
								rows='7' cols='45'>{{$honor->description}}</textarea>
	                        </div>
						</div>
	                   	<hr style='height:1px;border:none;color:#333;background-color:#333;' /><br>
               		</div>
                	@endforeach
                	<div class="row">
                        <div class="col-md-3">
                            <div class="form-group">		                        
                                <button type="button" class="add_honors"  ><img src="/img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                        	</div>
                        </div>
                    </div>
      				<div class="row">
          				<div class="col-md-2">    
                        	<input class="button" type="submit" value="Update Honors Section" name="submit"> 
          				</div>
         			</div>
      			</form>                  	
                </div>     
                

                <div class="row">
                    <br><br>
                    <div class="col-md-12">
                        <h4>7) Curriculum-Vitae</h4> <br><br>
                            <label>Current CV Link - &nbsp&nbsp</label>
                            @if(!Auth::user()->cv)
                            	<a href="#">No link present</a>
                            @else
								<a  href="{{Auth::user()->cv}}">Download cv</a>
								<a href="/delete-cv">Remove CV</a>
                            @endif
                            
                    </div>
                </div>
	            <div class="row">
                    <div class="col-md-6">
	                    <div id="uploadingCV">
    	                    <br><label> Upload/Update your CV </label><br>
							<form action="/update-cv" method="post" enctype="multipart/form-data" >      
								{{csrf_field()}}                       
                            	<input type="file" name="cv">
	                            <br>
	                            <input class="button" type="submit" value="Upload CV" name="submit">
                            </form>
                       </div>
                   	</div>
               	</div>
         </div></div>    <hr class="styled_2">
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					        Courses</a>
					      </h4>
					    </div>
					    <div id="collapse3" class="panel-collapse collapse">
					      <div class="panel-body">
					      	

					      	<div class="indent_title_in">

                <h2>Courses</h2>
                <p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;">Details of the Courses tab</p>
            </div>
			 <div class="wrapper_indent">
                <div class="basic_details_area">


               <br><br>
                   <h4>1) Add Courses</h4><br>
                <div class="more_courses">
         		<form action="/update-courses" method="post">
         			{{csrf_field()}}

	     			@foreach(Auth::user()->courses as $course)
	     			<div>
	                	<a href="javascript:void(0);" 
	                	class="remove_button" title="Remove field">
	                	Remove</a><br><br>   
						<div class="row">
	                        <div class="col-md-4">
	                            <div class="form-group">
	                	            <label>Course Code</label>
	                                <input type="text" class="form-control styled" name="code[]"
	                                 placeholder="Code of this course" value="{{$course->code}}"
	                                  >
	                            </div>
	                        </div>
							<div class="col-md-8">
	                            <div class="form-group">
	                                <label>Course Name</label>
	                                <input type="text" class="form-control styled "
	                                name="name[]" placeholder="Title of this course" 
	                                value="{{$course->name}}" required>
	                            </div>
	                        </div>

	                    </div><!-- End row -->
						<div class="row">
	                    	<div class="col-md-4">
	                        	<label>Currently Teaching?</label>
	                            <select class="form-control styled required" name="currently_teaching[]"> 
	                            	<option value="1" selected>Yes</option>
	                            	<option value="0" >No</option>  
	                        	</select>                          
	                        </div>
	                       	<div class="col-md-8">
	                            <div class="form-group">
	                                <label>Department</label>
		                            <select  class="form-control styled " name="department[]">
			                        	<option value="Computer Science & Engineering" selected>
			                        	Computer Science & Engineering
			                        	</option> 
			                        	<option value="Electronics & Communication Engineering" >
			                        	Electronics & Communication Engineering
			                        	</option>
			                        	<option value="Mechanical Engineering" >
			                        	Mechanical Engineering
			                        	</option> 
			                        	<option value="Natural Sciences" >
			                        	Natural Sciences
			                        	</option>
			                        	<option value="Design" >
			                        	 Design
			                        	</option>
		                        	</select>
								</div>
	                        </div>
						</div>
	                    <div class="row">
	                    	<div class="col-md-12">
	                            <div class="form-group">
		                            <label>Link</label>
		                            <input type="text" class="form-control styled " 
		                            name="link" 
		                            placeholder="Link of this course(Give the full path 
		                            : including http/https)" value="{{$course->link}}" >
	                        	</div>
	                        </div>
	                    </div><!-- End row -->
						<div class="row">
	                        <div class="col-md-12">
	                            <div class="form-group">
	                                <label>Institute</label>
	                                <input type="text" class="form-control styled "
	                                 name="institute[]"
	                                  placeholder="Institute where this course was held" 
	                                  value="{{$course->institute}}" >
	                            </div>
	                        </div>
						</div><!-- End row -->
						<div class="row">
							<div class="col-md-12">
	                            <div class="form-group">
	                                
	                                <br><label>UG</label><br>
	                                @if($course->ug==1)
		                                <input type="checkbox" 
		                            	name="ug[]" value="1" 
		                            	 checked="checked">Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                            	<input type="checkbox" name="ug[]" value="0" >
	                            		No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                @else
		                                <input type="checkbox" 
		                            	name="ug[]" value="1" 
		                            	 >Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                            	<input type="checkbox" name="ug[]" value="0" checked="checked">
		                            	No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                @endif
	                            	 
	                            	
	                            	<br><label>PG</label><br>
	                            	@if($course->pg==1)
		                            	<input type="checkbox" 
		                            	name="pg[]" value="1" checked="checked"
		                            	>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                            	<input type="checkbox" name="pg[]" value="0" >
		                            	No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	                            	@else
		                            	<input type="checkbox" 
		                            	name="pg[]" value="1" 
		                            	>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                            	<input type="checkbox" name="pg[]" value="0" checked="checked">
		                            	No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	                            	@endif
	                            	
	                            	<br><label>PhD</label><br>
	                            	@if($course->phd==1)
		                            	<input type="checkbox" 
		                            	name="phd[]" value="1" checked="checked"
		                            	>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                            	<input type="checkbox" name="phd[]" value="0" >
	                            		No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									@else
										<input type="checkbox" 
		                            	name="phd[]" value="1" 
		                            	>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                            	<input type="checkbox" name="phd[]" value="0" checked="checked">
		                            	No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									@endif
	                            	 <br>   
	                            </div>
	                        </div>
						</div>
						<hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
	                </div>
					@endforeach
	                <div class="row">
	                    <div class="col-md-3">
	                        <div class="form-group">		                        
	                            <button type="button" class="add_courses"  ><img src="/img/plus.png"/></button>
	                             &nbsp&nbsp  <label>Add more fields</label>
	                    	</div>
	                    </div>
	                </div>
	  				<div class="row">
	      				<div class="col-md-2">    
	                    	<input class="button" type="submit" 
	                    	value="Update Course section" name="submit"> 
	      				</div>
	     			</div>
      			</form>        
 
                   </div>  
							</div>      
                            </div>                   
                      
                      
 <hr class="styled_2">

					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Research, Projects, Publications, Conferences and Students</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
      	
      	<div class="indent_title_in">
                <h2>Research</h2>
                <p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;">Details of the Research tab</p>
         
               </div>
			   <br><br>
			    <div class="wrapper_indent">
                <div class="basic_details_area">
				
                    <div class="more_research">



                    <h4>1) Project Activities</h4><br>
                    <form action="/update-projects" method="post">
                    	{{csrf_field()}}
                    	@foreach (Auth::user()->projects as $project)
                    	<div>
                    		<a href="javascript:void(0);" 
                    		class="remove_button" title="Remove field">Remove
                    		</a><br><br>
           					<div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                		<label>Title</label>
                                		<input type="text" 
                                		maxlength=200 
                                		class="form-control styled " 
                                		required name="title[]" 
                                		placeholder="Title" value="{{$project->title}}">
                            		</div>
                            	</div>
							</div><!-- End row -->

                         	<div class="row">
                    			<div class="col-md-6">
	                                <label>Description</label>
	                                <textarea id="research_desc" maxlength=500  
	                                name="description[]"  
	                                placeholder="Give a short description for this work"
	                                 rows="7" cols="45" >{{$project->description}}</textarea>
	                            </div>
			               </div>
                   			<hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
               			</div>
                    	@endforeach
						<div class="row">
	                    	<div class="col-md-3">
	                        	<div class="form-group">		                        
		                            <button type="button" class="add_projects"  >
		                            <img src="/img/plus.png"/></button>
		                             &nbsp&nbsp  <label>Add more fields</label>
	                    		</div>
	                    	</div>
	                	</div>
		  				<div class="row">
		      				<div class="col-md-2">    
		                    	<input class="button" type="submit" 
		                    	value="Update Projects section" name="submit"> 
		      				</div>
		     			</div>
      				</form> 
                       </div> 
                      </div>
					  </div>   
                    
                
              
            <br><br><br>
                <div class="wrapper_indent">
                <h4>2) Publications</h4><br>
                <div class="more_publications">
         		<form action="/update-publications" method="post">
         			{{csrf_field()}}
	     			@foreach(Auth::user()->publications as $publication)
                		<div>
	                		<a href="javascript:void(0);" 
	                		class="remove_button" title="Remove field">Remove
	                		</a><br><br>   
							<div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
		                                <label>Paper</label>
		                                <input type="text" class="form-control styled required" required name="paper[]" 
		                                placeholder="Paper" 
		                                value="{{$publication->paper}}">
	                            	</div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                	<label>Rank</label>
	                                	<input type="text" class="form-control styled required"
	                                	 name="order[]" placeholder="Ran (1-100) 1 being most prominent" value="{{$publication->order}}">
	                            	</div>
	                            </div>
	                        </div><!-- End row -->                   
                         	
                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                        </div>
                    @endforeach

                        
 
                <div class="row">
	                    <div class="col-md-3">
	                        <div class="form-group">		                        
	                            <button type="button" class="add_publications"  ><img src="/img/plus.png"/></button>
	                             &nbsp&nbsp  <label>Add more fields</label>
	                    	</div>
	                    </div>
	                </div>
	  				<div class="row">
	      				<div class="col-md-2">    
	                    	<input class="button" type="submit" 
	                    	value="Update Publications section" name="submit"> 
	      				</div>
	     			</div>
      			</form>
      			</div></div>
                      
        <br><br><br>
                    <div class="wrapper_indent">
                    <h4>3) Conferences/Events</h4><br>
                    <div class="more_conferences"> 
                    <form action="/update-conferences" method="post">
                    {{csrf_field()}} 
                    @foreach (Auth::user()->conferences as $conference)
                    	<div>
                    		<a href="javascript:void(0);" class="remove_button" 
                    		title="Remove field">Remove</a><br><br>   

                        	<div class="row">
                        		<div class="col-md-6">
                                	<div class="form-group">
	                             		<input type="text" class="form-control styled" required 
	                             		name="description[]" placeholder="Title, Description, Period etc."
	                             		 value="{{$conference->description}}" >
                            		</div>
                            	</div>
								<div class="col-md-6">
                                	<div class="form-group">
	                             		<input type="text" class="form-control styled" name="link[]" 
	                             		placeholder="Add Link" value="{{$conference->link}} " >
                            		</div>
                            	</div>
                        	</div><!-- End row -->
                        	<hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div>
                    @endforeach
                    <div class="row">
	                        <div class="col-md-3">
	                            <div class="form-group">		                        
	                                <button type="button" class="add_conferences"  ><img src="/img/plus.png"/></button>
	                                 &nbsp&nbsp  <label>Add more fields</label>
	                        	</div>
	                        </div>
	                    </div>
	      				<div class="row">
	          				<div class="col-md-2">    
	                        	<input class="button" type="submit" value="Update Conferences section" name="submit"> 
	          				</div>
	         			</div>
	      			</form>
                	</div>
                        
                        </div>        <br><br><br>
                    <div class="wrapper_indent">
                    <h4>4) Students</h4><br>
                    <div class="more_students">
                    	<form action="/update-students" method="post">
	              				{{csrf_field()}} 
	                    @foreach(Auth::user()->students as $student)
	                    	<div>
	                    		<a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   
								<div class="row">
	                        		<div class="col-md-2">
	                             		<label>Roll number</label>
	                                	<input type="text" class="form-control styled"  name="roll_number[]" value="{{$student->roll_number}}" >
	                        		</div>
									<div class="col-md-3">
	                             		<label>Name</label>
	                                	<input type="text" class="form-control styled"  name="name[]" required value="{{$student->name}}" >
	                        		</div>
									<div class="col-md-2">
	                        			<label>Category</label>
	                                 	<select  class="form-control styled required" name="category[]">
	                                 		@if($student->category=='Mtech')
	                                 			<option value="Mtech" selected>Mtech</option>
	                                 			<option value="PhD" >PhD</option>
	                                 			<option value="PBI" >PBI</option>

	                                 		@elseif($student->category=='PhD')
	                                 			<option value="Mtech" >Mtech</option>
	                                 			<option value="PhD" selected>PhD</option>
	                                 			<option value="PBI" >PBI</option>
	                                 		@else
	                                 			<option value="Mtech" >Mtech</option>
	                                 			<option value="PhD" >PhD</option>
	                                 			<option value="PBI" selected >PBI</option>
	                                 		@endif                                		
	                                 	</select>                          
	                        		</div>
	                             	<div class="col-md-3">
	                        			<label>Status</label>
	                                 	<select name="status[]" class="form-control styled ">
	                                 	@if($student->status=='Completed') 
	                                 		<option value="Completed" selected>Completed</option>
	                                 		<option value="Ongoing" >Ongoing</option>
	                                 	@else
	                                 		<option value="Completed" >Completed</option>
	                                 		<option value="Ongoing" selected>Ongoing</option>
	                                 	@endif
                             			</select>
	                        		</div>                     
		                            <div class="col-md-2">
		                                <label>Year</label>
	                                    <input type="text" class="form-control styled required"  name="year[]" value="{{$student->year}}" >
		                            </div>
	                   			</div><!-- End row -->
								<br>
	                        	<div class="row">                  
									<div class="col-md-7">
	                             		<label>Title of Work</label>
	                                	<input type="text" class="form-control styled required"  name="title_work[]" value="{{$student->title_work}}" >
	                        		</div>
	                             	<div class="col-md-5">
	                            		<label>Co-guide(s)</label>
	                                    <input type="text" class="form-control styled required"  name="co_guide[]" value="{{$student->co_guide}}" >
	                            	</div>
								</div>
								<hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
	                        </div>
	                    @endforeach
	                    <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">		                        
	                                <button type="button" class="add_student"  ><img src="/img/plus.png"/></button>
	                                 &nbsp&nbsp  <label>Add more fields</label>
                            	</div>
                            </div>
                        </div>


              				<div class="row">
                  				<div class="col-md-2">    
                                	<input class="button" type="submit" value="Update Students Section" name="submit"> 
                  				</div>
                 			</div>
              			</form>
                    </div>
                        <hr class="styled_2">


      </div>
    </div>
  </div>
					</div> 









					               	
					
                    
                   
                     
                 
                    
                    
                <h2>Contact</h2>
                <p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;">Details of the Contact tab</p><br><br>
             


                     
                        <h4>1) Web Address</h4>
             
            
                <div class="webspace_area">
                	<form action="/update-webdata" method="post">
                		{{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <label>Gmail</label>
                            <div class="styled-select">
                            	<input type="text" class="form-control styled" 
                            	name="gmail" placeholder="Gmail ID" value="{{Auth::user()->gmail}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control styled" 
                                name="facebook" placeholder="Facebook id" value="{{Auth::user()->facebook}}">
                            </div>
                        </div>
                    </div><!-- End row -->
                        
                    <div class="row">
                        <div class="col-md-6">
                            <label>Twitter</label>
                            <div class="styled-select">
                              <input type="text" class="form-control styled" 
                              name="twitter" placeholder="Twitter id" value="{{Auth::user()->twitter}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>LinkedIn</label>
                                <div class="styled-select">
                            		<input type="text" class="form-control styled " 
                            		name="linkedin" placeholder="LinkedIn handle" value="{{Auth::user()->linkedin}}">
                            	</div>
                        </div>                       
                   	</div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label>Skype</label>
                            <div class="styled-select">
                            	<input type="text" class="form-control styled " name="skype" 
                            	placeholder="Skype ID" value="{{Auth::user()->skype}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Alternate Phone</label>
                            <div class="styled-select">
                              <input type="text" class="form-control styled" 
                              name="alternate_phone" placeholder="Alternate Phone Number" value="{{Auth::user()->alternate_phone}}">
                            </div>
                        </div>
                    </div>  
					<div class="row">
                        <div class="col-md-6">
                            <label>Fax</label>
                            <div class="styled-select">
                            	<input type="text" class="form-control styled " 
                            	name="fax" placeholder="Fax number" value="{{Auth::user()->fax}}">
                            </div>
                    	</div>
					</div>
					<div class="row">
          				<div class="col-md-2">    
                        	<input class="button" type="submit" value="Update Web data" name="submit"> 
          				</div>
         			</div>
         			</form>
                    
              	</div>
                      </div>
                   <div class="wrapper_indent">
                     	<br><br><br>
                     	
                        <hr class="styled_2">
         
                		<h2>Gallery</h2>
                		<p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;"> Add images to Gallery</p>
          
                     	<br>
                     	<h4>1) Add Images</h4><br>

                     

	                    <div class="more_gallery">             
	                      
		                   	<div>
			                    <div class="row">
			                       <div class="col-md-6">
			                        	<div id="uploadingGallery">
											<form action="/upload-photo" 
											method="post" enctype="multipart/form-data" >
											{{csrf_field()}}                    
			                         			<div class="col-md-12">
			                            			<div class="form-group">
			                                			<label>Description</label>
			                                			<input type="text" class="form-control styled" name="gallery_description" placeholder="Title or short description for the image" value="">
			                                			<input type="hidden" name="type" value="gallery">
			                            			</div>
			                           			</div>      
			                            		<input type="file" name="photo">
			                            		<br>
			                            		<input class="button" type="submit" value="Upload Image" name="submit" >
			                            	</form>
			                       		</div>
			                       	</div>
			                   	</div>
		                    </div>
		                    <br><br>
		                    <div class="row">
		                        <h4>Current Collection</h4>
		                        <div class="more_gallery_pics"> 
			                        @foreach(Auth::user()->gallery as $image)
			                        	<div class="col-md-3">
			                             	<a href="/delete-image/{{$image->id}}" title="Remove field">Remove</a><br><br>
			                                  <img  src="{{$image->filename}}" class="img-thumbnail" alt="{{$image->description}}" >
			                                  <p>{{$image->description}}</p>
			                          	</div>
			                        @endforeach
								</div> <!-- end of more_gallery_pics -->         
							</div>
	                    </div>
                    </div>                     
                      <hr class="styled_2">
                      
                      <div class="wrapper_indent">
                      <div class="form-group">
					<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="policy_terms" id="policy_terms" class="required" value="Yes" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
				</div>
                     </div>
                      
                    </div>
           </div>
           <div class="col-md-3">
           		
                  <div id="logout_button" style="margin-left: 80%;">
               <a class="btn btn-danger" href="/logout">Log-out</a>
     
            </div>      
                      <h4><strong>How this works?</strong></h4>
                    <p>The details you provide here will be reflected upon your profile in the Faculty section of the website. This is how people externally will be able to know you. You can easily delete or add details by clicking on the respective buttons.</p>
                   
                    
 <hr class="styled">
                    <div class="box_side"><h4>Have a glance</h4> <i class="icon_pencil-edit"></i>
                    <p>After you update your profile, you can have the final look of your public profile by clicking on the button below </p>
                    <a href="/faculty/{{Auth::id()}}" class="button small">See your profile</a>
</div>

           </div>
            </div><!--End row -->
        </div><!--End container -->
       
</div>


<script type="text/javascript">
	$(function(){
		var qualification_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><label>Degree</label><input type='text' class='form-control styled ' required name='degree[]' placeholder='Degree you attained' value=''></div></div><div class='col-md-6'><div class='form-group'><label>Institute</label><input type='text' class='form-control styled required' required name='degree_college[]' placeholder='Institute of degree attainment' value=''></div></div></div><!-- End row --><div class='row'><div class='col-md-6'><label>Description</label><textarea  name='degree_description[]'  placeholder='Period of completion or any other information (200 characters)' rows='7' cols='45'></textarea></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
		var professional_experiences_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><label>Title</label><input type='text' class='form-control styled ' required name='professional_experience_title[]' placeholder='Title of position eg. Professor etc.' value=''></div></div><div class='col-md-6'><div class='form-group'><label>Description</label><input type='text' class='form-control styled '  name='professional_experience_description[]' placeholder='Description' value=''></div></div></div><!-- End row --><div class='row'><div class='col-md-6'><label>From</label><input type='text' class='form-control styled ' name='professional_experience_from[]' placeholder='Start date (year or month etc)' value=''></div><div class='col-md-6'><label>To</label><input type='text' class='form-control styled ' name='professional_experience_to[]' placeholder='End date (year or month etc)' value=''></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
		var administrative_positions_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><label>Title</label><input type='text' class='form-control styled ' required name='administrative_position_title[]' placeholder='Title of position eg. Professor etc.' value=''></div></div><div class='col-md-6'><div class='form-group'><label>Description</label><input type='text' class='form-control styled '  name='administrative_position_description[]' placeholder='Description' value=''></div></div></div><!-- End row --><div class='row'><div class='col-md-6'><label>From</label><input type='text' class='form-control styled ' name='administrative_position_from[]' placeholder='Start date (year or month etc)' value=''></div><div class='col-md-6'><label>To</label><input type='text' class='form-control styled ' name='administrative_position_to[]' placeholder='End date (year or month etc)' value=''></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
		var student_detail_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-2'><label>Roll number</label><input type='text' class='form-control styled'  name='roll_number[]' value='' ></div><div class='col-md-3'><label>Name</label><input type='text' class='form-control styled'  name='name[]' required value='' ></div><div class='col-md-2'><label>Category</label><select  class='form-control styled ' name='category[]' value=''> <option value='Mtech' >Mtech</option><option value='PhD' selected>PhD</option><option value='PBI' >PBI</option></select></div><div class='col-md-3'><label>Status</label><select name='status[]' class='form-control styled required'value=''><option value='Completed' >Completed</option> <option value='Ongoing' selected>Ongoing</option></select></div><div class='col-md-2'><label>Year</label><input type='text' class='form-control styled required'  name='year[]' value='' ></div></div><!-- End row --><br><div class='row'><div class='col-md-7'><label>Title of Work</label><input type='text' class='form-control styled required'  name='title_work[]' value='' ></div><div class='col-md-5'><label>Co-guide(s)</label><input type='text' class='form-control styled'  name='co_guide[]' value='' ></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
		var conferences_HTML="<div><a href='javascript:void(0);' class='remove_button'	title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><input type='text' class='form-control styled' required name='description[]' placeholder='Title, Description, Period etc.' value='' ></div></div><div class='col-md-6'><div class='form-group'><input type='text' class='form-control styled' name='link[]' placeholder='Add Link' value='' ></div></div></div><!-- End row --><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
        var courses_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-4'><div class='form-group'><label>Course Code</label><input type='text' class='form-control styled' name='code[]' placeholder='Code of this course' value=''></div></div><div class='col-md-8'><div class='form-group'><label>Course Name</label><input type='text' class='form-control styled ' name='name[]' placeholder='Title of this course' value='' required></div></div></div><!-- End row --><div class='row'><div class='col-md-4'><label>Currently Teaching?</label><select class='form-control styled required' name='currently_teaching[]'><option value='1' selected>Yes</option><option value='0' >No</option></select></div><div class='col-md-8'><div class='form-group'><label>Department</label><select  class='form-control styled ' name='department[]'><option value='Computer Science & Engineering' selected>Computer Science & Engineering</option> <option value='Electronics & Communication Engineering' >Electronics & Communication Engineering</option><option value='Mechanical Engineering' >Mechanical Engineering</option><option value='Natural Sciences' >Natural Sciences</option><option value='Design' >Design</option></select></div></div></div><div class='row'><div class='col-md-12'><div class='form-group'><label>Link</label><input type='text' class='form-control styled ' name='link' placeholder='Link of this course(Give the full path : including http/https)' value='' ></div></div></div><!-- End row --><div class='row'><div class='col-md-12'><div class='form-group'><label>Institute</label><input type='text' class='form-control styled ' name='institute[]' placeholder='Institute where this course was held' value='' ></div></div></div><!-- End row --><div class='row'><div class='col-md-12'><div class='form-group'><br><label>UG</label><br><input type='checkbox' name='ug[]' value='1'  checked='checked'>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='checkbox' name='ug[]'value='0' >No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><label>PG</label><br><input type='checkbox' name='pg[]' value='1' checked='checked'>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='checkbox' name='pg[]' value='0' >No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><label>PhD</label><br><input type='checkbox' name='phd[]' value='1' checked='checked'>Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='checkbox' name='phd[]' value='0' >No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></div></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
        var publications_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><label>Paper</label><input type='text' class='form-control styled ' required name='paper[]' placeholder='paper'  value=''></div></div><div class='col-md-6'><div class='form-group'><label>Order</label><input type='text' class='form-control styled '	 name='order[]' placeholder='Order (1-100) 1 being most prominent' value='100'></div></div></div><!-- End row --><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br>  </div>";
        var projects_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><label>Title</label><input type='text' maxlength=200 class='form-control styled ' required name='title[]' placeholder='Title' value=''></div></div></div><!-- End row --><div class='row'><div class='col-md-6'><label>Description</label><textarea id='research_desc' maxlength=500 name='description[]'  placeholder='Give a short description for this work' rows='7' cols='45' ></textarea></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
        var honors_HTML="<div><a href='javascript:void(0);' class='remove_button' title='Remove field'>Remove</a><br><br><div class='row'><div class='col-md-6'><div class='form-group'><label>Title</label><input type='text' maxlength=500 class='form-control styled ' required name='title[]' placeholder='Title of this honor' value=''></div></div><div class='col-md-6'><div class='form-group'><label>Period</label><input type='text' maxlength=15 class='form-control styled required' name='period[]' placeholder='When did you receive it?' value=''></div></div></div><!-- End row --><div class='row'><div class='col-md-6'><label>Description</label><textarea maxlength=500 name='description[]'  placeholder='Describe this honour' rows='7' cols='45'></textarea></div></div><hr style='height:1px;border:none;color:#333;background-color:#333;' /><br></div>";
        $('button.add_qualification').on('click',function(){
			$(this).parent().parent().parent().prepend(qualification_HTML);
		});
		$('button.add_professional_experience').on('click',function(){
			$(this).parent().parent().parent().prepend(professional_experiences_HTML);
		});
		$('button.add_administrative_position').on('click',function(){
			$(this).parent().parent().parent().prepend(administrative_positions_HTML);
		});
		$('button.add_student').on('click',function(){
			$(this).parent().parent().parent().prepend(student_detail_HTML)
		});
		$('button.add_conferences').on('click',function(){
			$(this).parent().parent().parent().prepend(conferences_HTML)
		});
		$('button.add_courses').on('click',function(){
			$(this).parent().parent().parent().prepend(courses_HTML)
		});
		$('button.add_publications').on('click',function(){
			$(this).parent().parent().parent().prepend(publications_HTML)
		});
		$('button.add_projects').on('click',function(){
			$(this).parent().parent().parent().prepend(projects_HTML)
		});
		$('button.add_honors').on('click',function(){
			$(this).parent().parent().parent().prepend(honors_HTML)
		});
		$('body').on('click', 'a.remove_button', function() {
    		$(this).parent().remove();
		});
	});
</script>
@endsection