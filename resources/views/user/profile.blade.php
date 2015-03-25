@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>User Profile</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::model($userById, ['route'=>['user.update',$userById->id],'method'=>'patch','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'control-label'])!!}
							{!! Form::text('name',null,['class'=>'form-control']) !!}
							@if($errors->has('name'))
								<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('E-Mail','',['class'=>'control-label'])!!}
							{!! Form::text('email',null,['class'=>'form-control']) !!}
							@if($errors->has('email'))
								<span class="text-danger">{{$errors->first('email')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Password (Leave blank if not about to change.)','',['class'=>'control-label'])!!}
							{!! Form::password('password',['class'=>'form-control']) !!}
							@if($errors->has('password'))
								<span class="text-danger">{{$errors->first('password')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Confirm Password','',['class'=>'control-label'])!!}
							{!! Form::password('password_confirmation',['class'=>'form-control']) !!}
							@if($errors->has('password_confirmation'))
								<span class="text-danger">{{$errors->first('password_confirmation')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Role','',['class'=>'control-label'])!!}
							{!! Form::select('role',[''=>'','State'=>'State','District'=>'District'],$userById->role,['class'=>'form-control','disabled']) !!}
							@if($errors->has('role'))
								<span class="text-danger">{{$errors->first('role')}}</span>
							@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Update
							</button>
						</div>
					{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

@endsection