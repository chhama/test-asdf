@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Designation</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th height="38" class="text-center">#</th>
					    <th height="38" align="left">Name</th>
					    <th height="38" align="left">Code</th>
					    <th height="38" align="left">Type</th>
					    <th align="left" class="action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($designationAll as $designation)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $designation->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $designation->code }}&nbsp;</td>
					    <td height="25" align="left">{{ $designation->type }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('designation.destroy', array($designation->id)),'method'=>'delete')) !!}
								<a href="{{route('designation.edit', array($designation->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit designation" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove designation" value="{{$designation->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $designationAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add designation</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'designation.store','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'control-label'])!!}
							{!! Form::text('name',null,['class'=>'form-control']) !!}
							@if($errors->has('name'))
								<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Code','',['class'=>'control-label'])!!}
							{!! Form::text('code',null,['class'=>'form-control']) !!}
							@if($errors->has('code'))
								<span class="text-danger">{{$errors->first('code')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Type','',['class'=>'control-label'])!!}
							{!! Form::select('type',$type,'',['class'=>'form-control']) !!}
							@if($errors->has('type'))
								<span class="text-danger">{{$errors->first('type')}}</span>
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