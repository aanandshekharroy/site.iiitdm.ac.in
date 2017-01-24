@extends('layouts.app')

@section('content')
<div class="sub_header bg_1">
            <div id="intro_txt" class="animated fadeInDown">
            <h1>Academic <strong>Calendar</strong></h1>
            <p>Stay up-to-date</p>
            </div>
        </div> <!--End sub_header -->
 
        <div class="container_gray_bg">
        <div id="position">
        <div class="container">
                    <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Academics</a></li>
                    <li>Calendar</li>
                    </ul>
        </div>
    </div><!-- Position -->
        <div class="container margin_60">
        <div class="row">
  
           <div class="col-md-9">
                    <div class="box_style_1">
                    <div class="indent_title_in">
                    <i class="icon-calendar-3"></i>
                <h3 id="ug">Academic Calendar 2015-2016</h3>
                <p></p>
            </div>
                <div class="wrapper_indent">
                                        <table class="table table-bordered">
                                                 
                                             <tr bgcolor="#666666" style="font-weight:bold;color:#FFFFFF;">
                                               <td>Events</td>
                                               <td>I Semester 2015- 2016</td>
                                               <td>II Semester 2015- 2016</td>
                                             </tr>
                                             <tr>
                                               <td>Pre-Registration</td>
                                               <td>Mar 30 - Apr 03, 2015 (Mon-Fri)</td>
                                               <td>Nov 02 - 06,    2015 (Mon-Fri)</td>
                                             </tr>
                                             <tr>
                                               <td rowspan="8">Physical Reporting at the    Institute</td>
                                               <td>May 18, 2015(Mon)</td>
                                               <td rowspan="8">January 04, 2016 (Mon)</td>
                                             </tr>
                                             <tr>
                                               <td>4th&nbsp;Yr&nbsp;UG    Students (Internal PBI)</td>
                                             </tr>
                                             <tr>
                                               <td>July 27,    2015 (Mon)</td>
                                             </tr>
                                             <tr>
                                               <td>2nd&nbsp;Yr&nbsp;UG    Students</td>
                                             </tr>
                                             <tr>
                                               <td>3rd&nbsp;Yr&nbsp;UG    Students and</td>
                                             </tr>
                                             <tr>
                                               <td>all old    PG students</td>
                                             </tr>
                                             <tr>
                                               <td>New PG    Students - July 24, 2015 (Fri)</td>
                                             </tr>
                                             <tr>
                                               <td>New UG    Students -Based on CSAB schedule</td>
                                             </tr>
                                             <tr>
                                               <td rowspan="2" height="65">Orientation of new students</td>
                                               <td>New UG Students - Based on CSAB    Schedule</td>
                                               <td rowspan="2"> ----  </td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">New PG    Students - July 24-28, 2015</td>
                                             </tr>
                                             <tr height="22">
                                               <td rowspan="3" height="66">Commencement of Classes</td>
                                               <td>4th&nbsp;Yr&nbsp;UG Students    (PBI)</td>
                                               <td rowspan="3">Jan 04, 2016 (Mon)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">May 19,    2015 (Mon)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">All    other students: July 29 2015(Wed)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Late    physical reporting*</td>
                                               <td>Aug 03, 2015 (Mon)</td>
                                               <td>Jan 11, 2016    (Mon)</td>
                                             </tr>
                                             <tr height="22">
                                               <td rowspan="4" height="88">Last Date for Adding</td>
                                               <td>NPTEL Course</td>
                                               <td rowspan="4">Jan 18, 2016 (Mon)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">June 01,    2015 (Mon)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">All    other cases</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Aug 10,    2015 (Mon)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Last    Date for Dropping</td>
                                               <td>Nov 14, 2015 (Fri)</td>
                                               <td>April 22, 2016    (Fri)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Last    Date for Document Submission</td>
                                               <td>Sep 24, 2015 (Thu)</td>
                                               <td>Feb 05, 2016    (Fri)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Mid-Semester    Examinations</td>
                                               <td>Sep 14-19, 2015 (Mon-Sat)</td>
                                               <td>Feb 29 - Mar 05,    2016 (Mon-Sat)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Mid-Semester    Recess</td>
                                               <td>Oct 17-25, 2015 (Sat-Sun)</td>
                                               <td>Mar 19 - 27,    2016 (Sat-Sun)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Classes    End</td>
                                               <td>Nov 20, 2015 (Fri)</td>
                                               <td>April 29, 2016    (Fri)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">End-Semester    Examinations</td>
                                               <td>Nov 23–28, 2015(Mon-Sat)</td>
                                               <td>May 02-07, 2016 (Mon-Sat)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Make-up    Examinations</td>
                                               <td>Dec 03-05, 2015 (Thu-Sat)</td>
                                               <td>May 12-14, 2016 (Thu - Sat)</td>
                                             </tr>
                                             <tr height="61">
                                               <td height="61">Last    Date for showing answer sheets to students and display of compiled marks (of    the full semester)**</td>
                                               <td>Dec 02, 2015 (Wed)</td>
                                               <td>May 11, 2016 (Wed)</td>
                                             </tr>
                                             <tr height="41">
                                               <td height="41">Last    Date of End Semester Grades Submission</td>
                                               <td>Dec 03, 2015 (Thu)</td>
                                               <td>May 12, 2016 (Thu)</td>
                                             </tr>
                                             <tr height="41">
                                               <td height="41">Last    Date for submission of course file to academic section</td>
                                               <td>Dec 11, 2015 (Fri)</td>
                                               <td>May 20, 2016 (Fri)</td>
                                             </tr>
                                             <tr height="61">
                                               <td height="61">Last    Date for Grades Submission of Make-up Exams &amp; Conversion of I Grades</td>
                                               <td>Dec 07, 2015 (Mon)</td>
                                               <td>May 16, 2016 (Mon)</td>
                                             </tr>
                                             <tr height="20">
                                               <td rowspan="3" height="61">Last date of verification of    grades</td>
                                               <td rowspan="3">Dec 21, 2015&nbsp;&nbsp;(Mon)</td>
                                               <td rowspan="3">July 18, 2016     (Mon)</td>
                                             </tr>
                                             <tr height="20"> </tr>
                                             <tr height="21"> </tr>
                                             <tr height="22">
                                               <td height="22">Last    date for Authentication of Grades</td>
                                               <td>Dec 28, 2015 (Mon)</td>
                                               <td>July 28,  2016 (Thu)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Vacation    for UG students</td>
                                               <td>Dec 04 - 29,    2015&nbsp;&nbsp;(Fri-Tue)</td>
                                               <td>May 04 - July 31, 2016 (Wed -    Sun)</td>
                                             </tr>
                                             <tr height="41">
                                               <td height="41">Academic    Pre-Registration for next semester</td>
                                               <td>Nov 02 - 06, 2015 (Mon-Fri)</td>
                                               <td>Apr 04 - 08, 2016 (Mon-Fri)</td>
                                             </tr>
                                             <tr height="22">
                                               <td height="22">Summer    Term</td>
                                               <td>--</td>
                                               <td> --- </td>
                                             </tr>
                                        </table>
                                        <strong>
                                        <p>*&nbsp;Late physical reporting is allowed only in exceptional cases with prior permission</p>
                                        <p>**&nbsp;In case examination is held on Saturday, last date for displaying compiled marks and grade submission will be the same.</p>
                                        <p>Note: No classes/ term paper presentation/ lab exam/ project presentation to be scheduled on two days prior to end sem exam.</p>
                                        </strong>
                    
                    </div> 

            <hr class="styled_2">
                        <div class="indent_title_in">
                    <i class="icon-calendar-3"></i>
                <h3 id="pbi_cal">Calendar of PBI 2015</h3>
                <p></p>
            </div>
                <div class="wrapper_indent">
                <table class="table table-bordered">
                                          <tr>
                                            <td class="distinct"><strong>Reviews</strong></td>
                                            <td class="distinct"><strong>Last Date of report submission of by the student</strong> </p></td>
                                            <td class="distinct"><strong>Last Date of mark submission of by the Supervisor(s) / Evaluation Board</strong></p></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Interim Review-I</strong></td>
                                            <td>July 03, 2015 (Friday)</td>
                                            <td>July 10, 2015 (Friday)</td>
                                          </tr>
                                          <tr>
                                            <td><strong>Mid Term Review</strong></td>
                                            <td>August 17, 2015 (Monday)</td>
                                            <td>August 21, 2015 (Friday)</td>
                                          </tr>
                                          <tr>
                                            <td><strong>Interim Review II</strong></td>
                                            <td>October 03, 2015 (Friday)</td>
                                            <td>October 09, 2015 (Friday)</td>
                                          </tr>
                                          <tr>
                                            <td><strong>End Term Review</strong> </p></td>
                                            <td><strong>Report:</strong> November 13, 2015 (Friday)<br />
                                                    <strong>Presentation:</strong> November 16 - 25, 2015 (Monday-Wednesday)</td>
                                            <td>November    27, 2015</td>
                                          </tr> 
                                        </table>
                                        <p align="left"><strong><u>15 day reports</u></strong></p>
                                        <table class="table table-bordered">
                                          <tr>
                                            <td class="distinct">
                                                <strong>15 day reports</strong>
                                            </td>
                                            <td class="distinct"><strong>Last Date of report submission of by the student</strong></td>
                                            <td class="distinct"><strong>15 day reports</strong></td>
                                            <td class="distinct"><strong>Last Date of report submission of by the student</strong></td>
                                          </tr>
                                          <tr>
                                            <td><strong>1st</strong></td>
                                            <td>June 10, 2015 (Wednesday)</td>
                                            <td><strong>5th</strong></td>
                                            <td>September 02, 2015 (Wednesday)</td>
                                          </tr>
                                          <tr>
                                            <td><strong>2nd</strong></td>
                                            <td>June 26, 2015 (Thursday)</td>
                                            <td><strong>6th</strong></td>
                                            <td>September 18, 2015 (Friday)</td>
                                          </tr>
                                          <tr>
                                            <td><strong>3rd</strong></td>
                                            <td>July 17, 2015 (Friday)</td>
                                            <td><strong>7th</strong></td>
                                            <td>October 16, 2015 (Friday)</td>
                                          </tr>
                                          <tr>
                                            <td><strong>4th</strong></td>
                                            <td>August 03, 2015 (Monday)</td>
                                            <td><strong>8th</strong></td>
                                            <td>October 30, 2015 (Friday)</td>
                                          </tr>
                                        </table>
                    
                    
                    </div>

                    <hr class="styled_2">
                    <div class="indent_title_in">
                    <i class="icon-calendar-3"></i>
                <h3 id="fest_cal">Student Festivals</h3>
                <p></p>
            </div>
                <div class="wrapper_indent">
                
                    <table class="table table-bordered">
                                            <tr>
                                                <td class="distinct"></td>
                                                <td class="distinct"></td>
                                                <td class="distinct"></td>
                                                <td class="distinct"></td>
                                            </tr>
                                            <tr>
                                                <td>Tarang </td>
                                                <td>October 10 - 12, 2014 (Fri - Sun)  </td>
                                                <td>TBA</td>
                                                <td>TBA</td>
                                             </tr>
                                             <tr>
                                                <td>Abhikalpan </td>
                                                <td>March 7 - 9, 2014</td>
                                                <td>March 20-22, 2015 (Fri - Sun)</td>
                                                <td>TBA</td>
                                             </tr>
                                             <tr>
                                                <td>Gusto </td>
                                                <td>Jan 31, 2014 to Feb 2nd, 2014</td>
                                                <td>Jan 24-26, 2015 (Sat - Mon)</td>
                                                <td>TBA</td>
                                             </tr>
                                        </table>
                                        <p>TBA: To be announced</p>

                    </div>
                    <hr class="styled_2">
                    <div class="indent_title_in">
                    <i class="icon-calendar-3"></i>
                <h3 id="summer_cal">Calendar for Summer Term 2015</h3>
                <p></p>
            </div>
                <div class="wrapper_indent">
                
                    <table class="table table-bordered">
                                          <tr>
                                            <td class="distinct"></td>
                                            <td class="distinct"></td>
                                          </tr>
                                          <tr>
                                            <td>Physical Reporting, registration and commencement of classes</td>
                                            <td>May 14, 2015 (Thursday)</td>
                                          </tr>
                                          <tr>
                                            <td>Mid Semester Examination</td>
                                            <td>June 20-21,    2015 (Saturday, Sunday)</td>
                                          </tr>
                                          <tr>
                                            <td>Last date for class</td>
                                            <td>July 23, 2015 (Wednesday)</td>
                                          </tr>
                                          <tr>
                                            <td>End Semester Examination</td>
                                            <td><p>July 24-25, 2015 (Thursday- Friday)</td>
                                          </tr>
                                          <tr>
                                            <td>Last Date of End Semester Grades Submission</td>
                                            <td>July 27, 2015 (Monday)</td>
                                          </tr>
                                        </table>

                    </div>
                    
                       
                    </div>
           </div>
           <aside class="col-md-3">
           
            <div class="box_side">
                <h5>Important Points</h5> <i class="icon-key-1"></i>
                <ul class="list_style_1">
                    <li><p>Late physical reporting is allowed only in exceptional cases with prior permission</p></li>
                    <li><p>In case examination is held on Saturday, last date for displaying compiled marks and grade submission will be the same.</p></li>
                </ul>
                <p><strong>Note:</strong> No classes/ term paper presentation/ lab exam/ project presentation to be scheduled on two days prior to end sem exam.</p>
            </div>
            <hr class="styled">
            <div class="box_side">
                <h5>PBI Important dates</h5> <i class="icon-calendar-3"></i>
                <br/>
                <ul class="list_style_1">
                    <li>PBI starts: May 25 2015*</li>
                    <li>Finalization of Topic, Organization, Supervisors: March 16 2015.</li>
                    <li>Modification of Topic, Organization, Supervisors: May 25 2015.</li>
                    <li>Physical Reporting and Registration of at the Institute: May 25, 2015</li>
                    <li>Late Physical Reporting: June 01, 2015**</li>
                    <br/>
                    <p><strong>Note:</strong></p>
                    <li><p>One can start External PBI in between May 02, 2015 to May 25, 2015.  However, total period of the PBI should be at least 25 weeks.</p></li>
                    <li>In case of external PBI, if PBI starts on  or before May 25, 2015, the student can finish the registration/physical  reporting before leaving the campus</p></li>
                </ul>
            </div>        
             
           </aside>
            </div><!--End row -->
        </div><!--End container -->
        </div><!--End container_gray_bg -->
  
@endsection