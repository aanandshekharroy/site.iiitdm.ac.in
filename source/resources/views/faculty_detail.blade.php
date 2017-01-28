	@extends('layouts.app')

	@section('content')
	<style type="text/css">
		.tabs nav li.tab-current::before,.tabs nav li.tab-current::after
		{
			top:40px;
			height: 1px;
		}
		.tabs nav a
		{
			font-size: 16px;
			padding: 0 1.0em;
		}

	</style>


	<div id="position">
		<div class="container">
			<ul>
			<li><a href="/">Home</a></li>
				<li><a href="/faculty">Faculty</a></li>
				<li>Profile</li>
			</ul>
		</div>
	</div>
	<div class="container_gray_bg" style="background-color:#f3f3f3;">
		<div class="container margin_60" style="padding-top:30px;">
			<div class="row">
				<aside class="col-md-3" style="padding-top: 50px;padding-right: 20px;">

					<div class="profile">
						<p class="text-center"><img src="{{$user->proPic}}" 
						alt="" class="img-circle styled_2">
						</p>
						<ul class="social_teacher">
							<li><a href="{{$user->facebook}}"><i class="icon-facebook"></i></a></li>
							<li><a href="{{$user->twitter}}"><i class="icon-twitter"></i></a></li>
							<li><a href="{{$user->linkedin}}"><i class=" icon-linkedin"></i></a></li>
							<li><a href="{{$user->cv}}"><i class="icon-download-5"></i></a></li>
						</ul>   
						<ul>
							<li>Name <strong class="pull-right">{{$user->name}}</strong> </li>
							<li>Designation  <strong class="pull-right">{{$user->designation}}</strong></li>
							<li>Email <strong class="pull-right">{{$user->email}}</strong></li>
							<li>Telephone  <strong class="pull-right"> {{$user->phone}}</strong></li>
							<li>Address<strong class="pull-right">IIITDM Jabalpur</strong></li>
							<li>Webpage<a href="{{$user->webpage}}" style="color:#444;">
							<strong class="pull-right">{{$user->webpage}}</strong></a></li></ul>

						</div><!-- End box-sidebar -->
					</aside>
					<div class="col-md-9" style="padding-left: 30px;">
						<div id="tabs" class="tabs">
							<nav>
								<ul>
									<li class="tab-current"><a href="#section-1" class="icon-user"><span>About</span></a></li>
									<li ><a href="#section-2" class="icon-pencil"><span>Courses</span></a></li>
									<li ><a href="#section-3" class="icon-book"><span>Research</span></a></li>
									<li ><a href="#section-4" class="icon-vcard-1"><span>Contact</span></a></li>
									<li ><a href="#section-5" class="icon-picture"><span>Gallery</span></a></li>
								</ul>
							</nav>
							<div class="content">
								<section class="content-current" id="section-1">    
									<div class="box_style_1  animated fadeIn">
										<div class="indent_title_in">
											<i class="pe-7s-user"></i>
											<h3>Profile</h3>
											<p>{{$user->designation}} in the field of {{$user->department}}</p>
										</div>
										<div class="wrapper_indent">
											<p>{{$user->about_me}}</p>
											<h3 style="padding-bottom:10px;">
											Interests</h3>
											<p>{{$user->interests}}</p>
												<h3 style="padding-bottom:10px;">Qualifications</h3>
												
													<div class="row">
	   			                                        <div class="col-md-10">
				                                            <ul class="list_3">
				                                            @foreach ($user->qualifications as $qualification)
				                                            <li><strong>{{$qualification->degree}}
				                                            	</strong>
				                                            	<p>{{$qualification->college}}<br/>{{$qualification->description}}</p>
				                                            </li>
				                                            @endforeach 
				                                            </ul>
				                                        </div>
                                        			</div><!-- End row-->
												

												<h3 style="padding-bottom:10px;">Professional Experience</h3>
												<div class="row">

													<div class="col-md-10">
														<ul class="list_6">
															@foreach ($user->professional_experiences as $experience)
																<li><strong>{{$experience->from}}-{{$experience->to}} as {{$experience->title}}</strong>
																<p>{{$experience->description}}</p>
																</li> 
															@endforeach
														</ul>
													</div>

												</div><!-- End row--> 

												<h3 style="padding-bottom:10px;">Administrative Positions</h3>
												<div class="row">

													<div class="col-md-10">
														<ul class="list_6">
														@foreach ($user->administrative_positions as $position)
															<li><strong>{{$position->from}}-{{$position->to}} as {{$position->title}}</strong>
															<p>{{$position->description}}</p>
															</li> 
														@endforeach
														</ul>
													</div>

												</div><!-- End row--> 

												<h3 style="padding-bottom:10px;">Honors & Awards</h3>
												<div class="row">

													<div class="col-md-10">
														<ul class="list_5">
														@foreach ($user->honors as $honor)
															<li><strong>{{$honor->period}} -   {{$honor->title}}</strong>
															<p>{{$honor->description}}</p>
															</li> 
														@endforeach
														</ul>
													</div>
												</div>

											</div><!--wrapper_indent -->


										</div>
									</section>

									<section id="section-2">    
										<div class="box_style_1 animated fadeIn">
											<div class="indent_title_in">
												<i class="iconcustom-education_online"></i>
												<h3>My courses</h3>
												<p>Current & Previous</p>
											</div>
											<div class="wrapper_indent">
												<h3 style="padding-bottom:10px;"><strong>Current</strong></h3>
												<div class="table-responsive">
													<table class="table table-striped add_bottom_30">
														<thead>
															<tr>
																<th>Course Code</th>
																<th>Course name</th>
																<th>Category</th>
																<th>Institute</th>
															</tr>
														</thead>
														<tbody>
														@foreach ($user->current_courses() as $course)
															<tr>
															<td><a href="" style="color:#444;">{{$course->code}}</a></td>
															<td><a href="" style="color:#444;">{{$course->name}}</a></td>
																<td>{{$course->course_category()}}</td>
																<td>{{$course->code}}</td>
															</tr>
															@endforeach
															</tbody>
														</table>
													</div>
													<h3 style="padding-bottom:10px;"><strong>Previous</strong></h3>
													<div class="table-responsive">
														<table class="table table-striped add_bottom_30">
															<thead>
																<tr>
																	<th>Course Code</th>
																	<th>Course name</th>
																	<th>Category</th>
																	<th>Institute</th>
																</tr>
															</thead>
															<tbody>
															@foreach ($user->previous_courses() as $course)
															<tr>
															<td><a href="" style="color:#444;">{{$course->code}}</a></td>
															<td><a href="" style="color:#444;">{{$course->name}}</a></td>
																<td>{{$course->course_category()}}</td>
																<td>{{$course->code}}</td>
															</tr>
															@endforeach
																			</tbody>
																		</table>
																	</div> 
																</div><!--wrapper_indent -->



															</div>
														</section>


														<section id="section-3">    
															<div class="box_style_1 animated fadeIn">
																<div class="indent_title_in">
																	<i class="iconcustom-research"></i>
																	<h3>Research</h3>
																	<p>Areas or Specialisation / Project Activities / Publications</p>
																</div>
																<div class="wrapper_indent">

																	<h3 style="padding-bottom:10px;">Areas / Specialisation</h3>
																	<div class="row">
																		<div class="col-md-10">
																			<p>{{$user->specialization}}<p>
																			</div>

																		</div><!-- End row--> 

																		<h3 style="padding-bottom:10px;">Project Activities</h3>
																		<div class="row">
																			<div class="col-md-10">
																				<ul class="list_8">
																				@foreach($user->projects as $project)
																				<li><strong>{{$project->title}}</strong><p>{{$project->description}}</p></li>
																				@endforeach
																				</ul>
																			</div>

																		</div><!-- End row--> 

																		<h3 style="padding-bottom:10px;">Publications</h3>
																		<div class="row">
																			<div class="col-md-10">
																				<ul class="list_7">
																				@foreach($user->publications as $publication)
																					<li><a href="{{$publication->link}}" style="color:#444;"><strong>{{$publication->title}}</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>
																					&nbsp;{{$publication->author}}</p>
																					<p style="margin-top: -15px;">
																					<strong>{{$publication->type}}: </strong>
																					&nbsp;{{$publication->description}}
																					</p>
																					</li>
																				
																				 @endforeach
																				 </ul>
																			</div>

																		</div><!-- End row--> 

																	</div><!--wrapper_indent -->
																	<div class="indent_title_in">
																		<i class="iconcustom-research"></i>
																		<h3>Conference / Workshop</h3>
																		<p>Organised/Attended</p>
																	</div>
																	<div class="wrapper_indent">
																		<div class="row">
																			<div class="col-md-10">
																				<ul class="list_9">
																				@foreach($user->conferences as $conference)
																				<li><a href="{{$conference->link}}">
																				<p>{{$conference->description}}</p></a>
																				</li>
																				@endforeach
																				 </ul>
																			</div>

																		</div><!-- End row--> 

																	</div><!--wrapper_indent -->

																	<div class="indent_title_in">
																		<i class="iconcustom-education_online"></i>
																		<h3>Students</h3>
																		<p>M. Tech / Ph. D.</p>
																	</div>
																	<div class="wrapper_indent">
																		<h3 style="padding-bottom:10px;"><strong>M. Tech.</strong></h3>
																		<div class="table-responsive">
																			<table class="table table-striped add_bottom_30">
																				<thead>
																					<tr>
																						<th>Roll no</th>
																						<th>Name</th>
																						<th>Status</th>
																						<th>Year</th>
																						<th>Specialization</th>
																						<th>Co-guide</th>
																					</tr>
																				</thead>
																				<tbody>
																				@foreach ($user->mtech_students() as $student)
																				<tr><td><a href="#" style="color:#444;">{{$student->roll_number}}</a></td>
																				<td><a href="#" style="color:#444;">{{$student->name}}</a></td>
																				<td><a href="#" style="color:#444;">{{$student->status}}</a></td>
																				<td> &nbsp&nbsp -</td><td><a href="#" style="color:#444;">{{$student->title_work}}
																				</a>
																				</td>
																				<td><a href="#" style="color:#444;">{{$student->co_guide}}</a></td></tr>
																				@endforeach
																				</tbody>
																			</table>
																		</div>
																		<h3 style="padding-bottom:10px;"><strong>Ph. D.</strong></h3>
																		<div class="table-responsive">
																			<table class="table table-striped add_bottom_30">
																				<thead>
																					<tr>
																						<th>Roll no</th>
																						<th>Name</th>
																						<th>Status</th>
																						<th>Year</th>
																						<th>Specialization</th>
																						<th>Co-guide</th>
																					</tr>
																				</thead>
																				<tbody>
																				@foreach ($user->phd_students() as $student)
																				<tr><td><a href="#" style="color:#444;">{{$student->roll_number}}</a></td>
																				<td><a href="#" style="color:#444;">{{$student->name}}</a></td>
																				<td><a href="#" style="color:#444;">{{$student->status}}</a></td>
																				<td> &nbsp&nbsp -</td><td><a href="#" style="color:#444;">{{$student->title_work}}
																				</a>
																				</td>
																				<td><a href="#" style="color:#444;">{{$student->co_guide}}</a></td></tr>
																				@endforeach
																				</tbody>
																			</table>
																		</div> 
																	</div><!--wrapper_indent -->
																</div>
															</section>

															<section id="section-4">    
																<div class="box_style_1 animated fadeIn">
																	<div class="indent_title_in">
																		<i class="iconcustom-know_how"></i>
																		<h3>Contact me</h3>
																		<p>Feel free to contact</p>
																	</div>
																	<div class="wrapper_indent">
																		<h3 style="padding-bottom:10px;"></h3>
																		<div class="row">
																			<div class="col-md-10"><h4>
																			<p style="font-weight:bold;">
																			<i class="icon-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$user->name}}</p></h4>
																			<p style="font-size:16px;"><i class="icon-email">
																				
																			</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->email}}</p>
																			<p style="font-size:16px;"><i class="icon-facebook">
																			</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->facebook}}</p>
																			<p style="font-size:16px;"><i class="icon-twitter">
																			</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->twitter}}</p>
																			<p style="font-size:16px;"><i class="icon-linkedin">
																			</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->linkedin}}</p>
																			<p style="font-size:16px;"><i class="icon-google">
																			</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->gmail}}</p>
																			<p style="font-size:16px;"><i class="icon-skype">
																			</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->skype}}</p>
																			<p style="font-size:16px;"><i class="icon-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
																			{{$user->phone}}</p>
																			<p style="font-size:16px;"><i class="icon-megaphone-1"></i>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Fax) 91-{{$user->fax}}</p>
																			<p style="font-size:16px;"><a href="{{$user->cv}}">
																			<i class="icon-cloud-1"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Download CV</a></p></div>

																		</div> 


																	</div>
																</div>
															</section>

															<section id="section-5">    
																<div class="box_style_1 animated fadeIn">
																	<div class="indent_title_in">
																		<i class="pe-7s-photo-gallery"></i>
																		<h3>Gallery</h3>
																		<p>Photos</p>
																	</div>
																	<div class="wrapper_indent">
																		<section class="grid" style="display:block;">
																			<div class="container" style="width:100%">
																				<div class="main_title">
																					<h4 style="font-size:22px;">Here some pictures ...</h4>

																				</div>
																				<div class="row">
																					<ul class="magnific-gallery"><li style="width: 33%;">
																						@foreach($user->gallery as $gallery)
																						<li style="width: 33%;">
																							<figure>
																								<img src="{{$gallery->filename}}" alt="{{$gallery->description}}">
																								<figcaption>
																									<div class="caption-content">
																										<a href="{{$gallery->filename}}"
																										 title="{{$gallery->description}}" 
																										 data-effect="mfp-move-horizontal">
																											<i class="icon_search"></i>
																											<p>&nbsp;</p>
																										</a>
																									</div>
																								</figcaption>
																							</figure>
																						</li>
																						@endforeach
																					</ul>
																				</div>
																			</div>
																		</section>
																		<p></p>


																	</div><!--wrapper_indent -->
													</div>
												</section>


											</div>
										</div>
									</div>

								</div><!--End row -->
							</div><!--End container -->
						</div><!--End bg_gray_container -->
						@endsection