@extends('layouts.app')

@section('content')

<style type="text/css">
.list_courses_tabs ul li
{
    border-bottom: 1px solid #dbdbdb;;
}
.list_courses_tabs ul li:hover
{
    background-color: #E9E9E9;
}
.item blockquote
{
    font-size: 24px;
}
.tabs
{
    box-shadow: 8px 8px 5px 0px #888888;
}
.tabs nav a
{
    line-height: 50px;
}
.main_title1:hover h2,.main_title1:hover p{
    color: #1853BF !important;
}

</style>

    <div id="full-slider-wrapper" style="border-top: 1px solid rgb(16, 34, 104) !important;border-bottom: 4px solid rgba(0, 0, 0, 0.23) !important;">
    <div id="layerslider" style="width:100%;height:440px;">
        <!-- first slide -->
        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img src="/img/slides/11.jpg" class="ls-bg" alt="Slide background">
           
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l"  style="color:#fff;font-family: 'Canterell',sans-serif;line-height: 60px;font-size: 26px;padding: 0em 0.9em ;width: 22%;top: 62%; left:20px; background:rgb(134, 28, 54);" data-ls="durationin:500;delayin:200;easingin:slide-in;"><h3  ><strong>Campus</strong></h3></a></p>
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l" style="line-height: 24px;font-size: 15px;padding: 0.6em 1.6em ; width: 15%;top: 76%; left:20px; color:rgb(134, 28, 54);background: rgba(245, 245, 245,0.86) none repeat scroll 0% 0%;" data-ls="durationin:500;delayin:200;easingin:slide-in;">Build future at IIITDMJ<img src="/img/tour/video_icon1.png" class="ls-sm" width="20px" height="12px" style="float: right;padding-top: 0.4em;"/></a></p>
            
         </div>
       
        <!-- second slide -->
    <div class="ls-slide" data-ls="slidedelay:5000; transition2d:5;" >
             <img src="/img/slides/2.jpg" class="ls-bg" alt="Slide background">
            
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l"  style="color:#fff;font-family: 'Canterell',sans-serif;line-height: 60px;font-size: 26px;padding: 0em 0.9em ;width: 22%;top: 62%; left:20px; background:rgb(44, 120, 26);" data-ls="durationin:500;delayin:200;easingin:slide-in;"><h3  ><strong>Core Lab Complex</strong></h3></a></p>
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college_tour" class="ls-l" style="line-height: 24px;font-size: 15px;padding: 0.6em 1.6em ; width: 15%;top: 76%; left:20px; color:rgb(44, 120, 26);background: rgba(245, 245, 245,0.86) none repeat scroll 0% 0%;" data-ls="durationin:500;delayin:200;easingin:slide-in;">Hands on experience<img src="/img/tour/video_icon2.png" class="ls-sm" width="20px" height="12px" style="float: right;padding-top: 0.4em;"/></a></p>
            
    </div>
    
     <!-- third slide -->
     
      <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img  src="/img/slides/9.jpg" class="ls-bg" alt="Slide background">
            
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l"  style="color:#fff;font-family: 'Canterell',sans-serif;line-height: 60px;font-size: 26px;padding: 0em 0.9em ;width: 22%;top: 62%; left:20px; background:rgb(189, 138, 18);" data-ls="durationin:500;delayin:200;easingin:slide-in;"><h3  ><strong>Jagriti</strong></h3></a></p>
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/jagriti-tour" class="ls-l" style="line-height: 24px;font-size: 15px;padding: 0.6em 1.6em ; width: 15%;top: 76%; left:20px; color:rgb(189, 138, 18);background: rgba(245, 245, 245,0.86) none repeat scroll 0% 0%;" data-ls="durationin:500;delayin:200;easingin:slide-in;">An initiative by IIITians<img src="/img/tour/video_icon9.png" class="ls-sm" width="20px" height="12px" style="float: right;padding-top: 0.4em;"/></a></p>
            
      </div>
    
    <!-- fourth slide -->
   <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
        <img src="/img/slides/4.jpg" class="ls-bg" alt="Slide background">
            
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l"  style="color:#fff;font-family: 'Canterell',sans-serif;line-height: 60px;font-size: 26px;padding: 0em 0.9em ;width: 22%;top: 62%; left:20px; background:rgb(104, 20, 9);" data-ls="durationin:500;delayin:200;easingin:slide-in;"><h3  ><strong>Convocation</strong></h3></a></p>
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l" style="line-height: 24px;font-size: 15px;padding: 0.6em 1.6em ; width: 15%;top: 76%; left:20px; color:rgb(104, 20, 9);background: rgba(245, 245, 245,0.86) none repeat scroll 0% 0%;" data-ls="durationin:500;delayin:200;easingin:slide-in;">Fulfilling Aspirations <img src="/img/tour/video_icon4.png" class="ls-sm" width="20px" height="12px" style="float: right;padding-top: 0.4em;"/></a></p>
            
     </div>
      <!-- fifth slide -->
   <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
        <img src="/img/slides/10.jpg" class="ls-bg" alt="Slide background">
            
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l"  style="color:#fff;font-family: 'Canterell',sans-serif;line-height: 60px;font-size: 26px;padding: 0em 0.9em ;width: 22%;top: 62%; left:20px; background:rgb(104, 20, 9);" data-ls="durationin:500;delayin:200;easingin:slide-in;"><h3  ><strong>Convocation</strong></h3></a></p>
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l" style="line-height: 24px;font-size: 15px;padding: 0.6em 1.6em ; width: 15%;top: 76%; left:20px; color:rgb(104, 20, 9);background: rgba(245, 245, 245,0.86) none repeat scroll 0% 0%;" data-ls="durationin:500;delayin:200;easingin:slide-in;">Fulfilling Aspirations <img src="/img/tour/video_icon4.png" class="ls-sm" width="20px" height="12px" style="float: right;padding-top: 0.4em;"/></a></p>
            
     </div>
       <!-- Sixthth slide -->
   <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
        <img src="/img/slides/12.jpg" class="ls-bg" alt="Slide background">
            
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l"  style="color:#fff;font-family: 'Canterell',sans-serif;line-height: 60px;font-size: 26px;padding: 0em 0.9em ;width: 22%;top: 62%; left:20px; background:rgb(104, 20, 9);" data-ls="durationin:500;delayin:200;easingin:slide-in;"><h3  ><strong>Hindi Pakhwada</strong></h3></a></p>
            <p class="ls-l " data-ls="durationin:500;delayin:500;easingin:slide-in;" ><a href="/college-tour" class="ls-l" style="line-height: 24px;font-size: 15px;padding: 0.6em 1.6em ; width: 15%;top: 76%; left:20px; color:rgb(104, 20, 9);background: rgba(245, 245, 245,0.86) none repeat scroll 0% 0%;" data-ls="durationin:500;delayin:200;easingin:slide-in;">September 14-28, 2016 <img src="/img/tour/video_icon4.png" class="ls-sm" width="20px" height="12px" style="float: right;padding-top: 0.4em;"/></a></p>
            
     </div>
    </div>
    </div><!-- End layerslider -->

    
    <div class="container mt60 mb30">

        <div class="row">
            <div class="main_title">
            <h2>Latest Updates</h2>
            <p class="mb0">Get all the latest information here</p>
            </div>
            <div class="col-md-4">
                <div id="tabs" class="tabs">
                    <nav class="text-center">
                        <ul>
                            <li class="box" style="box-shadow:none;margin:0px;color:#fff;border:none;background-color: rgba(35, 62, 117, 0.93);width: 100%;"><a href="/achievement"  class="icon-news" style="color:#fff;"><span>Achievements</span></a></li>
                        </ul>
                    </nav>
                    <div class="content" style="background-color: rgb(236, 236, 236);">
                        <section id="section-1" class="content-current">
                            <div class="list_courses_tabs" >
                                <div class="fix_height scroll">
                                <ul>
                                    <li>
                                    <div><a href="http://site.iiitdmj.ac.in/achievement.php"><figure><img src="/img/bm_ach.jpg" alt="" class="img-rounded"></figure>
                                    <h3> Achievement of Dr Biswajeet Mukherjee</h3><small>Oct 24-25, 2016</small></a></div>
                                    </li>
                                  
                                    <li>
                                    <div><a href="http://site.iiitdmj.ac.in/achievement.php"><figure><img src="/img/default_ach.jpg" alt="" class="img-rounded"></figure>
                                    <h3>Miss Ila Sharma and Nikhil Agrawal awarded for best paper</h3><small>ICONSIP 2016</small></a></div>
                                    </li>
                                      <li><div><a href="http://site.iiitdmj.ac.in/achievement.php"><figure><img src="/img/skjain_ach.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>POSOCO Power System Award 2013</strong> </h3><small>PPSA-2013</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://site.iiitdmj.ac.in/achievement.php"><figure><img src="/img/default_ach.jpg" alt="" class="img-rounded"></figure>
                                    <h3>Sweden-India Nobel Memorial Quiz, 2016</h3><small>Qualifying Round, IIM-I</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://site.iiitdmj.ac.in/achievement.php"><figure><img src="/img/default_ach.jpg" alt="" class="img-rounded"></figure>
                                    <h3>MEXT Scholarship: Tokyo Institute of Technology, Japan</h3><small>Mr Siddhartha Kumar (ME)</small></a></div>
                                    </li>
                                   <li></li>
                                </ul>
                                </div>
                                
                                
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="tabs" class="tabs">
                    <nav class="text-center">
                        <ul>
                            <li class="box" style="margin:0px;color:#fff;border:none;"><a href="#section-2" class="icon-events"  style="color:#fff;"><span>News & Events</span></a></li>
                        </ul>
                    </nav>
                    <div class="content" style="background-color: rgb(236, 236, 236);">
                        <section id="section-2" class="content-current">
                            <div class="list_courses_tabs">
                                <div class="fix_height scroll">
                                <ul>
                                 <li><div><a href="http://innsoc2016.iiitdmj.ac.in/index.html"><figure><img src="/img/course_1_thumb.jpg" alt="" class="img-rounded"></figure>
                                    <h3>Workshop on Innovations and the Society 2016</h3><small>December 05-06, 2016</small></a></div>
                                    </li>
                                 <li>
                                    <div><a href="http://dew.iiitdmj.ac.in/"><figure><img src="/img/course_4_thumb.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Design Workshop - </strong>DEW </h3><small>DECEMBER 12 - 13 - 14, 2016</small></a></div>
                                    </li>
                                     <li>
                                    <div><a href="http://ict.iiitdmj.ac.in/adatamining.html"><figure><img src="/img/ICT.jpg" alt="" class="img-rounded"></figure>
                                    <h3>Advanced Data Mining Algorithms and their Scalability for Big Data </h3><small> January 2-7, 2017</small></a></div>
                                    </li>
                                     <li>
                                    <div><a href="http://sc2016.iiitdmj.ac.in/index.html"><figure><img src="/img/NCSC.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Workshop on Smart Cities </strong>2016 </h3><small> November 25-26, 2016</small></a></div>
                                    </li>
                                     <li>
                                    <div><a href="http://tarangfest.org/"><figure><img src="/img/course_5_thumb.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Tarang </strong>2016 </h3><small>Dates announced soon....!</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://amec.iiitdmj.ac.in/index.html"><figure><img src="/img/course_3_thumb.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Workshop on MATLAB</strong> 2017 </h3><small>Dates announced soon....!</small></a></div>
                                    </li>
                                    
                                   
                                   
                                   
                                   
                                    <li>
                                    <div><a href="http://www.iiitdmj.ac.in/yoga.html"><figure><img src="/img/yoga.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Yoga Day </strong> celebration</h3><small>Start 21 June 2016</small></a></div>
                                    </li>
                                    <li><div><a href="http://ict.iiitdmj.ac.in/index.html"><figure><img src="/img/ICT.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Electronics and ICT Academy</strong> ICT</h3><small>Inauguration: Aug 01, 2015</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="#"><figure><img src="/img/NSS.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>National Service Scheme</strong> NSS</h3><small>Start  February 2016</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://revista.iiitdmj.ac.in/"><figure><img src="/img/REVISTA.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong> REVISTA- </strong> Issue-III</h3><small>Start 3 October 2015</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://alumni.iiitdmj.ac.in/index.php"><figure><img src="/img/alumni.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Alumni</strong> Meet</h3><small>Start 25th-26th December 2015</small></a></div>
                                    </li>
                                    <li></li>
                                </ul>
                                </div>
                                
                                
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="tabs" class="tabs">
                    <nav class="text-center">
                        <ul>
                            <li class="box" style="margin:0px;color:#fff;border:none;"><a href="#section-3" class="icon-notices"  style="color:#fff;"><span>Notices</span></a></li>
                        </ul>
                    </nav>
                    <div class="content" style="background-color: rgb(236, 236, 236);">
                        <section id="section-3" class="content-current">
                            <div class="list_courses_tabs">
                                <div class="fix_height scroll">
                                <ul>
                                    <li><div><a href="http://www.iiitdmj.ac.in/Admission/postgraduate.html"><figure><img src="/img/default_notice.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Admission</strong> M.Des. & Ph.D.</h3>
                                    <small>2017 (January Session)</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://www.iiitdmj.ac.in/pv.html"><figure><img src="/img/default_notice.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>JRF / SRF </strong>Vacancy </h3><small>Project Vacancies 2016</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://ict.iiitdmj.ac.in/career.html"><figure><img src="/img/default_notice.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Vacancy </strong>in Electronics and ICT Academy</h3><small>Last date December 5, 2016</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://www.iiitdmj.ac.in/nagarnigam_exam2015.html"><figure><img src="/img/nnj.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Nagar Nigam  </strong> Exam</h3><small>Exam date 31st Jan 2016</small></a></div>
                                    </li>
                                    <li>
                                    <div><a href="http://www.iiitdmj.ac.in/Faculty_Positions.html"><figure><img src="/img/default_notice.jpg" alt="" class="img-rounded"></figure>
                                    <h3><strong>Advertisement for </strong> Faculty Positions</h3><small>Advertisement No.1/2016</small></a></div>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                                </div> 
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    
    <!-- <div class="container mt60 mb30">
        <div class="row">
            <div class="col-md-6">
                <div id="tabs" class="tabs">
                    <nav class="text-center">
                        <ul>
                            <li class="box" style="margin:0px;color:#fff;border:none;background:rgba(96, 103, 96, 0.93);height: 40px;"><a href="#section-3" class="icon-speech"  style="color:#fff;"><span>Director's Desk</span></a></li>
                        </ul>
                    </nav>
                    <div id="scroll1" style="height:188px;overflow:hidden;">
                    <div class="col-md-4">
                    <img class="img-rounded" width="150" height="150" src="/assets/img/faculty/PKJain-IITR-Photo.jpg">
                    </div>
                    <div class="col-md-8">
                    <p><strong>Prof. Pramod Kumar Jain</strong><br />
                    It gives me immense pride and pleasure in introducing to you PDPM-IIITDM Jabalpur as an edifying Institute in empowering young minds. This is a class of highly accomplished individuals, with exceptional technical and leadership abilities. 
                    </p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="tabs" class="tabs">
                    <nav class="text-center">
                        <ul>
                            <li class="box" style="margin:0px;color:#fff;border:none;background:rgba(96, 103, 96, 0.93);height: 40px;"><a href="#section-3" class="icon-speech"  style="color:#fff;"><span>Message From Chairman</span></a></li>
                        </ul>
                    </nav>
                    <div id="scroll1" style="height:188px;overflow:hidden;">
                    <div class="col-md-4">
                    <img class="img-rounded" width="150" height="150" src="/assets/img/faculty/chairman.jpg">
                    </div>
                    <div class="col-md-8">
                    <p><strong>Dr. Kota Harinarayana</strong><br />
                    My congratulations to students who are participating. You have gone through your respective courses of studies and have been adjudged to be worthy. You are now ready to face the exciting world out there. As always, we look forward to enhance our capabilities.
                    </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
   <div class="bg_content testimonials">
              <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class=""></li>
                            <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
                            <li data-target="#quote-carousel" data-slide-to="2" class="active"></li>
                        </ol><!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item">
                                <blockquote>
                                    <p>
                                        I received an academically rich environment with a zeal to innovate all around. 
