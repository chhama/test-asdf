@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">List Album</div>
				<div class="panel-body">
					<table class="table table-hover">
					<thead>
					  <tr>
					    <th height="38" align="center" class="col-md-1 text-center">#</th>
					    <th height="38" align="left" class="col-md-3">Name</th>
					    <th height="38" align="left" class="col-md-2">Album Category</th>
					    <th height="38" align="left" class="col-md-4 text-center">Cover Photo</th>
					    <th align="left" class="action text-center col-md-2">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($albumAll as $album)
					<tr bgcolor="">
					    <td height="25" align="center" class="col-md-1 text-center">{{ $index++ }}</td>
					    <td height="25" align="left" class="col-md-3">{{ $album->name }}&nbsp;</td>
					    <td height="25" align="left" class="col-md-2">{{ $album->albumcat->name }}&nbsp;</td>
					    <td height="25" align="left" class="col-md-4 text-center"><a href="{{ URL::route('photo.index','album_id='.$album->id) }}"><img src="{{ asset($album->directory.$album->cover) }}" class="img-thumbnail" style="width:200px"></a>&nbsp;</td>
					    <td align="left" class="action text-center col-md-2">
					    	{!! Form::open(array('url'=>route('album.destroy', array($album->id)),'method'=>'delete')) !!}
								<a href="{{route('album.edit', array($album->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit prod"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Album" value="{{$album->id}}"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					</tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $albumAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Add Album</div>
				<div class="panel-body">
					{!! Form::open(['route'=>'album.store','class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
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
							{!! Form::label('Cover','',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::file('cover',['class'=>'form-control']) !!}
								@if($errors->has('cover'))
									<span class="text-danger">{{$errors->first('cover')}}</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('Category','',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-8">
								{!! Form::select('album_cat_id',[''=>'']+$albumCatAll,'',['class'=>'form-control']) !!}
								@if($errors->has('album_cat_id'))
									<span class="text-danger">{{$errors->first('album_cat_id')}}</span>
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