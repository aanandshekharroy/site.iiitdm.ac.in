@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1></h1>
<h4><a href="/logout" >Logout</a></h4>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/add-user') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
            </form>
</div>
	
</div>
	<div class="row">
		<div class="panel-group" id="accordion">
		  <div class="panel panel-warning">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        Users</a>
		      </h4>
		    </div>

		    <div id="collapse1" class="panel-collapse collapse ">
		      <div class="panel-body">
		      <h3>Users</h3>
		      <hr>
		      	@if(count($users)>0)
		      		@foreach( $users as $user)
		      			<div class="row">
							<div class="col-sm-12">
								<h2>{{$user->name}}</h2>
							</div>
							<hr>
							<div class="col-sm-12">
								<h4>{{$user->email}}</h4>
							</div>
							<div class=" col-sm-3">
								<input type="hidden" id="{{$user->id}}"/>
								<button class="btn btn-primary change-password">Change password</button>
								<button class="btn btn-danger delete-user">Delete</button>
							</div>
						</div>
						<hr>
		      		@endforeach
		      		
		      	@else 
		      		<h4>No thread to moderate!</h4>
		      		<hr>
		      	@endif
		      	
			  </div>
		    </div>
		  </div>
		  
  
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('.change-password').click(function(){
			var button=$(this);
			if(button.hasClass('disabled')){
				return;
			}
			var user_id=button.prev().attr('id');
			// console.log('tId: '+tId);
			var obj={};
			obj.user_id=user_id;
			button.attr('disabled','disabled');
			$.get("/admin/change-password",obj,function(data,status){
				if(data==1){
					alert('Password changed. New password is the email id of the user.');
					// button.text('');
					button.next().attr('disabled','disabled');
				}
				// console.log("data: "+data+",-- "+$(this).text());
			})
		    .error(function(){
		    	button.removeAttr('disabled');
		      alert('Cant connect to internet!!');
		    });
		    
		});
		$('.delete-user').click(function(){
			var button=$(this);
			var user_id=button.prev().prev().attr('id');
			// console.log('tId: '+tId);
			var obj={};
			obj.user_id=user_id;
			obj.action="delete";
			button.attr('disabled','disabled');
			$.get("/admin/delete-user",obj,function(data,status){
				if(data==1){
					button.text('Deleted');
					button.prev().attr('disabled','disabled');
				}
				// console.log("data delete returned: "+data+", tid: "+tId);
			})
		    .error(function(){
		    	button.removeAttr('disabled');
		      alert('Cant connect to internet!!');
		    });
		    
		});


		
	});
</script>
@endsection