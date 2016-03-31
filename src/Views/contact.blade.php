@extends('layouts.app')
@section('content')
<div class="container">
	@if(session('message'))
		<div class="alert alert-success" id="message">{{ session('message') }}</div>
	@endif
    <div class="row">
        <div class="col-md-10 form-box col-md-offset-1">
        	<div class="panel panel-primary">
				<div class="panel-heading">Contact Us</div>
				<div class="panel-body">
				    <div class="form-bottom contact-form">
				    	{!! Form::open(['class' => 'form-horizontal'])!!}
				    		<div class="form-group{!! $errors->has('name')?' has-error':''!!}">
				    			<label class="col-md-2 control-label">Name</label>
				    			<div class="col-md-8">
					        		<div class="input-group">
					            		<span class="input-group-addon"><i class="fa fa-user"></i></span>
					            		{!! Form::text('name', old('name'), ['placeholder' => 'Name...', 'class' => 'form-control', 'id="contact-name']) !!}
					            	</div>
					            	@if($errors->has('name'))
					            		<span class="help-block">{!! $errors->first('name') !!}</span>
					            	@endif
					            </div>
				            </div>
				            <div class="form-group{!! $errors->has('email')?' has-error':''!!}">
				            	<label class="col-md-2 control-label">Email</label>
				        		<div class="col-md-8">
					        		<div class="input-group">
					            		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					            		{!! Form::text('email', old('email'), ['placeholder' => 'Email...', 'class' => 'form-control', 'id="contact-email']) !!}
					            	</div>
					            	@if($errors->has('email'))
					            		<span class="help-block">{!! $errors->first('email') !!}</span>
					            	@endif
					            </div>
				            </div>
				            <div class="form-group">
				            	<label class="col-md-2 control-label">Country</label>
				        		<div class="col-md-8">
					        		<div class="input-group">
					            		<span class="input-group-addon"><i class="fa fa-home"></i></span>
					            		{!! Form::text('country', old('country'), ['placeholder' => 'Country...', 'class' => 'form-control', 'id="contact-country']) !!}
					            	</div>
					            </div>
				            </div>
				            <div class="form-group">
				            	<label class="col-md-2 control-label">Subject</label>
				            	<div class="col-md-8">
					            	<div class="input-group">
					            		<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
					            		{!! Form::text('subject', old('subject'), ['placeholder' => 'Subject...', 'class' => 'form-control', 'id="contact-subject']) !!}
					            	</div>
					            </div>
				            </div>
				            <div class="form-group{!! $errors->has('message')?' has-error':''!!}">
				            	<label class="col-md-2 control-label">Message</label>
				            	<div class="col-md-8">
					            	<div class="input-group">
					            		<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
					            		{!! Form::textarea('message', old('message'), ['placeholder' => 'Message...', 'class' => 'form-control', 'id="contact-message']) !!}
					            	</div>
					            	@if($errors->has('message'))
					            		<span class="help-block">{!! $errors->first('message') !!}</span>
					            	@endif
					            </div>
				            </div>
				            <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" class="btn btn-info">Send <span class="fa fa-send fa-btn"></span></button>
	                            </div>
	                        </div>
				        {!! Form::close()!!}
				    </div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection