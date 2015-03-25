@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List user</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					   <tr>
					    <th height="38" class="text-center">#</th>
					    <th height="38" align="left">Name</th>
					    <th height="38" align="left">Email</th>
					    <th height="38" align="left">Role</th>
					    <th align="left" class="action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($userAll as $user)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $user->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $user->email }}&nbsp;</td>
					    <td height="25" align="left">{{ $user->role }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('user.destroy', array($user->id)),'method'=>'delete')) !!}
								<a href="{{route('user.edit', array($user->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit user" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove user" value="{{$user->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $userAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add user</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'user.store','class'=>'form-horizontal']) !!}
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
							{!! Form::label('Password','',['class'=>'control-label'])!!}
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
							{!! Form::select('role',[''=>'','State'=>'State','District'=>'District'],'',['class'=>'form-control']) !!}
							@if($errors->has('role'))
								<span class="text-danger">{{$errors->first('role')}}</span>
							@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Save
							</button>
						</div>
					{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection