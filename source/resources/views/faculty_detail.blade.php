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
				                                            <li><strong>{{qualification->degree}}
				                                            	</strong>
				                                            	<p>{{qualification->college}}<br/>{{qualification->description}}</p>
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
															<p>{{$experience->position}}</p>
															</li> 
														@endforeach
														</ul>
													</div>

												</div><!-- End row--> 

												<h3 style="padding-bottom:10px;">Honors & Awards</h3>
												<div class="row">

													<div class="col-md-10">
														<ul class="list_5"><li><strong>2007 - Awarded SRF by CSIR</strong><p></p></li><li><strong>2003 - Qualified GATE in CSE</strong><p></p></li> </ul>
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
														<tbody><tr><td><a href="" style="color:#444;">CS410</a></td><td><a href="" style="color:#444;">Compiler Design</a></td>
															<td>UG/</td><td>IIITDM Jabalpur</td></tr>
															<tr><td> &nbsp&nbsp -</td><td><a href="" style="color:#444;">Computational Number Theory & Cryptography</a></td>
																<td>UG/</td><td>IIITDM Jabalpur</td></tr>
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
															<tbody><tr><td><a href="" style="color:#444;">ES103</a></td><td><a href="" style="color:#444;">Data Structures and Algorithms</a></td>
																<td>UG/</td><td>IIITDM Jabalpur</td></tr>
																<tr><td><a href="" style="color:#444;">CS205</a></td><td><a href="" style="color:#444;"> Language Theory</a></td>
																	<td>UG/</td><td>IIITDM Jabalpur</td></tr>
																	<tr><td><a href="" style="color:#444;">CS532</a></td><td><a href="" style="color:#444;"> Advanced Data Structures and Algorithms </a></td>
																		<td>PG/</td><td>IIITDM Jabalpur</td></tr>
																		<tr><td><a href="" style="color:#444;">CS607</a></td><td><a href="" style="color:#444;"> Cryptography & N/W Security</a></td>
																			<td>PG/</td><td>IIITDM Jabalpur</td></tr>
																			<tr><td><a href="" style="color:#444;">CS308</a></td><td><a href="" style="color:#444;"> Operating Systems</a></td>
																				<td>UG/</td><td>IIITDM Jabalpur</td></tr>
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
																			<p>► I/O Efficient Algorithms<br>
																				► BigData Clustering algorithms<br>
																				► Security Issues in Cloud Computing<p>
																			</div>

																		</div><!-- End row--> 

																		<h3 style="padding-bottom:10px;">Project Activities</h3>
																		<div class="row">
																			<div class="col-md-10">
																				<ul class="list_8"> </ul>
																			</div>

																		</div><!-- End row--> 

																		<h3 style="padding-bottom:10px;">Publications</h3>
																		<div class="row">
																			<div class="col-md-10">
																				<ul class="list_7"><li><a href="" style="color:#444;"><strong>Functional Grouping Of Similar Genes Using Eigenanalysis On Minimum Spanning Tree Based Neighborhood Graph</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;R. Jothi, Sraban Kumar Mohanty, and A. Ojha</p><p style="margin-top: -15px;"><strong>Journal:</strong>&nbsp;Computers in Biology and Medicine ,71(C), 2016,pp.135-148 (2016). </p></li><li><a href="" style="color:#444;"><strong>Energy Efficient Secure Communication Architecture Forwireless Sensor Network</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;Satyajit Mondal, Sraban Kumar Mohanty, Sukumar Nandi</p><p style="margin-top: -15px;"><strong>Journal:</strong>&nbsp;Security and Communication Networks, , 9(16) Pp3314–3323 (2016) </p></li><li><a href="" style="color:#444;"><strong>A Scalable Attribute-set-based Access Control With Both Sharing And Full-fledged Delegation Of Access Privileges In Cloud Computing</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;Rohit Ahuja, Sraban Kumar Mohanty, Kouichi Sakurai,</p><p style="margin-top: -15px;"><strong>Journal:</strong>&nbsp;Computers & Electrical Engineering, 2016, [DOI: 10.1016/j.compeleceng.2016.11.028]</p></li><li><a href="" style="color:#444;"><strong>Fast Minimum Spanning Tree Based Clustering Algorithms On Local Neighborhood Graph</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;. Jothi, Sraban Kumar Mohanty, and A. Ojha</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp;10th international workshop on Graph-Based Representations in Pattern Recognition (GbRPR 2015), Beijing, China, Lecture Notes in Computer Science, Vol-9069 , pp.292-301 </p></li><li><a href="" style="color:#444;"><strong>On Careful Selection Of Initial Centers For K-means Algorithm</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;R. Jothi, Sraban Kumar Mohanty, and A. Ojha</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp;International Conference on Advanced Computing, Networking and Informatics (ICACNI 2015)Bhubaneswar, Odisha, India, Springer Smart Innovation, Systems and Technologies, Vol 43, pp. 435-445 </p></li><li><a href="" style="color:#444;"><strong>On The Impact Of Post-clustering Phase In Multiway Spectral Partitioning</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;R. Jothi, Sraban Kumar Mohanty, and A. Ojha</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp; International Conference on Mining Intelligence and Knowledge Exploration (MIKE 2015), IIIT Hyderabad, India, Springer Lecture Notes in Artificial Intelligence, vol. 9468, pp.161-169 </p></li><li><a href="" style="color:#444;"><strong>An Identity Preserving Access Control Scheme With Flexible System Privilege Revocation In Cloud Computing</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;Rohit Ahuja, Sraban Kumar Mohanty and Kouichi Sakurai</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp;11th Asia Joint Conference on Information Security (AsiaJCIS 2016), Fukuoka, Japan. August 4-5, 2016, pp.1-8</p></li><li><a href="" style="color:#444;"><strong>A Traceable Signcryption Scheme For Secure Sharing Of Data In Cloud Storage</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;Rohit Ahuja, Sraban Kumar Mohanty and Kouichi Sakurai</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp;6th IEEE International Symposium on Cloud and Service Computing, Nadi, Fiji,  December 7-10, 2016 </p></li><li><a href="" style="color:#444;"><strong>I/o Efficient Qr And Qz Algorithms</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;Sraban Kumar Mohanty and G. Sajith</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp;19th IEEE International Conference on High-Performance Computing (HiPC 2012), December 18-22, 2012, pp. 1-9</p></li><li><a href="" style="color:#444;"><strong>Out-of-core Tridiagonal Reduction</strong></a><p style="padding-top:6px;"><strong>Authors: </strong>&nbsp;Sraban Kumar Mohanty and G. Sajith</p><p style="margin-top: -15px;"><strong>Conference:</strong>&nbsp;19th IEEE International Conference on Advanced Computing and Communications (ADCOM 2013), Chennai, India, October 21-25, 2013, pp. 1-6 </p></li> </ul>
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
																				<ul class="list_9"><li><a href=" nwc.iiitdmj.ac.in ) "><p>Coordinator(With Dr. Deepak Kumar Dalai): 14th National Workshop on Cryptology 2014 (under the aegis of Cryptology Research Society of India), 25-27 September 2014, IIITDM Jabalpur</p></a></li><li><a href=" coniaps.iiitdmj.ac.in"><p>General Co-chair: 16th International Conference of International Academy of Physical Sciences on Physical sciences and Technology for Sustainable Development (CONIAPS-XVI), March 20-22, 2014, IIITDM Jabalpur</p></a></li><li><a href=""><p>Coordinator (with Dr. Pritee Khanna): Introduction to Graph and Geometric Algorithms, November 1-3, 2012, IIITDM Jabalpur</p></a></li><li><a href="ict.iiitdmj.ac.in"><p>Coordinator (with Dr. Pritee Khanna) Basic Data Mining Algorithms and their Scalability for Big Data, August 16-21, 2016, under Electronics and ICT academy, PDPM IIITDM Jabalpur.</p></a></li><li><a href="ict.iiitdmj.ac.in"><p>Coordinator (with Dr. M. K. Bajpai  ): Data Structure and Algorithm using C, September 19-26, 2015, under Electronics and ICT academy, PDPM IIITDM Jabalpur.</p></a></li><li><a href="http://ict.iiitdmj.ac.in/adatamining.html"><p>Coordinator (with Dr. Pritee Khanna) Advanced Data Mining Algorithms and their Scalability for Big Data, January 02-07, 2017, under Electronics and ICT academy, PDPM IIITDM Jabalpur</p></a></li> </ul>
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
																				<tbody></tbody>
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
																				<tbody><tr><td><a href="#" style="color:#444;">0</a></td><td><a href="#" style="color:#444;">Ms. R. Jothi</a></td><td><a href="#" style="color:#444;">Ongoing</a></td><td> &nbsp&nbsp -</td><td><a href="#" style="color:#444;">Minimum Spanning Tree based Clustering Algorithms for Gene Expression Analysis</a></td><td><a href="#" style="color:#444;">Prof. A. Ojha</a></td></tr>
																					<tr><td><a href="#" style="color:#444;">0</a></td><td><a href="#" style="color:#444;">Mr. Rohit Ahuja</a></td><td><a href="#" style="color:#444;">Ongoing</a></td><td> &nbsp&nbsp -</td><td><a href="#" style="color:#444;">Security Issues in Cloud Computing</a></td><td> &nbsp&nbsp -</td></tr>
																					<tr><td><a href="#" style="color:#444;">0</a></td><td><a href="#" style="color:#444;">Gaurav Mishra</a></td><td><a href="#" style="color:#444;">Ongoing</a></td><td> &nbsp&nbsp -</td><td><a href="#" style="color:#444;">Graph Theoretic Clustering Methods</a></td><td> &nbsp&nbsp -</td></tr>
																					<tr><td><a href="#" style="color:#444;">0</a></td><td><a href="#" style="color:#444;">Bhoopenra Kumar Ahirwar</a></td><td><a href="#" style="color:#444;">Ongoing</a></td><td> &nbsp&nbsp -</td><td><a href="#" style="color:#444;">Security Challenges in Smart-Grid</a></td><td> &nbsp&nbsp -</td></tr>
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
																			<div class="col-md-10"><h4><p style="font-weight:bold;"><i class="icon-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sraban Kumar Mohanty</p></h4><p style="font-size:16px;"><i class="icon-email"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sraban@iiitdmj.ac.in</p><p style="font-size:16px;"><i class="icon-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---</p><p style="font-size:16px;"><i class="icon-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---</p><p style="font-size:16px;"><i class="icon-linkedin"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---</p><p style="font-size:16px;"><i class="icon-google"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sraban@gmail.com</p><p style="font-size:16px;"><i class="icon-skype"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skmfru</p><p style="font-size:16px;"><i class="icon-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 91-761-2794224</p><p style="font-size:16px;"><i class="icon-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---</p><p style="font-size:16px;"><i class="icon-megaphone-1"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Fax) 91-</p><p style="font-size:16px;"><a href="#"><i class="icon-cloud-1"></i>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;Download CV</a></p></div>

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
																						<figure>
																							<img src="../assets/img/faculty/personal/DSC00482.JPG" alt="Silong Trip">
																							<figcaption>
																								<div class="caption-content">
																									<a href="../assets/img/faculty/personal/DSC00482.JPG" title="Silong Trip" data-effect="mfp-move-horizontal">
																										<i class="icon_search"></i>
																										<p>&nbsp;</p>
																									</a>
																								</div>
																							</figcaption>
																						</figure>
																					</li><li style="width: 33%;">
																					<figure>
																						<img src="../assets/img/faculty/personal/PIC000564.jpg" alt="My Office">
																						<figcaption>
																							<div class="caption-content">
																								<a href="../assets/img/faculty/personal/PIC000564.jpg" title="My Office" data-effect="mfp-move-horizontal">
																									<i class="icon_search"></i>
																									<p>&nbsp;</p>
																								</a>
																							</div>
																						</figcaption>
																					</figure>
																				</li><li style="width: 33%;">
																				<figure>
																					<img src="../assets/img/faculty/personal/sraban.jpg" alt="">
																					<figcaption>
																						<div class="caption-content">
																							<a href="../assets/img/faculty/personal/sraban.jpg" title="" data-effect="mfp-move-horizontal">
																								<i class="icon_search"></i>
																								<p>&nbsp;</p>
																							</a>
																						</div>
																					</figcaption>
																				</figure>
																			</li>
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