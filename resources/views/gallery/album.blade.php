@extends('master')

@section('content')
<div class="scrollpoint sp-effect5">
	<h3>Albums</h3>
</div>

@foreach($albums as $album)
	<div class="col-md-3 text-center">
		<a href="{{ URL::to('galleryphoto?aid='.$album->id) }}"><img src="{{ $album->directory }}{{ $album->cover }}" class="img-thumbnail" ></a><br>
		<strong>{{ $album->name }}</strong>
	</div>
@endforeach

{!! $albums !!}

@endsection