@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Album Category</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th height="38" class="text-center">#</th>
					    <th height="38" align="left">Name</th>
					    <th align="left" class="action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($albumCatAll as $albumCat)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $albumCat->name }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('albumcat.destroy', array($albumCat->id)),'method'=>'delete')) !!}
								<a href="{{route('albumcat.edit', array($albumCat->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit Album Cat" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Album Cat" value="{{$albumCat->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $albumCatAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add Album Category</strong></div>
				<div class="panel-body">
					{!! Form::open(['route'=>'albumcat.store','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-8">
								{!! Form::text('name',null,['class'=>'form-control']) !!}
								@if($errors->has('name'))
									<span class="text-danger">{{$errors->first('name')}}</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-success">
									Save
								</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection