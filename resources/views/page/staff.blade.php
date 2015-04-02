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
				    <th class="col-md-2"></th>
				    <th class="col-md-2"></th>
				  </tr>
				</thead>
				<tbody>
					<tr bgcolor="">
				    	<td height="25" align="left">Name&nbsp;</td>
				    	<td height="25" align="left">{{ $staff->name }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Fathers&nbsp;</td>
				    	<td height="25" align="left">{{ $staff->fathers_name }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Address&nbsp;</td>
				    	<td height="25" align="left">{{ $staff->address }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">D.O.J&nbsp;</td>
				    	<td height="25" align="left">{{ $staff->doj }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Phone&nbsp;</td>
				    	<td height="25" align="left">{{ $staff->phone }}&nbsp;</td>
				    </tr>
				</tbody>
			</table>
		</div>
	</div>

	UNDER CONSTRUCTION<br>
	To be Continue...<br>

@endsection