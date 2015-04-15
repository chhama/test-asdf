@extends('master')

@section('content')
	<div class="scrollpoint sp-effect5">
		<h3>e-HRMIS</h3>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			{!! Form::open(['URL'=>'hr','method'=>'get','class'=>'form-inline']) !!}
				<div class="form-group">
					{!! Form::select('type',$jobType,$type_view,['class'=>'']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('fname',$fname_view,['class'=>'','placeholder'=>'Fathers Name']) !!}
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
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
			<thead>
			  <tr>
			    <th class="col-md-1 text-center">#</th>
			    <th class="col-md-2">Name</th>
			    <th class="col-md-2">Phone</th>
			    <th class="col-md-2">Designation</th>
			    <th class="col-md-2 text-center">D.O.J</th>
			    <th class="col-md-1 text-center">Posting</th>
			    <th class="col-md-2 text-center">Type</th>
			  </tr>
			  </thead>
			  <tbody>
			@foreach($staffAll as $staff)
				<tr bgcolor="">
			    <td height="25" class="text-center">{{ $index++ }}</td>
			    <td height="25" align="left"><a href="{{ URL::to('hrdetail?id='.$staff->id) }}">{{ $staff->name }}</a>&nbsp;</td>
			    <td height="25" align="left">{{ $staff->phone }}&nbsp;</td>
			    <td height="25" align="left">{{ $staff->designation->name }}&nbsp;</td>
			    <td height="25" align="left" class="text-center">{{ date('d-m-Y',strtotime($staff->doj)) }}&nbsp;</td>
			    <td height="25" class="text-center">
			    	<?php 
			    		$posting = App\Posting::where('staff_id','=',$staff->id)->where('status','=','Current Post')->pluck('hospital_id');
			    		$hospital = App\Hospital::find($posting);
			     		if(isset($hospital->name)) { echo $hospital->name; };	
			     	?>&nbsp;
			 	</td>
			    <td height="25" class="text-center">
			    	<?php 
			    		$type = App\Posting::where('staff_id','=',$staff->id)->where('status','=','Current Post')->pluck('type');
			     		echo $type;
			     	?>&nbsp;
			 	</td>
			    </tr>
			    
			@endforeach
			</tbody>
		</table>
		</div>
	</div>
	{!! $staffAll !!}
@endsection