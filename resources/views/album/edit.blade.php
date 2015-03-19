@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">List Album</div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th height="38" align="center" class="col-md-1 text-center">#</th>
					    <th height="38" align="left" class="col-md-3">Name</th>
					    <th height="38" align="left" class="col-md-2">Album Category</th>
					    <th height="38" align="left" class="col-md-4 text-center">Cover Photo</th>
					    <th align="left" class="action text-center" class="col-md-2">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($albumAll as $album)
					<tr bgcolor="">
					    <td height="25" align="center" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $album->name }}&nbsp;</td>
					    <td height="25" align="left" bgcolor="">{{ $album->albumcat->name }}&nbsp;</td>
					    <td height="25" align="left" bgcolor=""><div class="col-md-12"><a href="{{ URL::route('photo.index','album_id='.$album->id) }}"><img src="{{ asset($album->directory.$album->cover.'') }}" class="img-thumbnail" ></a></div>&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('album.destroy', array($album->id)),'method'=>'delete')) !!}
								<a href="{{route('album.edit', array($album->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit prod"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Album" value="{{$album->id}}"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					</tr>
					    
					@endforeach
					</tbody>
					<tfoot>
					<tr>
						<td colspan="3">{!! $albumAll !!}<td>
					</tr>
					</tfoot>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Album</div>
				<div class="panel-body">
					{!! Form::model($albumById,['route'=>['album.update',$albumById->id],'method'=>'patch','class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-8">
								{!! Form::text('name',null,['class'=>'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('Cover','',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::file('cover',['class'=>'form-control']) !!}
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