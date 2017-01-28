@extends('layouts.app')

@section('content')
<style type="text/css">
.tabs nav li.tab-current::before, .tabs nav li.tab-current::after
{
    height: 0px;
}
.tabs nav a
{
    color: #636363;
    font-size: 16px;
    line-height: 1.5;
    padding: 0.1em 1.0em;
}
.tabs nav a:hover
{
    color: #363636;
}
.tabs nav ul li
{
    border: 1px solid #b3bdc3;
    margin-right: .5em;
    display: block;
    float: left;
    position: relative;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.tabs nav li.tab-current
{
    border: 1px solid #848484;
    box-shadow: inset 0 3px #848484;
    z-index: 1;
}
</style>
        <div class="sub_header faculty">
            <div id="intro_txt" class="animated fadeInDown">
            <h1> <strong>Faculty Team </strong>of IIITDM</h1>
            <p>Eminent Professors</p>
            </div>
        </div> <!--End sub_header -->


        <div class="container_gray_bg">        
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Faculty</li>
                </ul>
            </div>
        </div><!-- Position -->
 
        <div class="container_gray_bg">
        <div class="container margin_60">
            <div id="tabs" class="tabs">
                    <nav>
                        <ul>
                            <li class="tab-current"><a href="#section-1" ><span>All</span></a></li>
                            <li><a href="#section-2"><span>CSE</span></a></li>
                            <li><a href="#section-3"><span>Design</span></a></li>
                            <li><a href="#section-4"><span>ECE</span></a></li>
                            <li><a href="#section-5"><span>ME</span></a></li>                            
                            <li><a href="#section-6"><span>Natural Science</span></a></li>
                        </ul>
                    </nav>
                     <div class="content">
                      <section class="content-current" id="section-1">    
                        <div class="box_style_1 animated fadeIn" 
                        style="background-color: rgba(246, 246, 246, 0.83);">
                            <div class="row staff">'; 
                                <table id="fac_table1" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>
                                @foreach($users as $user)
                                <div class="col-md-4"><div class="box_style_1">
                                    <p><img src="{{$user->proPic}}" alt="" class="img-circle styled"></p>
                                    <h4>{{$user->name}}</h4>
                                    <p style="margin-bottom:15px;">{{$user->designation}}</p>
                                    <h4 style="font-size:19px;"><small>{{$user->discipline}}</small></h4><br>
                                    <p style="font-size:14px;">{{$user->specialization}}</p>
                                    <a href="/faculty/{{$user->id}}" target="_blank" 
                                    class="button_outline" style="margin-top: 15px;">Profile</a>           
                                       </div></div>
                                @endforeach</td></tr>
                                        </tbody></table><div>';
                         ?>     
                        </div>
                    </section>

                 <section id="section-2">    
                    <div class="box_style_1 animated fadeIn" style="background-color: rgba(246, 246, 246, 0.83);">
                         <?php
                          
                             $qry = 'SELECT * FROM faculty where discipline like (\'%Computer%\') order by name'; 
                                //Execute query 
                                $result = mysqli_query($conn,$qry);
                                $i=0;
                                echo'<div class="row staff">'; 
                                echo '<table id="fac_table2" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>';
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    $row['name']=strtolower($row['name']);
                                    $row['name']=ucwords($row['name']);
                                    echo '<div class="col-md-4"><div class="box_style_1">
                                    <p><img src="../assets/img/faculty/'.$row['photoRef'].'" alt="" class="img-circle styled"></p>
                                    <h4>'.$row['name'].'</h4>
                                    <p style="margin-bottom:15px;">'.$row['post'].'</p>
                                    <h4 style="font-size:19px;"><small>'.$row['discipline'].'</small></h4><br>
                                    <p style="font-size:14px;">'.$row['specialisation'].'</p>
                                    <!--ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-google"></i></a></li>
                                        <li><a href="#"><i class="icon-email"></i></a></li>
                                    </ul-->    
                                    
                                   
                                    <a href="facdetail.php?id='.$row['idfaculty'].'" class="button_outline" style="margin-top: 15px;">Profile</a>           
                                       </div></div>'; 
                                    $i=$i+1;
                                    if($i>=3)
                                    {
                                        $i=0;
                                        echo '</td><tr><td>';
                                    }
                                }
                                echo '</td></tr>
                                        </tbody></table><div>';
             ?>     
                    </div>
                </section>

                <section id="section-3">    
                    <div class="box_style_1 animated fadeIn" style="background-color: rgba(246, 246, 246, 0.83);">
                         <?php
                          
                             $qry = 'SELECT * FROM faculty  where discipline like (\'%Design%\') order by name'; 
                                //Execute query 
                                $result = mysqli_query($conn,$qry);
                                $i=0;
                                echo'<div class="row staff">'; 
                                echo '<table id="fac_table5" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>';
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    $row['name']=strtolower($row['name']);
                                    $row['name']=ucwords($row['name']);
                                    echo '<div class="col-md-4"><div class="box_style_1">
                                    <p><img src="../assets/img/faculty/'.$row['photoRef'].'" alt="" class="img-circle styled"></p>
                                    <h4>'.$row['name'].'</h4>
                                    <p style="margin-bottom:15px;">'.$row['post'].'</p>
                                    <h4 style="font-size:19px;"><small>'.$row['discipline'].'</small></h4><br>
                                    <p style="font-size:14px;">'.$row['specialisation'].'</p>
                                    <!--ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-google"></i></a></li>
                                        <li><a href="#"><i class="icon-email"></i></a></li>
                                    </ul-->    
                                    
                                   
                                    <a href="facdetail.php?id='.$row['idfaculty'].'" class="button_outline" style="margin-top: 15px;">Profile</a>           
                                       </div></div>'; 
                                    $i=$i+1;
                                    if($i>=3)
                                    {
                                        $i=0;
                                        echo '</td><tr><td>';
                                    }
                                }
                                echo '</td></tr>
                                        </tbody></table><div>';
             ?>     
                    </div>
                </section>

                 <section id="section-4">    
                        <div class="box_style_1 animated fadeIn" style="background-color: rgba(246, 246, 246, 0.83);">
                             <?php
                          
                             $qry = 'SELECT * FROM faculty where discipline like (\'%Electronics%\') order by name'; 
                                //Execute query 
                                $result = mysqli_query($conn,$qry);
                                $i=0;
                                echo'<div class="row staff">'; 
                                echo '<table id="fac_table3" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>';
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    $row['name']=strtolower($row['name']);
                                    $row['name']=ucwords($row['name']);
                                    echo '<div class="col-md-4"><div class="box_style_1">
                                    <p><img src="../assets/img/faculty/'.$row['photoRef'].'" alt="" class="img-circle styled"></p>
                                    <h4>'.$row['name'].'</h4>
                                    <p style="margin-bottom:15px;">'.$row['post'].'</p>
                                    <h4 style="font-size:19px;"><small>'.$row['discipline'].'</small></h4><br>
                                    <p style="font-size:14px;">'.$row['specialisation'].'</p>
                                    <!--ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-google"></i></a></li>
                                        <li><a href="#"><i class="icon-email"></i></a></li>
                                    </ul-->    
                                    
                                   
                                    <a href="facdetail.php?id='.$row['idfaculty'].'" class="button_outline" style="margin-top: 15px;">Profile</a>           
                                       </div></div>'; 
                                    $i=$i+1;
                                    if($i>=3)
                                    {
                                        $i=0;
                                        echo '</td><tr><td>';
                                    }
                                }
                                echo '</td></tr>
                                        </tbody></table><div>';
             ?>     
                    </div>
                </section>


  
           <section id="section-5">    
                    <div class="box_style_1 animated fadeIn" style="background-color: rgba(246, 246, 246, 0.83);">
                         <?php
                          
                             $qry = 'SELECT * FROM  faculty where discipline like (\'%mechanical%\') order by name'; 
                                //Execute query 
                                $result = mysqli_query($conn,$qry);
                                $i=0;
                                echo'<div class="row staff">'; 
                                echo '<table id="fac_table4" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>';
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    $row['name']=strtolower($row['name']);
                                    $row['name']=ucwords($row['name']);
                                    echo '<div class="col-md-4"><div class="box_style_1">
                                    <p><img src="../assets/img/faculty/'.$row['photoRef'].'" alt="" class="img-circle styled"></p>
                                    <h4>'.$row['name'].'</h4>
                                    <p style="margin-bottom:15px;">'.$row['post'].'</p>
                                    <h4 style="font-size:19px;"><small>'.$row['discipline'].'</small></h4><br>
                                    <p style="font-size:14px;">'.$row['specialisation'].'</p>
                                    <!--ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-google"></i></a></li>
                                        <li><a href="#"><i class="icon-email"></i></a></li>
                                    </ul-->    
                                    
                                   
                                    <a href="facdetail.php?id='.$row['idfaculty'].'" class="button_outline" style="margin-top: 15px;">Profile</a>           
                                       </div></div>'; 
                                    $i=$i+1;
                                    if($i>=3)
                                    {
                                        $i=0;
                                        echo '</td><tr><td>';
                                    }
                                }
                                echo '</td></tr>
                                        </tbody></table><div>';
             ?>     
                    </div>
                </section>

                 

                 <section id="section-6">    
                    <div class="box_style_1 animated fadeIn" style="background-color: rgba(246, 246, 246, 0.83);">
                         <?php
                          
                             $qry = 'SELECT * FROM faculty  where discipline like \'%Physics%\' or discipline like \'%Math%\' order by name'; 
                                //Execute query 
                                $result = mysqli_query($conn,$qry);
                                $i=0;
                                echo'<div class="row staff">'; 
                                echo '<table id="fac_table6" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>';
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                    $row['name']=strtolower($row['name']);
                                    $row['name']=ucwords($row['name']);
                                    echo '<div class="col-md-4"><div class="box_style_1">
                                    <p><img src="../assets/img/faculty/'.$row['photoRef'].'" alt="" class="img-circle styled"></p>
                                    <h4>'.$row['name'].'</h4>
                                    <p style="margin-bottom:15px;">'.$row['post'].'</p>
                                    <h4 style="font-size:19px;"><small>'.$row['discipline'].'</small></h4><br>
                                    <p style="font-size:14px;">'.$row['specialisation'].'</p>
                                    <!--ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-google"></i></a></li>
                                        <li><a href="#"><i class="icon-email"></i></a></li>
                                    </ul-->    
                                    
                                   
                                    <a href="facdetail.php?id='.$row['idfaculty'].'" class="button_outline" style="margin-top: 15px;">Profile</a>           
                                       </div></div>'; 
                                    $i=$i+1;
                                    if($i>=3)
                                    {
                                        $i=0;
                                        echo '</td><tr><td>';
                                    }
                                }
                                echo '</td></tr>
                                        </tbody></table><div>';
             ?>     
                    </div>
                </section>
                </div>
                </div>
           
        </div><!--End container -->
        </div><!--End bg_gray_container -->
        </div>
@endsection