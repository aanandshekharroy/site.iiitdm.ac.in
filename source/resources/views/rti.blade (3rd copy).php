@extends('layouts.app')

@section('content')
<div class="sub_header bg_1">
            <div id="intro_txt" class="animated fadeInDown">
            <h1> <strong>Staff </strong>of IIITDM</h1>
            <p>Some tag-line here.</p>
            </div>
        </div> <!--End sub_header -->


        <div class="container_gray_bg">        
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">People</a></li>
                    <li>Staff</li>
                </ul>
            </div>
        </div><!-- Position -->
 
        <div class="container_gray_bg">
        <div class="container margin_60">
        <div class="row staff">'; 
            <table id="fac_table" class="table" border="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>
            @foreach ($staff as $person)
            <a href="#" class="button_outline">Profile</a>           
                                       </div></div><div class="col-md-4"><div class="box_style_1"><h4>	Mr. Milind P Bobde</h4>
                                    <p>Electrician</p>
                                    <h4><small>milind[at]iiitdmj.ac.in</small></h4>
                                    <!--ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-google"></i></a></li>
                                        <li><a href="#"><i class="icon-email"></i></a></li>
                                    </ul-->    
                                    <hr>

            @endforeach
             </td></tr></tbody></table>            
                                                    
      
        </div><!--End container -->
        </div><!--End bg_gray_container -->
@endsection