Had an amazing internship experience thanks to the college.
With such diversity in IIITDMJ, one feels really special
to witness self growth alongwith the growth of this mighty institution.
                                    </p>
                                </blockquote>
                               <small>
                                    <div><img class="img-circle" src="/img/vibhor.jpg" alt="vibhor_shukla">
                                    </div>
                                    <div>Vibhor Shukla<br/><text style="font-size:12px;">BTech 2012</text>
                                    </div>
                                </small>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <p>
                                        Great place to learn, experiment and discover our true potential, with motivating faculty, students and culture.
                                        Thank you IIITDM, it's been truly an enlightening and a joyful journey.
                                    </p>
                                </blockquote>
                                <small>
                                    <div><img class="img-circle" src="/img/tarun_bhatia_2012028.jpg" alt="vibhor_shukla">
                                    </div>
                                    <div>Tarun Bhatia <br/><text style="font-size:12px;">BTech 2012</text>
                                    </div>
                                </small>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item active">
                                <blockquote>
                                    <p>
                                         Great memories are made here. IIITDM gave me the knowledge I needed to advance my career, as well as the confidence boost I needed to get into the professional world.
                                    </p>
                                </blockquote>
                                <small>
                                    <div><img class="img-circle" src="/img/ankit_sahu_2012028.jpg" alt="">
                                    </div>
                                    <div>Ankit Kumar Sahu <br/><text style="font-size:12px;">BTech 2012</text>
                                    </div>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End bg_content -->

<!-- <div style="width: 100%; background-color: rgba(237, 237, 237, 0.9); margin-bottom: 50px;"> -->
    <div class="container mb60 mt60">
    <div class="main_title">
    <h2>IIITDMJ feautures</h2>
    <p>Take a deep insight</p>
    </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class="pe-7s-culture"></i>
                    <h3><a href="http://site.iiitdmj.ac.in/students/activities.php">Student Campus Life</a></h3>
                    <p align="justify">IIITDMJ emphasizes on several extra-curricular activities in addition to its rigorous academic programme. Institute is in the growing stage, Football ground, Volleyball court, basketball court and tennis court at the institute premises. IIITDMJ students have formed various clubs under Students Gymkhana, which organises various cultural, sports and activities.<br /><a href="http://site.iiitdmj.ac.in/students/activities.php">More..</a></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class="pe-7s-light"></i>
                    <h3><a href="http://site.iiitdmj.ac.in/research/research.php">Innovation Highlights</a></h3>
                    <p align="justify">The discoveries at IIITDMJ in fundamental and applied sciences act as a trigger. There is creative use of the new knowledge. The innovation highlights showcase the usefulness of the research done at IIITDMJ.<br /><a href="http://site.iiitdmj.ac.in/research/research.php">More..</a></p>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class="pe-7s-config"></i>
                    <h3><a href="http://abhikalpan.org/index.php">Abhikalpan 2016</a></h3>
                    <p align="justify">Abhikalpan, the annual technical festival of IIITDM Jabalpur was brought into action in 2006 with an aim to promote innovative technical excellence and organisational proficieny.<br /><a href="http://abhikalpan.org/index.php">More..</a></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class="pe-7s-ball"></i>
                    <h3><a href="http://ict.iiitdmj.ac.in/index.html">Electronics and ICT Academy </a></h3>
                    <p align="justify">Department of Electronics and Information Technology, Government of India has instituted four Electronics and ICT Academies with one academy at IIITDM Jabalpur with the primary objective preparing manpower for two important missions - 'Digital India' and 'Make in India'.<br /><a href="http://ict.iiitdmj.ac.in/index.html">More..</a></p>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class="pe-7s-news-paper"></i>
                    <h3><a href="">Certificate Course in Japanese Language</a></h3>
                    <p align="justify">Institute is offering Japanese Classes for Certificate Course in Japanese Language to all students of PDPM IIITDM, Jabalpur. Faculty members, officers and Staff may also join this course.<br /><a href="#">More..</a>
