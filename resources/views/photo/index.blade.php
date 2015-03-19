@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">List Photo</div>
				<div class="panel-body">
					@foreach($photoByAlbum as $photo)
						<div class="col-md-3" style="padding-bottom:10px; height:200px;">
							<div class="img-thumbnail">
								<img src="{{ asset($photo->directory.$photo->photo_file.'') }}" class="img-thumbnail"><br>
								{{ $photo->name }}
								{!! Form::open(array('url'=>route('photo.destroy', array($photo->id)),'method'=>'delete')) !!}
									{!! Form::hidden('album_id',$photo->album_id) !!}
									<a href="{{route('photo.edit', [$photo->id,'album_id'=>$photo->album_id])}}" class="btn btn-xs btn-success tooltip-top" title="Edit Photo"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
									<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Photo" value="{{$photo->id}}"><i class="glyphicon glyphicon-trash"></i></button>
								{!!Form::close() !!}
							</div>
						</div>
					@endforeach
				</div>
			</div>
			{!! $photoByAlbum !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Add Photo</div>
				<div class="panel-body">
					{!! Form::open(['route'=>'photo.store','class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
						{!! Form::hidden('album_id',$album_id) !!}
						{!! Form::hidden('album_cat_id',App\Album::find($album_id)->pluck('album_cat_id')) !!}
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
							{!! Form::label('Photo','',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::file('photo_file',['class'=>'form-control']) !!}
								@if($errors->has('photo_file'))
									<span class="text-danger">{{$errors->first('photo_file')}}</span>
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