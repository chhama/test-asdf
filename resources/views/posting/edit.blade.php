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
					    <td height="25" align="left">{{ $posting->designation->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $posting->hospital->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $posting->hospitalCategory->name }}&nbsp;</td>
					    <td height="25" class="text-center">{{ $posting->district->name }}&nbsp;</td>
					    <td height="25" class="text-center">{{ $posting->status }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('posting.destroy', array($posting->id)),'method'=>'delete')) !!}
								<a href="{{route('posting.edit', array($posting->id,'staff_id'=>$posting->staff_id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit posting" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
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
				<div class="panel-heading"><strong>Edit Posting</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::model($postingById, ['route'=>['posting.update',$postingById->id],'method'=>'patch','class'=>'form-horizontal']) !!}
					{!! Form::hidden('staff_id',$_GET['staff_id']) !!}
						<div class="form-group">
							{!! Form::label('District','',['class'=>'control-label'])!!}
							{!! Form::select('district_id',$districtAll,$postingById->district_id,['class'=>'form-control','id'=>'district_id']) !!}
							@if($errors->has('district_id'))
								<span class="text-danger">{{$errors->first('district_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Category','',['class'=>'control-label'])!!}
							{!! Form::select('hospital_category_id',$hospitalCategoryAll,$postingById->hospital_category_id,['class'=>'form-control','id'=>'hospital_category_id']) !!}
							@if($errors->has('hospital_category_id'))
								<span class="text-danger">{{$errors->first('hospital_category_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Hospital/Centre','',['class'=>'control-label'])!!}
							{!! Form::select('hospital_id',$hospitalAll,$postingById->hospital_id,['class'=>'form-control','id'=>'hospital_id']) !!}
							@if($errors->has('hospital_id'))
								<span class="text-danger">{{$errors->first('hospital_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Designation','',['class'=>'control-label'])!!}
							{!! Form::select('designation_id',$designationAll,$postingById->designation_id,['class'=>'form-control']) !!}
							@if($errors->has('designation_id'))
								<span class="text-danger">{{$errors->first('designation_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Status','',['class'=>'control-label'])!!}
							{!! Form::select('status',$status,$postingById->status,['class'=>'form-control']) !!}
							@if($errors->has('status'))
								<span class="text-danger">{{$errors->first('status')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Date of Joining','',['class'=>'control-label'])!!}
							{!! Form::text('doj',date('d-m-Y',strtotime($postingById->doj)),['class'=>'form-control','id'=>'datetimepicker1']) !!}
							@if($errors->has('doj'))
								<span class="text-danger">{{$errors->first('doj')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Total Remuneration','',['class'=>'control-label'])!!}
							{!! Form::text('total_remuneration',null,['class'=>'form-control']) !!}
							@if($errors->has('total_remuneration'))
								<span class="text-danger">{{$errors->first('total_remuneration')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Job Type Eg : MR/Contract/Regular','',['class'=>'control-label'])!!}
							{!! Form::text('type',null,['class'=>'form-control']) !!}
							@if($errors->has('type'))
								<span class="text-danger">{{$errors->first('type')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Remark','',['class'=>'control-label'])!!}
							{!! Form::textarea('remark',null,['class'=>'form-control']) !!}
							@if($errors->has('remark'))
								<span class="text-danger">{{$errors->first('remark')}}</span>
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
	</div>
</div>
<script>
$("#hospital_category_id").change(function(){
	var catId = this.value;
    $.ajax({
        url: "{{ URL::to('hospitalByCat')}}",
        data: {'catId': catId},
        type: 'GET',
    }).success(function(data){
        $('#hospital_id').html(data);
    });
});
</script>
@endsection