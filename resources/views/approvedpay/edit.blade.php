@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Approved Pay</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">Designation</th>
					    <th class="col-md-2">Hospital Type</th>
					    <th class="col-md-2">Approved Pay</th>
					    <th class="col-md-2 action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($approvedPayAll as $approvedpay)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $approvedpay->designation->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $approvedpay->hospital_type }}&nbsp;</td>
					    <td height="25" align="left">{{ $approvedpay->amount }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('approvedpay.destroy', array($approvedpay->id)),'method'=>'delete')) !!}
								<a href="{{route('approvedpay.edit', array($approvedpay->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit approvedpay" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove approvedpay" value="{{$approvedpay->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $approvedPayAll !!}
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Edit Approved Pay</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::model($approvedPayById, ['route'=>['approvedpay.update',$approvedPayById->id],'method'=>'patch','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Hospital Type','',['class'=>'control-label'])!!}
							{!! Form::select('hospital_type',$hospital_type,null,['class'=>'form-control','id'=>'hospital_type']) !!}
							@if($errors->has('hospital_type'))
								<span class="text-danger">{{$errors->first('hospital_type')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Designation','',['class'=>'control-label'])!!}
							{!! Form::select('designation_id',$designationAll,null,['class'=>'form-control','id'=>'designation_id']) !!}
							@if($errors->has('designation_id'))
								<span class="text-danger">{{$errors->first('designation_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Approved Pay','',['class'=>'control-label'])!!}
							{!! Form::text('amount',null,['class'=>'form-control']) !!}
							@if($errors->has('amount'))
								<span class="text-danger">{{$errors->first('amount')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Status','',['class'=>'control-label'])!!}
							{!! Form::select('status',[$status,'',['class'=>'form-control','id'=>'status']) !!}
							@if($errors->has('status'))
								<span class="text-danger">{{$errors->first('status')}}</span>
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