@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Posting</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">Designation</th>
					    <th class="col-md-2">Hospital/Centre</th>
					    <th class="col-md-2">Category</th>
					    <th class="col-md-2 text-center">District</th>
					    <th class="col-md-1 text-center">Status</th>
					    <th class="col-md-2 action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($postingAll as $posting)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $posting->designation_id }}&nbsp;</td>
					    <td height="25" align="left">{{ $posting->hospital_id }}&nbsp;</td>
					    <td height="25" align="left">{{ $posting->hospital_category_id }}&nbsp;</td>
					    <td height="25" class="text-center">{{ $posting->district_id }}&nbsp;</td>
					    <td height="25" class="text-center">{{ $posting->status }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('posting.destroy', array($posting->id)),'method'=>'delete')) !!}
								<a href="{{route('posting.edit', array($posting->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit posting" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove posting" value="{{$posting->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $postingAll !!}
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add Posting</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'posting.store','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('District','',['class'=>'control-label'])!!}
							{!! Form::select('district_id',[''=>'']+$districtAll,'',['class'=>'form-control']) !!}
							@if($errors->has('district_id'))
								<span class="text-danger">{{$errors->first('district_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Category','',['class'=>'control-label'])!!}
							{!! Form::select('hospital_category_id',[''=>'']+$hospitalCategoryAll,'',['class'=>'form-control']) !!}
							@if($errors->has('hospital_category_id'))
								<span class="text-danger">{{$errors->first('hospital_category_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Hospital/Centre','',['class'=>'control-label'])!!}
							{!! Form::select('hospital_id',[''=>'']+$hospitalAll,'',['class'=>'form-control']) !!}
							@if($errors->has('hospital_id'))
								<span class="text-danger">{{$errors->first('hospital_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Designation','',['class'=>'control-label'])!!}
							{!! Form::select('designation_id',[''=>'']+$designationAll,'',['class'=>'form-control']) !!}
							@if($errors->has('designation_id'))
								<span class="text-danger">{{$errors->first('designation_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Status','',['class'=>'control-label'])!!}
							{!! Form::select('status',$status,'',['class'=>'form-control']) !!}
							@if($errors->has('status'))
								<span class="text-danger">{{$errors->first('status')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('File NO.A.','',['class'=>'control-label'])!!}
							{!! Form::text('order_no',null,['class'=>'form-control']) !!}
							@if($errors->has('order_no'))
								<span class="text-danger">{{$errors->first('order_no')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('File Dated','',['class'=>'control-label'])!!}
							{!! Form::text('order_date',null,['class'=>'form-control']) !!}
							@if($errors->has('order_date'))
								<span class="text-danger">{{$errors->first('order_date')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Validity Date','',['class'=>'control-label'])!!}
							{!! Form::text('order_date_upto',null,['class'=>'form-control']) !!}
							@if($errors->has('order_date_upto'))
								<span class="text-danger">{{$errors->first('order_date_upto')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Jobs Type','',['class'=>'control-label'])!!}
							{!! Form::text('order_type',null,['class'=>'form-control']) !!}
							@if($errors->has('order_type'))
								<span class="text-danger">{{$errors->first('order_type')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Total Enumeration','',['class'=>'control-label'])!!}
							{!! Form::text('order_renumeration',null,['class'=>'form-control','style'=>'height:60px']) !!}
							@if($errors->has('order_renumeration'))
								<span class="text-danger">{{$errors->first('order_renumeration')}}</span>
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