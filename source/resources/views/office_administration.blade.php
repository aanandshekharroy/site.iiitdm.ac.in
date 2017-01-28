@extends('layouts.app')

@section('content')
<div class="sub_header bg_1">
            <div id="intro_txt" class="animated fadeInDown">
            <h1> <strong>Office Administration </strong>of IIITDM</h1>
            <p>Some tag-line here.</p>
            </div>
        </div> <!--End sub_header -->


        <div class="container_gray_bg">        
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">People</a></li>
                    <li>Office Administration Staff</li>
                </ul>
            </div>
        </div><!-- Position -->
 
        <div class="container_gray_bg">
        <div class="container margin_60">
        <div class="row staff">
            		<table id="fac_table" class="table" border="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            	<td>
						            @foreach ($staff as $person)
						            <div class="col-md-4">
						            	<div class="box_style_1">
						            	<p><img src="{{$person->filename}}" alt="" class="img-circle styled"></p>
						            		<h4>{{$person->name}}</h4>
                                    		<p>{{$person->designation}}</p>
                                   		 <h4><small>{{$person->other_info}}</small></h4>  
	                                    <hr>
	                                    <a href="#" class="button_outline">Profile</a>           
                                       </div>
                                   </div>
						            @endforeach
             </td></tr></tbody></table>            
                                                    
      
        </div><!--End container -->
        </div><!--End bg_gray_container -->
@endsection