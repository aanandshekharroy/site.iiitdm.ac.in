@extends('layouts.app')

@section('content')
<div class="sub_header bg_1">
        	<div id="intro_txt" class="animated fadeInDown">
			<h1>Offered <strong>Programmes</strong></h1>
            <p>Some tag-line here.</p>
            </div>
		</div> <!--End sub_header -->
 
 		<div class="container_gray_bg">
        <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Academics</a></li>
                    <li>Programme</li>
                    </ul>
        </div>
    </div><!-- Position -->
        <div class="container margin_60">
 		<div class="row">
  
           <div class="col-md-9">
                	<div class="box_style_1">
                   	<div class="indent_title_in">
                    <i class="pe-7s-news-paper"></i>
				<h3 id="ug">Undergraduate Programme</h3>
				<p></p>
			</div>
            	<div class="wrapper_indent">
                    <p>Institute offers Four Year Undergraduate degree (B.Tech.) programme in:</p>
                    <ul class="list_style_1">
                        <li>Computer Science &amp; Engineering</li>
                        <li>Electronics &amp; Communication Engineering</li>
                        <li>Design</li>
                        <li>Mechanical Engineering</li>
                    </ul>
                    <p>Emphasis is laid on synthesis, creativity, hands-on experience, innovation, communication and entrepreneurship. Learning is largely based on real-world situation in different sectors. This would bring in the concept of verticals which could be the:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list_style_1">
                                <li>Automobile sector</li>
                                <li>Aerospace and Defence Sector</li>
                                <li>Industrial Machinery Sector</li>
                                <li>Engineering Services Sector</li>
                                <li>High-tech Electronics and</li>
                                <li>Consumer Durables / Life-style Products etc.</li>
                            </ul><p class="add_bottom_30">For each vertical, key industry players would be identified and invited to partner with the Institute for both academic and research activities.</p>
                        </div>
                        <div class="col-md-6">
                            <p><img src="/assets/img/DSCN3172.JPG" alt="" class="img-responsive"></p>
                            
                        </div>
                    </div>
                    
                  
                    </div>
                    <hr class="styled_2">
                    <div class="indent_title_in">
                    <i class="pe-7s-display1"></i>
				<h3 id="pg">Postgraduate Programme</h3>
				<p></p>
			</div>
            	<div class="wrapper_indent">
                <p>Institute offers postgraduate programmes in : </p>
                <div class="row">
                    <div class="col-md-6">
                        <strong>M.Tech.Specializations</strong><br/>
                        <ul class="list_style_1">
                            <li>M.Tech. in Computer Science &amp; Engineering (CSE)</li>
                            <li>M.Tech. in Electronics &amp; Communication Engineering (ECE)</li>
                            <ul>
                                <li>Microwave and COmmunication Engineering</li>
                                <li>Power and Control</li>
                            </ul>
                            <li>M.Tech. in Mechanical Engineering (ME)</li>
                            <ul>
                                <li>CAD / CAM</li>
                                <li>Design</li>
                                <li>Manufacturing</li>
                            </ul>
                            <li>M.Tech. in Mechatronics</li>
                        </ul>
                        <a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>Curriculum M.Tech. Specialization</a>
                    </div>
                    <div class="col-md-6">
                        <strong id="phd">Ph.D</strong><br/>
                        <ul class="list_style_1">
                            <li>Computer Science &amp; Engineering (CSE)</li>
                            <li>Electronics &amp; Communication Engineering (ECE)</li>
                            <li>Mechanical Engineering (ME)</li>
                            <li>Design</li>
                            <li>Natural Sciences (NS)</li>
                        </ul><br/><br/><br/>
                        <strong id="mdes">M.Des.</strong><br/><br/>
                        <a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>Master of Design</a>
                    </div>
                </div>
                    </div>
                    
                    
                    <hr class="styled_2">
                        <div class="indent_title_in">
                    <i class="pe-7s-cloud-download"></i>
				<h3 id="dwld">Downloads</h3>
				<p></p>
			</div>
            	<div class="wrapper_indent">
                <p class="add_bottom_30">Please find the neccessary information below.</p>
                    <div class="row">
                    	<div class="col-md-4 col-sm-4">
                        	<ul class="list-unstyled">
                            	<li><a href="#" class="button_download hvr-sweep-to-right"><i class="pe-7s-map"></i>Prospectus</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                        	<ul class="list-unstyled">
                            	<li><a href="#" class="button_download hvr-sweep-to-right"><i class="pe-7s-menu"></i>List of Masters Students</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-unstyled">
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="pe-7s-menu"></i>List of Phd. Students</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="add_bottom_30">Fee Payment Instruction</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-unstyled">
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="pe-7s-note"></i>Payment Instructions</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="add_bottom_30" id="fee_structure">Fee Structure</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-unstyled">
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>For Phd Students</a></li>
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>For MTech / MDes Stud.</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-unstyled">
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>For B.Tech. 2012 Batch</a></li>
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>For B.Tech. 2014 Batch</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-unstyled">
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>For B.Tech. 2013 Batch</a></li>
                                <li><a href="#" class="button_download hvr-sweep-to-right"><i class="icon-doc"></i>For B.Tech. 2015 Batch</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    
                       
                    </div>
           </div>
           <aside class="col-md-3">
           
            
 
            <hr class="styled">
            <div class="box_side">
                <h5>Student Gymkhana</h5> <i class="icon-cog-alt"></i>
                <p>Students’ Gymkhana is constituted to evolve a disciplined self-governance for carrying out various extracurricular in-campus activities and to establish a responsible and accountable student body.</p> 
                <p><a href="#" class="button small">More Info</a> </p>
            </div>
            <hr class="styled">
            <div class="box_side">
                <h5>Counselling Team</h5> <i class="icon-group"></i>
                <p>Prof. P. N. Kondekar , Head Counseling Service - <a href="">+91-761-2632236</a>
                    <br><strong>Email:</strong><a href="mailto:pnkondekar@iiitdmj.ac.in"> pnkondekar@iiitdmj.ac.in</a></p> 
                <p><a href="#" class="button small">More Info</a> </p>
            </div>        
            <hr class="styled">
            <div class="box_side">
                <h5>Hostels</h5> <i class="icon-home-4  "></i>
                <p>IIITDM Jabalpur is a fully residential campus. All the students are required to be resident of Institute hostels.</p> 
                <p><a href="#" class="button small">More Info</a> </p>
            </div>           
           		
                 
           			      
           </aside>
            </div><!--End row -->
        </div><!--End container -->
        </div><!--End container_gray_bg -->

@endsection