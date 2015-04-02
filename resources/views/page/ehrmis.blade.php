@extends('master')

@section('content')
	<div class="scrollpoint sp-effect5">
		<h3>e-HRMIS</h3>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
			<thead>
			  <tr>
			    <th class="col-md-1 text-center">#</th>
			    <th class="col-md-2">Name</th>
			    <th class="col-md-2">Fathers</th>
			    <th class="col-md-2">Address</th>
			    <th class="col-md-2 text-center">D.O.J</th>
			    <th class="col-md-1 text-center">Phone</th>
			    <th class="col-md-2">Posting</th>
			  </tr>
			  </thead>
			  <tbody>
			@foreach($ehrmis as $staff)
				<tr bgcolor="">
			    <td height="25" class="text-center">{{ $index++ }}</td>
			    <td height="25" align="left"><a href="{{ URL::to('staff?id='.$staff->id) }}">{{ $staff->name }}</a>&nbsp;</td>
			    <td height="25" align="left">{{ $staff->fathers_name }}&nbsp;</td>
			    <td height="25" align="left">{{ $staff->address }}&nbsp;</td>
			    <td height="25" class="text-center">{{ $staff->doj }}&nbsp;</td>
			    <td height="25" class="text-center">&nbsp;</td>
			    <td align="left">
			    	
			    </td>
			    </tr>
			    
			@endforeach
			</tbody>
		</table>
		</div>
	</div>
	{!! $ehrmis !!}
@endsection