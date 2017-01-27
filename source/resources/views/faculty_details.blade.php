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
	                      	</div> <!-- End row -->
	                      	@if(Session::has('msg-index-page'))
							    <div class="alert-box success">
							        <strong><h2>{{ Session::get('msg-index-page') }}</h2><strong>
							    </div>
							@endif
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
					<div class="indent_title_in">
		                <h3>Basic Details</h3>
                		<p>Details present in the left panel</p>
            		</div>
                	<div class="wrapper_indent">
            			<div class="basic_details_area">
            				@if(Session::has('msg-basic-details'))
							    <div class="alert-box success">
							        <strong><h2>{{ Session::get('msg-basic-details') }}</h2><strong>
							    </div>
							@endif
							<form action="update-basic-details" method="POST">
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
	                  				<div class="col-md-2">    
	                                	<input class="button" type="submit" value="Update basic details" name="submit"> 
	                  				</div>
	                 			</div>
                 			</form>
                		</div>
                	</div>                	
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
                <form action="/administrative_positions" method="post">
      				{{csrf_field()}}
      				@foreach(Auth::user()->professional_experiences as  $experience)
                  		<div>
                  			<a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
                    		<div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
	                                	<label>Title</label>
	                                	<input type="text" class="form-control styled required" id="p_title_1" name="title" placeholder="Title of position eg. Professor etc." value="Coordinator Computer Center">
                            		</div>
                            	</div>
                            	<div class="col-md-6">
                                	<div class="form-group">
	                                	<label>Description</label>
	                                	<input type="text" class="form-control styled required" id="p_institute_1" name="institute" placeholder="Description" value="IIITDM Jabalpur">
                            		</div>
                            	</div>
                        	</div><!-- End row -->
                        
                         <div class="row">
                    <div class="col-md-6">
                                <label>From</label>
                                
                             <input type="text" class="form-control styled required" id="p_from_1" name="p_from" placeholder="Start date (year or month etc)" value="September 2014">
                           
                            </div>

                     <div class="col-md-6">
                                <label>To</label>
                                
                             <input type="text" class="form-control styled required" id="p_to_1" name="p_to" placeholder="End date (year or month etc)" value="Till date">
                           
                            </div>
                             
                   </div>
                     <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>   
                     </div>
                           
                   
<div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_2" name="title" placeholder="Title of position eg. Professor etc." value="Warden Hall-IV">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control styled required" id="p_institute_2" name="institute" placeholder="Description" value="IIITDM Jabalpur">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                    <div class="col-md-6">
                                <label>From</label>
                                
                             <input type="text" class="form-control styled required" id="p_from_2" name="p_from" placeholder="Start date (year or month etc)" value="Nov 2012">
                           
                            </div>

                     <div class="col-md-6">
                                <label>To</label>
                                
                             <input type="text" class="form-control styled required" id="p_to_2" name="p_to" placeholder="End date (year or month etc)" value="June 2016">
                           
                            </div>
                             
                   </div>
                     <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>   
                     </div>
                           
                   
