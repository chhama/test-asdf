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
				    <th class="col-md-3"></th>
				    <th class="col-md-3"></th>
				    <th class="col-md-3"></th>
				  </tr>
				</thead>
				<tbody>
					<tr bgcolor="">
				    	<td height="25" align="left">Name&nbsp;</td>
				    	<td height="25" align="left">: {{ $staffById->name }}&nbsp;</td>
				    	<td height="25" align="left" rowspan="8"><img src="{{ $staffById->photo }}" class="img-thumbnail">&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Fathers&nbsp;</td>
				    	<td height="25" align="left"> : {{ $staffById->fathers_name }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Phone&nbsp;</td>
				    	<td height="25" align="left"> : {{ $staffById->phone }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Sex&nbsp;</td>
				    	<td height="25" align="left"> : {{ $staffById->sex }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Qualification&nbsp;</td>
				    	<td height="25" align="left"> : {{ $staffById->qualification }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Address&nbsp;</td>
				    	<td height="25" align="left"> : {{ $staffById->address }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">D.O.J&nbsp;</td>
				    	<td height="25" align="left"> : {{ date('d-m-Y',strtotime($staffById->doj)) }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Remark&nbsp;</td>
				    	<td height="25" align="left"> : {{ $staffById->remark }}&nbsp;</td>
				    </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="scrollpoint sp-effect5">
		<h3>Posting</h3>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
			<thead>
			  <tr>
			    <th height="38" class="text-center">#</th>
			    <th height="38" align="left">Posting</th>
			    <th height="38" align="left">Designation</th>
			    <th height="38" align="left" class="text-center">Date of Joining</th>
			    <th height="38" align="left">Salary</th>
			    <th height="38" align="left">Type</th>
			    <th height="38" align="left">Status</th>
			  </tr>
			  </thead>
			  <tbody>
			@foreach($postingAll as $posting)
				<tr bgcolor="">
			    <td height="25" class="text-center">{{ $index++ }}</td>
			    <td height="25" align="left">{{ $posting->hospital->name.', '.$posting->hospitalCategory->name.', '.$posting->district->name }}</a>&nbsp;</td>
			    <td height="25" align="left">{{ $posting->designation->name }}&nbsp;</td>
			    <td height="25" align="left" class="text-center">{{ date('d-m-Y',strtotime($posting->doj)) }}&nbsp;</td>
			    <td height="25" align="left">{{ $posting->total_remuneration }}&nbsp;</td>
			    <td height="25" align="left">{{ $posting->type }}&nbsp;</td>
			    <td height="25" align="left">{{ $posting->status }}&nbsp;</td>
			    </tr>
			    
			@endforeach
			</tbody>
			</table>
		</div>
	</div>

@endsection