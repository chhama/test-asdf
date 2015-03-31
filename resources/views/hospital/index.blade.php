@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Hospital</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th height="38" class="text-center">#</th>
					    <th height="38" align="left">Name</th>
					    <th height="38" align="left">Category</th>
					    <th height="38" align="left">Type</th>
					    <th height="38" align="left">District</th>
					    <th align="left" class="action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($hospitalAll as $hospital)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $hospital->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $hospital->hospitalCategory->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $hospital->type }}&nbsp;</td>
					    <td height="25" align="left">{{ $hospital->district->name }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('hospitals.destroy', array($hospital->id)),'method'=>'delete')) !!}
								<a href="{{route('hospitals.edit', array($hospital->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit hospital" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove hospital" value="{{$hospital->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $hospitalAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add Hospital</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'hospitals.store','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'control-label'])!!}
							{!! Form::text('name',null,['class'=>'form-control']) !!}
							@if($errors->has('name'))
								<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Category','',['class'=>'control-label'])!!}
							{!! Form::select('hospital_category_id',[''=>'']+$hospitalCategoryAll,'',['class'=>'form-control']) !!}
							@if($errors->has('hospital_category_id'))
								<span class="text-danger">{{$errors->first('hospital_category_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Type','',['class'=>'control-label'])!!}
							{!! Form::select('type',$type,'',['class'=>'form-control']) !!}
							@if($errors->has('type'))
								<span class="text-danger">{{$errors->first('type')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('District','',['class'=>'control-label'])!!}
							{!! Form::select('district_id',[''=>'']+$districtAll,'',['class'=>'form-control']) !!}
							@if($errors->has('district_id'))
								<span class="text-danger">{{$errors->first('district_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Description','',['class'=>'control-label'])!!}
							{!! Form::textarea('description',null,['class'=>'form-control']) !!}
							@if($errors->has('description'))
								<span class="text-danger">{{$errors->first('description')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Photo 1','',['class'=>'control-label']) !!}
							{!! Form::file('photo1',['class'=>'form-control']) !!}
							@if($errors->has('photo1'))
								<span class="text-danger">{{$errors->first('photo1')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('photo 2','',['class'=>'control-label']) !!}
							{!! Form::file('photo2',['class'=>'form-control']) !!}
							@if($errors->has('photo2'))
								<span class="text-danger">{{$errors->first('photo2')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('photo 3','',['class'=>'control-label']) !!}
							{!! Form::file('photo3',['class'=>'form-control']) !!}
							@if($errors->has('photo3'))
								<span class="text-danger">{{$errors->first('photo3')}}</span>
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