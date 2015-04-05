@extends('master')

@section('content')
<div class="scrollpoint sp-effect5">
	<h3>Facilities</h3>
</div>

<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-body">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
			<thead>
			  <tr>
			    <th height="38" class="text-center">#</th>
			    <th height="38" align="left">Name</th>
			    <th height="38" align="left">Category</th>
			    <th height="38" align="left">Type</th>
			    <th height="38" align="left">District</th>
			  </tr>
			  </thead>
			  <tbody>
			@foreach($hospitalAll as $hospital)
				<tr bgcolor="">
			    <td height="25" class="text-center">{{ $index++ }}</td>
			    <td height="25" align="left"><a href="{{ URL::to('facdetail?id='.$hospital->id) }}">{{ $hospital->name }}</a>&nbsp;</td>
			    <td height="25" align="left">{{ $hospital->hospitalCategory->name }}&nbsp;</td>
			    <td height="25" align="left">{{ $hospital->type }}&nbsp;</td>
			    <td height="25" align="left">{{ $hospital->district->name }}&nbsp;</td>
			    </tr>
			    
			@endforeach
			</tbody>
			</table>
		</div>
	</div>
	{!! $hospitalAll !!}
</div>

@endsection