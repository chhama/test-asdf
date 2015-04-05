@extends('master')

@section('content')
<div class="scrollpoint sp-effect5">
	<h3>{{ $album->name }}</h3>
</div>

@foreach($photos as $photo)
	<div class="col-md-3 text-center">
		<a href="#"><img src="{{ $photo->directory }}{{ $photo->photo_file }}" class="img-thumbnail" ></a><br>
		<strong>{{ $photo->name }}</strong>
	</div>
@endforeach

{!! $photos !!}

@endsection