</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class="pe-7s-usb"></i>
                    <h3><a href="http://site.iiitdmj.ac.in/research/research.php">Research</a></h3>
                    <p align="justify">IIITDM Jabalpur was established to foster the research and development activities in the areas of: IT enabled design and manufacturing, and Design of IT systems to meet the growing demands of the Indian industries.<br /><a href="http://site.iiitdmj.ac.in/research/research.php">More..</a></p>
                </div>
            </div>
        </div><!-- End row -->
        
    </div><!-- End container -->
<!-- </div> -->

<div style="width: 100%;background-color: rgb(236, 236, 236);padding-bottom: 175px;padding-top: 50px;">
    <div id="home_feat_1 mt30">
    <div class="container">
        <div class="main_title mb0">
                <h2>Focus on</h2>
                <p class="mb0">Know more about IIITDMJ</p>
                </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                 <div class="home_feat_1_box">
                        <a href="http://site.iiitdmj.ac.in/students/activities.php">
                        <img src="/img/home_feat_1_1.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Student's Life</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
            </div>
            <div class="col-md-3 col-sm-3">
           <div class="home_feat_1_box">
                        <a href="http://alumni.iiitdmj.ac.in/index.php">
                        <img src="/img/home_feat_1_2.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Alumni</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
            </div>
            <div class="col-md-3 col-sm-3">
           <div class="home_feat_1_box">
                        <a href="research/research.php">
                        <img src="/img/home_feat_1_3.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Research</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
            </div>
            <div class="col-md-3 col-sm-3">
           <div class="home_feat_1_box">
                        <a href="http://placement.iiitdmj.ac.in/">
                        <img src="/img/home_feat_1_4.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Placements</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
