@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Hospital Category</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th height="38" class="text-center">#</th>
					    <th height="38" align="left">Name</th>
					    <th height="38" align="left">Code</th>
					    <th align="left" class="action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($hospitalCategoryAll as $hospitalcategory)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $hospitalcategory->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $hospitalcategory->code }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('hospitalcategory.destroy', array($hospitalcategory->id)),'method'=>'delete')) !!}
								<a href="{{route('hospitalcategory.edit', array($hospitalcategory->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit hospitalcategory" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove hospitalcategory" value="{{$hospitalcategory->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $hospitalCategoryAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Edit Hospital Category</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::model($hospitalCategoryById, ['route'=>['hospitalcategory.update',$hospitalCategoryById->id],'method'=>'patch','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'control-label'])!!}
							{!! Form::text('name',null,['class'=>'form-control']) !!}
							@if($errors->has('name'))
								<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Code','',['class'=>'control-label'])!!}
							{!! Form::text('code',null,['class'=>'form-control']) !!}
							@if($errors->has('code'))
								<span class="text-danger">{{$errors->first('code')}}</span>
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