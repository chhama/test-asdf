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
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Staff</strong>
					{!! Form::open(['URL'=>'staff.index','method'=>'get','class'=>'form-inline']) !!}
						<div class="form-group">
							{!! Form::select('district',[''=>'District']+$districtAll,$district_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('hoscat',[''=>'Hospital Category']+$hospitalCategoryAll,$hoscat_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('designation',[''=>'Designation']+$designationAll,$designation_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('type',$jobType,$type_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('name',$name_view,['class'=>'','placeholder'=>'Name']) !!}
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Search
							</button>
						</div>
					{!! Form::close() !!}
				</div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">Name</th>
					    <th class="col-md-2">Fathers</th>
					    <th class="col-md-2">Address</th>
					    <th class="col-md-2 text-center">D.O.J</th>
					    <th class="col-md-1 text-center">Loan</th>
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
					    	<td height="25" class="text-center"><a href="{{route('loan.create', array('staff_id'=>$staff->id))}}" class="btn btn-xs btn-success tooltip-top" title="Entry Posting" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-plus"></i> <strong>Apply Loan</strong></a>&nbsp;</td>
						</tr>
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $staffAll !!}
		</div>
	</div>
</div>
@endsection