</div>
    <!-- <div style="margin-top: 10%; width: 100%; background-color: rgba(237, 237, 237, 0.9); height: 80%; padding-bottom: 120px;"> -->
    <div class="container mt90" style="padding-top: 65px;padding-bottom: 80px;width:100%;">
        
        <section class="grid">
            <div class="container">
            <div class="main_title1 main_title">
                <a href="/collaborators">
                <h2>International Relations</h2>
                <p>Collaboration with JAPAN</p>
            </a>
                </div>
                    <div class="row">
                    <ul class="magnific-gallery">
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_10.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_10.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="icon_search"></i>
                                        <p>&nbsp;</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_8.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_8.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="icon_search"></i>
                                        <p>&nbsp;</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_6.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_6.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="icon_search"></i>
                                        <p>&nbsp;</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_7.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_7.jpg" title="Photo title" data-effect="mfp-move-horizontal">
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
            </div>

          <br/>
    <!-- </div> -->
        <div class="container mt90" style="width:100%;background-color: rgb(236, 236, 236);padding-top: 65px;padding-bottom:120px" >
        
        <section class="grid">
            <div class="container">
            <div class="main_title1 main_title">
                <a href="inst_activities/activities.php">
                <h2>Glimpse of the institute activities</h2>
                <p>Students/Events/Visits</p>
                 </a>
                </div>
                    <div class="row">
                    <ul class="magnific-gallery" >

                        <li>
                            <figure>
                                <img id="img1" src="/assets/img/5.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a id="open1" href="/assets/img/large/5.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="icon_search"></i>
                                        <p>&nbsp;</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                
                        <li>
                            <figure>
                                <img id="img2" src="/assets/img/6.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a id="open2" href="/assets/img/large/6.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="icon_search"></i>
                                        <p>&nbsp;</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img  id="img3" src="/assets/img/7.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a  id="open3" href="/assets/img/large/7.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="icon_search"></i>
                                        <p>&nbsp;</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img  id="img4" src="/assets/img/8.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a id="open4" href="/assets/img/large/8.jpg" title="Photo title" data-effect="mfp-move-horizontal">
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
            </div>
    <div class="bg_content magnific" style="height:500px;">
            <div>
                <h3>Student Design Challenge</h3>
                <p>
                     Brought to you by Design discipline of IIITDM Jabalpur.
                </p>
                <a href="/video/student.mp4" class="video_pop"><i class="arrow_triangle-right_alt2"></i></a>
            </div>
        </div><!-- End bg_content -->
    <!-- </div> -->
      

@endsection