</div> <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                        
                                <button type="button" class="add_button_admin_position"  ><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            </div>
                            </div><!-- end of row -->
                            
                <br><br><br>
                <h4>6) Honors</h4><br>
                 
                 
                <div class="more_honors">      <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="honor_title_1" name="h_title" placeholder="Title of this honor" value="Awarded SRF by CSIR">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Period</label>
                                <input type="text" class="form-control styled required" id="honor_period_1" name="period" placeholder="When did you receive it?" value="2007">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                    <div class="col-md-6">
                                <label>Description</label>
                               
                                <textarea id="honor_about" name="honor_about"  placeholder="Describe this honour" rows="7" cols="45"></textarea>
                               <div hidden>
                               <input type="text" class="form-control styled required" id="honor_description_1" name="description" value="" placeholder="Describe your work" >
                               </div>
                              
                         
                            </div>
                       
                   </div>
                   <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                   </div>
                        
                            <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="honor_title_2" name="h_title" placeholder="Title of this honor" value="Qualified GATE in CSE">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Period</label>
                                <input type="text" class="form-control styled required" id="honor_period_2" name="period" placeholder="When did you receive it?" value="2003">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                    <div class="col-md-6">
                                <label>Description</label>
                               
                                <textarea id="honor_about" name="honor_about"  placeholder="Describe this honour" rows="7" cols="45"></textarea>
                               <div hidden>
                               <input type="text" class="form-control styled required" id="honor_description_2" name="description" value="" placeholder="Describe your work" >
                               </div>
                              
                         
                            </div>
                       
                   </div>
                   <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                   </div>
                        
                       </div><div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                
                                <button type="button" class="add_button_honors"><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            
                            </div>
                        
                      </div>

                    <div class="row">
                    <br><br>
                             <div class="col-md-12">
                                <h4>6) Curriculum-Vitae</h4> <br><br>
                                <label>Current CV Link - &nbsp&nbsp</label>
                                <a target = "_blank" href="">No link at present</a></div></div>
                           <div class="row">
                        <div class="col-md-6">
                        <div id="uploadingCV">
                        <br><label> Upload/Update your CV </label><br>

                            <form action="upload_CV.php" method="post" enctype="multipart/form-data" id="uploadCVForm">
                             
                            <input type="file" name="fileToUpload1" id="fileToUpload1">
                            <br>
                            <input class="button" type="submit" value="Upload CV" name="submit1" id="upload_cv">
                            </form>
                       </div>
                       </div>

                   </div>
         </div></div>    <hr class="styled_2">
                    
                   <div class="indent_title_in">

                <h2>Courses</h2>
                <p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;">Details of the Courses tab</p>
            </div>
			 <div class="wrapper_indent">
                <div class="basic_details_area">


               <br><br>
                   <h4>1) Add Courses</h4><br>
                <div class="more_courses">
         
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_1" name="p_code" placeholder="Code of this course" value="CS410" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_1" name="p_title" placeholder="Title of this course" value="Compiler Design" required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_1" class="form-control styled required" > <option value="1" selected>Yes</option><option value="0" >No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_1" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_1" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_1" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG" checked>UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG">PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_2" name="p_code" placeholder="Code of this course" value="" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_2" name="p_title" placeholder="Title of this course" value="Computational Number Theory & Cryptography" required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_2" class="form-control styled required" > <option value="1" selected>Yes</option><option value="0" >No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_2" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_2" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_2" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG" checked>UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG">PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_3" name="p_code" placeholder="Code of this course" value="ES103" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_3" name="p_title" placeholder="Title of this course" value="Data Structures and Algorithms" required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_3" class="form-control styled required" > <option value="1" >Yes</option><option value="0" selected>No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_3" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_3" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_3" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG" checked>UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG">PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_4" name="p_code" placeholder="Code of this course" value="CS205" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_4" name="p_title" placeholder="Title of this course" value=" Language Theory" required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_4" class="form-control styled required" > <option value="1" >Yes</option><option value="0" selected>No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_4" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_4" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_4" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG" checked>UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG">PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_5" name="p_code" placeholder="Code of this course" value="CS532" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_5" name="p_title" placeholder="Title of this course" value=" Advanced Data Structures and Algorithms " required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_5" class="form-control styled required" > <option value="1" >Yes</option><option value="0" selected>No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_5" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_5" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_5" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG">UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG" checked>PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_6" name="p_code" placeholder="Code of this course" value="CS607" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_6" name="p_title" placeholder="Title of this course" value=" Cryptography & N/W Security" required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_6" class="form-control styled required" > <option value="1" >Yes</option><option value="0" selected>No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_6" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_6" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_6" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG">UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG" checked>PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">

                         <div class="col-md-4">
                                <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control styled required" id="c_code_7" name="p_code" placeholder="Code of this course" value="CS308" required>
                            </div>
                            </div>

                              <div class="col-md-8">
                                <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control styled required" id="c_title_7" name="p_title" placeholder="Title of this course" value=" Operating Systems" required>
                            </div>
                            </div>

                        </div><!-- End row -->

                        <div class="row">
                     
                      <div class="col-md-4">
                        
                        <label>Currently Teaching?</label>
                                 <select id="c_teaching_7" class="form-control styled required" > <option value="1" >Yes</option><option value="0" selected>No</option>  </select>
                          
                        </div>
                       
                                    <div class="col-md-8">
                                <div class="form-group">
                                <label>Department</label>
                                <select id="c_department_7" class="form-control styled required" > <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option> <option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option> <option value="Mechanical Engineering" >Mechanical Engineering</option> <option value="Natural Sciences" >Natural Sciences</option> <option value="Design" >Design</option>   </select>

                                
                            </div>
                            </div>


                           
                          

                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control styled required" id="c_desc_7" name="c_desc" placeholder="Link of this course(Give the full path : including http/https)" value="" >
                            </div>
                            </div>

                        </div><!-- End row -->

                         <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control styled required" id="c_ins_7" name="c_ins" placeholder="Institute where this course was held" value="IIITDM Jabalpur" >
                            </div>
                            </div>

                        </div><!-- End row -->

                      <div class="row">

                          
                        <div class="col-md-12">
                                <div class="form-group">
                                <label>Category</label><br>
                             <input type="checkbox" name="ug" value="UG" checked>UG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="pg" value="PG">PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="phd" value="PhD">PhD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            </div>
                            </div>

                        
                            
                      </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
   </div> <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <button type="button" class="add_button_courses"><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            </div>      
                            </div> 
							</div>      
                            </div>                   
                      
                      
 <hr class="styled_2">
                     
                     <div class="indent_title_in">
                <h2>Research</h2>
                <p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;">Details of the Research tab</p>
         
               </div>
			   <br><br>
			    <div class="wrapper_indent">
                <div class="basic_details_area">
				
                    <div class="more_research">



                    <h4>1) Project Activities</h4><br>

                   </div><div class="row">
                           <div class="row">
                            <div  style="margin-left: 16px;" class="col-md-3">
                                <div class="form-group">
                                  <button type="button" class="add_button_research"><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            </div>
                            </div>
                       </div> 
                      </div>
					  </div>   
                    
                
              
            <br><br><br>
                <div class="wrapper_indent">
                <h4>2) Publications</h4><br>
                <div class="more_publications">
         
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_1" name="p_title" placeholder="Title of this publication" value="Functional grouping of similar genes using eigenanalysis on minimum spanning tree based neighborhood graph">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_1" name="authors" placeholder="Names of authors" value="R. Jothi, Sraban Kumar Mohanty, and A. Ojha">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_1" name="label" placeholder="Short description for this publication" value="Computers in Biology and Medicine ,71(C), 2016,pp.135-148 (2016). ">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_1" name="type" placeholder="Conference or journal? etc." value="Journal">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_1" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_2" name="p_title" placeholder="Title of this publication" value="Energy Efficient Secure Communication Architecture forWireless Sensor Network">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_2" name="authors" placeholder="Names of authors" value="Satyajit Mondal, Sraban Kumar Mohanty, Sukumar Nandi">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_2" name="label" placeholder="Short description for this publication" value="Security and Communication Networks, , 9(16) Pp3314–3323 (2016) ">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_2" name="type" placeholder="Conference or journal? etc." value="Journal">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_2" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_3" name="p_title" placeholder="Title of this publication" value="A scalable attribute-set-based access control with both sharing and full-fledged delegation of access privileges in cloud computing">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_3" name="authors" placeholder="Names of authors" value="Rohit Ahuja, Sraban Kumar Mohanty, Kouichi Sakurai,">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_3" name="label" placeholder="Short description for this publication" value="Computers & Electrical Engineering, 2016, [DOI: 10.1016/j.compeleceng.2016.11.028]">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_3" name="type" placeholder="Conference or journal? etc." value="Journal">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_3" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_4" name="p_title" placeholder="Title of this publication" value="Fast Minimum Spanning Tree Based Clustering Algorithms on Local Neighborhood Graph">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_4" name="authors" placeholder="Names of authors" value=". Jothi, Sraban Kumar Mohanty, and A. Ojha">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_4" name="label" placeholder="Short description for this publication" value="10th international workshop on Graph-Based Representations in Pattern Recognition (GbRPR 2015), Beijing, China, Lecture Notes in Computer Science, Vol-9069 , pp.292-301 ">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_4" name="type" placeholder="Conference or journal? etc." value="Conference">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_4" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_5" name="p_title" placeholder="Title of this publication" value="On Careful Selection of Initial Centers for K-means Algorithm">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_5" name="authors" placeholder="Names of authors" value="R. Jothi, Sraban Kumar Mohanty, and A. Ojha">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_5" name="label" placeholder="Short description for this publication" value="International Conference on Advanced Computing, Networking and Informatics (ICACNI 2015)Bhubaneswar, Odisha, India, Springer Smart Innovation, Systems and Technologies, Vol 43, pp. 435-445 ">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_5" name="type" placeholder="Conference or journal? etc." value="Conference">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_5" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_6" name="p_title" placeholder="Title of this publication" value="On the impact of post-clustering phase in multiway spectral partitioning">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_6" name="authors" placeholder="Names of authors" value="R. Jothi, Sraban Kumar Mohanty, and A. Ojha">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_6" name="label" placeholder="Short description for this publication" value=" International Conference on Mining Intelligence and Knowledge Exploration (MIKE 2015), IIIT Hyderabad, India, Springer Lecture Notes in Artificial Intelligence, vol. 9468, pp.161-169 ">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_6" name="type" placeholder="Conference or journal? etc." value="Conference">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_6" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_7" name="p_title" placeholder="Title of this publication" value="An Identity Preserving Access Control Scheme with Flexible System Privilege Revocation in Cloud Computing">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_7" name="authors" placeholder="Names of authors" value="Rohit Ahuja, Sraban Kumar Mohanty and Kouichi Sakurai">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_7" name="label" placeholder="Short description for this publication" value="11th Asia Joint Conference on Information Security (AsiaJCIS 2016), Fukuoka, Japan. August 4-5, 2016, pp.1-8">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_7" name="type" placeholder="Conference or journal? etc." value="Conference">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_7" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
 
                <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                 
                   
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control styled required" id="p_title_8" name="p_title" placeholder="Title of this publication" value="A Traceable Signcryption Scheme for Secure Sharing of Data in Cloud Storage">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Authors</label>
                                <input type="text" class="form-control styled required" id="p_authors_8" name="authors" placeholder="Names of authors" value="Rohit Ahuja, Sraban Kumar Mohanty and Kouichi Sakurai">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Description</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_label_8" name="label" placeholder="Short description for this publication" value="6th IEEE International Symposium on Cloud and Service Computing, Nadi, Fiji, 2016 ">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Type</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="p_type_8" name="type" placeholder="Conference or journal? etc." value="Conference">
                            </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-6">
                                <label>Download Link</label>
                                <div class="styled-select">
                              <input type="url" class="form-control styled required" id="p_dwnld_link_8" name="link" placeholder="Provide a link for this paper(Give the full path : including http/https)" value="">
                            </div>
                            </div>
                            </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>  
                            </div>

                        
   </div> <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <button type="button" class="add_button_publications"><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            </div>      






                      </div>                  
                      </div>
                      
        <br><br><br>
                    <div class="wrapper_indent">
                    <h4>3) Conferences/Events</h4><br>
                    <div class="more_conferences"> <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled required" id="r_conference" name="r_conference" placeholder="Title, Description, Period etc." value="Coordinator(With Dr. Deepak Kumar Dalai): 14th National Workshop on Cryptology 2014 (under the aegis of Cryptology Research Society of India), 25-27 September 2014, IIITDM Jabalpur" >
                            </div>
                            </div>
						<div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled" id="r_link" name="r_link" placeholder="Add Link" value=" nwc.iiitdmj.ac.in ) " >
                            </div>
                            </div>
                        </div><!-- End row -->
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled required" id="r_conference" name="r_conference" placeholder="Title, Description, Period etc." value="General Co-chair: 16th International Conference of International Academy of Physical Sciences on Physical sciences and Technology for Sustainable Development (CONIAPS-XVI), March 20-22, 2014, IIITDM Jabalpur" >
                            </div>
                            </div>
						<div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled" id="r_link" name="r_link" placeholder="Add Link" value=" coniaps.iiitdmj.ac.in" >
                            </div>
                            </div>
                        </div><!-- End row -->
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled required" id="r_conference" name="r_conference" placeholder="Title, Description, Period etc." value=" Coordinator (with Dr. Pritee Khanna): Introduction to Graph and Geometric Algorithms, November 1-3, 2012, IIITDM Jabalpur" >
                            </div>
                            </div>
						<div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled" id="r_link" name="r_link" placeholder="Add Link" value="" >
                            </div>
                            </div>
                        </div><!-- End row -->
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled required" id="r_conference" name="r_conference" placeholder="Title, Description, Period etc." value="Coordinator (with Dr. Pritee Khanna) Basic Data Mining Algorithms and their Scalability for Big Data, August 16-21, 2016, under Electronics and ICT academy, PDPM IIITDM Jabalpur." >
                            </div>
                            </div>
						<div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled" id="r_link" name="r_link" placeholder="Add Link" value="ict.iiitdmj.ac.in" >
                            </div>
                            </div>
                        </div><!-- End row -->
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled required" id="r_conference" name="r_conference" placeholder="Title, Description, Period etc." value="Coordinator (with Dr. M. K. Bajpai  ): Data Structure and Algorithm using C, September 19-26, 2015, under Electronics and ICT academy, PDPM IIITDM Jabalpur." >
                            </div>
                            </div>
						<div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled" id="r_link" name="r_link" placeholder="Add Link" value="ict.iiitdmj.ac.in" >
                            </div>
                            </div>
                        </div><!-- End row -->
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled required" id="r_conference" name="r_conference" placeholder="Title, Description, Period etc." value="Coordinator (with Dr. Pritee Khanna) Advanced Data Mining Algorithms and their Scalability for Big Data, January 02-07, 2017, under Electronics and ICT academy, PDPM IIITDM Jabalpur" >
                            </div>
                            </div>
						<div class="col-md-6">
                                <div class="form-group">
                             
                                <input type="text" class="form-control styled" id="r_link" name="r_link" placeholder="Add Link" value="http://ict.iiitdmj.ac.in/adatamining.html" >
                            </div>
                            </div>
                        </div><!-- End row -->
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div> </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <button type="button" class="add_button_conferences"><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            </div>   
                       
                        </div>
                        </div>        <br><br><br>
                    <div class="wrapper_indent">
                    <h4>4) Students</h4><br>
                    <div class="more_students"> <div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-2">
                             <label>Roll number</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="0" >
                        </div>

                        <div class="col-md-3">
                             <label>Name</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Ms. R. Jothi" >
                        </div>

                         <div class="col-md-2">
                        
                        <label>Category</label>
                                 <select  class="form-control styled required" > <option value="Mtech" >Mtech</option><option value="PhD" selected>PhD</option><option value="PBI" >PBI</option>  </select>
                          
                        </div>
                             <div class="col-md-3">
                        
                        <label>Status</label>
                                 <select  class="form-control styled required" > <option value="Completed" >Completed</option> <option value="Ongoing" selected>Ongoing</option>  </select>
                          
                        </div>
                     
                            <div class="col-md-2">
                                 <label>Year</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>
                       
                        </div><!-- End row -->


                        <br>
                          <div class="row">
                            

                            <div class="col-md-7">
                             <label>Title of Work</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Minimum Spanning Tree based Clustering Algorithms for Gene Expression Analysis" >
                        </div>

                             <div class="col-md-5">
                                 <label>Co-guide(s)</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="Prof. A. Ojha" >
                            </div>

                          </div>

                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-2">
                             <label>Roll number</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="0" >
                        </div>

                        <div class="col-md-3">
                             <label>Name</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Mr. Rohit Ahuja" >
                        </div>

                         <div class="col-md-2">
                        
                        <label>Category</label>
                                 <select  class="form-control styled required" > <option value="Mtech" >Mtech</option><option value="PhD" selected>PhD</option><option value="PBI" >PBI</option>  </select>
                          
                        </div>
                             <div class="col-md-3">
                        
                        <label>Status</label>
                                 <select  class="form-control styled required" > <option value="Completed" >Completed</option> <option value="Ongoing" selected>Ongoing</option>  </select>
                          
                        </div>
                     
                            <div class="col-md-2">
                                 <label>Year</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>
                       
                        </div><!-- End row -->


                        <br>
                          <div class="row">
                            

                            <div class="col-md-7">
                             <label>Title of Work</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Security Issues in Cloud Computing" >
                        </div>

                             <div class="col-md-5">
                                 <label>Co-guide(s)</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>

                          </div>

                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-2">
                             <label>Roll number</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="0" >
                        </div>

                        <div class="col-md-3">
                             <label>Name</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Gaurav Mishra" >
                        </div>

                         <div class="col-md-2">
                        
                        <label>Category</label>
                                 <select  class="form-control styled required" > <option value="Mtech" >Mtech</option><option value="PhD" selected>PhD</option><option value="PBI" >PBI</option>  </select>
                          
                        </div>
                             <div class="col-md-3">
                        
                        <label>Status</label>
                                 <select  class="form-control styled required" > <option value="Completed" >Completed</option> <option value="Ongoing" selected>Ongoing</option>  </select>
                          
                        </div>
                     
                            <div class="col-md-2">
                                 <label>Year</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>
                       
                        </div><!-- End row -->


                        <br>
                          <div class="row">
                            

                            <div class="col-md-7">
                             <label>Title of Work</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Graph Theoretic Clustering Methods" >
                        </div>

                             <div class="col-md-5">
                                 <label>Co-guide(s)</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>

                          </div>

                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div><div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a><br><br>   

                        <div class="row">
                        <div class="col-md-2">
                             <label>Roll number</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="0" >
                        </div>

                        <div class="col-md-3">
                             <label>Name</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Bhoopenra Kumar Ahirwar" >
                        </div>

                         <div class="col-md-2">
                        
                        <label>Category</label>
                                 <select  class="form-control styled required" > <option value="Mtech" >Mtech</option><option value="PhD" selected>PhD</option><option value="PBI" >PBI</option>  </select>
                          
                        </div>
                             <div class="col-md-3">
                        
                        <label>Status</label>
                                 <select  class="form-control styled required" > <option value="Completed" >Completed</option> <option value="Ongoing" selected>Ongoing</option>  </select>
                          
                        </div>
                     
                            <div class="col-md-2">
                                 <label>Year</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>
                       
                        </div><!-- End row -->


                        <br>
                          <div class="row">
                            

                            <div class="col-md-7">
                             <label>Title of Work</label>
                                <input type="text" class="form-control styled required"  placeholder="" value="Security Challenges in Smart-Grid" >
                        </div>

                             <div class="col-md-5">
                                 <label>Co-guide(s)</label>
                                    <input type="text" class="form-control styled required"  placeholder="" value="" >
                            </div>

                          </div>

                        <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>
                        </div> </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <button type="button" class="add_button_students"><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add student</label>
                            </div>
                            </div>   
                       
                        </div>
                        <hr class="styled_2">
                    
                    
                <h2>Contact</h2>
                <p style="    color: #999; margin: 0;   padding: 0;  font-size: 13px;  line-height: 14px;">Details of the Contact tab</p><br><br>
             


                     
                        <h4>1) Web Address</h4>
             
            
                <div class="webspace_area">
                    <div class="row">
                             <div class="col-md-6">
                                <label>Gmail</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="gmail_id" name="gmail" placeholder="Gmail ID" value="sraban@gmail.com">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control styled required" id="facebook_id" name="facebook" placeholder="Facebook id" value="">
                            </div>
                            </div>
                        </div><!-- End row -->
                        
                         <div class="row">
                            <div class="col-md-6">
                                <label>Twitter</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="twitter_link" name="twitter" placeholder="Twitter id" value="">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <label>LinkedIn</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="linkedin" name="linkedin" placeholder="LinkedIn handle" value="">
                            </div>
                            </div>
                       
                   </div>
                        
                            <div class="row">
                           
                            <div class="col-md-6">
                                <label>Skype</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="skype_id" name="skype" placeholder="Skype ID" value="skmfru">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <label>Alternate Phone</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="alt_phone_id" name="alt_phone" placeholder="Alternate Phone Number" value="">
                            </div>
                            </div>
                            
                        </div>  

                        <div class="row">
                           
                            <div class="col-md-6">
                                <label>Fax</label>
                                <div class="styled-select">
                              <input type="text" class="form-control styled required" id="fax_id" name="fax" placeholder="Fax number" value="+91-">
                            </div>
                            </div>

                            </div>

                    
                      </div>
                      </div>
                   <div class="wrapper_indent">
                     <br><br><br>
                     <h4>2) Add Address</h4><br><div class="more_address"></div> <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                        
                                <button type="button" class="add_button_address"  ><img src="../img/plus.png"/></button>
                                 &nbsp&nbsp  <label>Add more fields</label>
                            </div>
                            </div>
                            </div>
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


                            <form action="upload_gallery.php" method="post" enctype="multipart/form-data" id="uploadGallery">
                       

                         <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control styled" id="gallery_description" name="gallery_description" placeholder="Title or short description for the image" value="">
                            </div>
                           </div>      
                            <input type="file" name="fileToUpload2" id="fileToUpload2">
                            <br>
                            <input class="button" type="submit" value="Upload Image" name="submit2" id="upload_gallery">
                            </form>
                       </div>
                       </div>



                        </div>
                         
                       
                         

                         </div><br><br><div class="row">

                            <h4>Current Collection</h4>
                            <div class="more_gallery_pics"> 
                          
                                  <div class="col-md-3">
                                     <a href="javascript:void(0);" class="remove_button" onclick="remove_gallery_pic(29,2)" title="Remove field">Remove</a><br><br>
                                  <img  src="../assets/img/faculty/personal/DSC00482.JPG" class="img-thumbnail" alt="Silong Trip" >
                                  <p>Silong Trip </p>
                                  </div>



                            

                            
                          
                                  <div class="col-md-3">
                                     <a href="javascript:void(0);" class="remove_button" onclick="remove_gallery_pic(29,3)" title="Remove field">Remove</a><br><br>
                                  <img  src="../assets/img/faculty/personal/PIC000564.jpg" class="img-thumbnail" alt="My Office" >
                                  <p>My Office </p>
                                  </div>



                            

                            
                          
                                  <div class="col-md-3">
                                     <a href="javascript:void(0);" class="remove_button" onclick="remove_gallery_pic(29,4)" title="Remove field">Remove</a><br><br>
                                  <img  src="../assets/img/faculty/personal/sraban.jpg" class="img-thumbnail" alt="" >
                                  <p> </p>
                                  </div>



                            

                                     </div> <!-- end of more_gallery_pics -->                   </div>
                            </div></div>
  
                               
                            
                       






                   



                  
                 


					
                   
                
                       








          
                      
                      <hr class="styled_2">
                      
                      <div class="wrapper_indent">
                      <div class="form-group">
					<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="policy_terms" id="policy_terms" class="required" value="Yes" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> 
				</div>
                     <p><button type="button" style="     margin-left: 200px;   width: 300px;" onclick="update()" class="button">Update</button></p>
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
                    <a onclick="see_profile()" class="button small">See your profile</a>
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
        $('button.add_qualification').on('click',function(){
			$(this).parent().parent().parent().prepend(qualification_HTML);
		});
		$('button.add_professional_experience').on('click',function(){
			$(this).parent().parent().parent().prepend(professional_experiences_HTML);
		});
		$('button.add_administrative_position').on('click',function(){
			$(this).parent().parent().parent().prepend(administrative_positions_HTML);
		});
		$('a.remove_button').on('click',function(){
			$(this).parent().remove();
		});
	});
</script>
@endsection