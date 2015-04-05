@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Post</strong> <span class='pull-right'><a href="{{route('post.create')}}" class="btn btn-xs btn-primary tooltip-top" title="Add post" style="padding:10px 20px 10px 20px;"><i class="glyphicon glyphicon-plus"></i><strong> &nbsp;Add </strong></a></span></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="text-center col-md-1">#</th>
					    <th class="text-left col-md-4">Title</th>
					    <th class="text-left col-md-2">Category</th>
					    <th class="text-left col-md-1">User</th>
					    <th class="text-center col-md-1">Highlight</th>
					    <th class="text-center col-md-1">ID</th>
					    <th class="text-center col-md-2">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($postAll as $post)
						<tr bgcolor="">
					    <td class="text-center">{{ $index++ }}</td>
					    <td class="text-left">{{ $post->title }}&nbsp;</td>
					    <td class="text-left">{{ $post->category->name }}&nbsp;</td>
					    <td class="text-left">{{ $post->user->name }}&nbsp;</td>
					    <td class="text-center">{{ $post->highlight }}&nbsp;</td>
					    <td class="text-center">{{ $post->id }}&nbsp;</td>
					    <td class="action text-center">
					    	{!! Form::open(array('url'=>route('post.destroy', array($post->id)),'method'=>'delete')) !!}
								<a href="{{route('post.edit', array($post->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit post" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove post" value="{{$post->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $postAll !!}
		</div>
	</div>
</div>

@endsection