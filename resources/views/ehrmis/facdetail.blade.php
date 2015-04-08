@extends('master')

@section('content')
<div class="scrollpoint sp-effect5">
	<h3>Facilities Details</h3>
</div>

<div class="col-md-12">
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
				    	<td height="25" align="left">{{ $hospitalById->name }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Category&nbsp;</td>
				    	<td height="25" align="left">{{ $hospitalById->hospitalCategory->name }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">District&nbsp;</td>
				    	<td height="25" align="left">{{ $hospitalById->district->name  }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Type&nbsp;</td>
				    	<td height="25" align="left">{{ $hospitalById->type }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Description&nbsp;</td>
				    	<td height="25" align="left">{{ $hospitalById->description }}&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left">Photos&nbsp;</td>
				    	<td height="25" align="left">&nbsp;</td>
				    </tr>
				    <tr>
				    	<td height="25" align="left" colspan="2">
				    		<div class="col-md-4"><img src="{{ $hospitalById->photo1 }}" class="img-thumbnail"></div>
				    		<div class="col-md-4"><img src="{{ $hospitalById->photo2 }}" class="img-thumbnail"></div>
				    		<div class="col-md-4"><img src="{{ $hospitalById->photo3 }}" class="img-thumbnail"></div>
				    	</td>
				    </tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
			<thead>
			  <tr>
			    <th height="38" class="text-center">#</th>
			    <th height="38" align="left">Name</th>
			    <th height="38" align="left">Designation</th>
			    <th height="38" align="left" class="text-center">Date of Joining</th>
			    <th height="38" align="left">Salary</th>
			    <th height="38" align="left">Type</th>
			  </tr>
			  </thead>
			  <tbody>
			@foreach($postingByHos as $postOnHos)
				<tr bgcolor="">
			    <td height="25" class="text-center">{{ $index++ }}</td>
			    <td height="25" align="left">{{ $postOnHos->staff->name }}</a>&nbsp;</td>
			    <td height="25" align="left">{{ $postOnHos->designation->name }}&nbsp;</td>
			    <td height="25" align="left" class="text-center">{{ date('d-m-Y',strtotime($postOnHos->doj)) }}&nbsp;</td>
			    <td height="25" align="left">{{ $postOnHos->total_remuneration }}&nbsp;</td>
			    <td height="25" align="left">{{ $postOnHos->type }}&nbsp;</td>
			    </tr>
			    
			@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>

@endsection