@extends('app')

@section('content')
<script language="javascript">
	$(document).ready(function($) {
	    $('#datetimepicker1').datetimepicker({
	        step: 5,
	        timepicker:false,
 			format:'d-m-Y',
	    });
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Staff</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">Name</th>
					    <th class="col-md-2">Fathers</th>
					    <th class="col-md-2">Address</th>
					    <th class="col-md-2 text-center">D.O.J</th>
					    <th class="col-md-1 text-center">Posting</th>
					    <th class="col-md-2 action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($staffAll as $staff)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $staff->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $staff->fathers_name }}&nbsp;</td>
					    <td height="25" align="left">{{ $staff->address }}&nbsp;</td>
					    <td height="25" class="text-center">{{ date('d-m-Y',strtotime($staff->doj)) }}&nbsp;</td>
					    <td height="25" class="text-center"><a href="{{route('posting.index', array('staff_id'=>$staff->id))}}" class="btn btn-xs btn-success tooltip-top" title="Entry Posting" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-plus"></i></a>&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('staffrecord.destroy', array($staff->id)),'method'=>'delete')) !!}
								<a href="{{route('staffrecord.edit', array($staff->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit staff" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove staff" value="{{$staff->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $staffAll !!}
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add Staff</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'staffrecord.store','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'control-label'])!!}
							{!! Form::text('name',null,['class'=>'form-control']) !!}
							@if($errors->has('name'))
								<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('photo','',['class'=>'control-label']) !!}
							{!! Form::file('photo',['class'=>'form-control']) !!}
							@if($errors->has('photo'))
								<span class="text-danger">{{$errors->first('photo')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Fathers Name','',['class'=>'control-label'])!!}
							{!! Form::text('fathers_name',null,['class'=>'form-control']) !!}
							@if($errors->has('fathers_name'))
								<span class="text-danger">{{$errors->first('fathers_name')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Sex','',['class'=>'control-label'])!!}
							{!! Form::select('sex',$sex,'',['class'=>'form-control']) !!}
							@if($errors->has('sex'))
								<span class="text-danger">{{$errors->first('sex')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Qualification','',['class'=>'control-label'])!!}
							{!! Form::text('qualification',null,['class'=>'form-control']) !!}
							@if($errors->has('qualification'))
								<span class="text-danger">{{$errors->first('qualification')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Phone','',['class'=>'control-label'])!!}
							{!! Form::text('phone',null,['class'=>'form-control']) !!}
							@if($errors->has('phone'))
								<span class="text-danger">{{$errors->first('phone')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Date of Joining','',['class'=>'control-label'])!!}
							{!! Form::text('doj',null,['class'=>'form-control','id'=>'datetimepicker1']) !!}
							@if($errors->has('doj'))
								<span class="text-danger">{{$errors->first('doj')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Address','',['class'=>'control-label'])!!}
							{!! Form::textarea('address',null,['class'=>'form-control','style'=>'height:60px']) !!}
							@if($errors->has('address'))
								<span class="text-danger">{{$errors->first('address')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Remarks','',['class'=>'control-label'])!!}
							{!! Form::textarea('remark',null,['class'=>'form-control','style'=>'height:60px']) !!}
							@if($errors->has('remark'))
								<span class="text-danger">{{$errors->first('remark')}}</span>
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