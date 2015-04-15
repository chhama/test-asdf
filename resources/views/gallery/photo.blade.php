@extends('master')

@section('content')
<div class="scrollpoint sp-effect5">
	<h3>{{ $album->name }}</h3>
</div>

@foreach($photos as $photo)
	<div class="col-md-3 text-center">
		<a href="#" data-toggle="modal" data-target=".dapzar-{{$photo->id}}"><img src="{{ $photo->directory }}{{ $photo->photo_file }}" class="img-thumbnail" ></a><br>
		<strong>{{ $photo->name }}</strong>
	</div>
	<div class="modal fade dapzar-{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	  	<center>
	      <img src="{{ $photo->directory }}{{ $photo->photo_file }}" class="img-responsive modal-content" >
	  	</center>
	  </div>
	</div>
@endforeach

{!! $photos !!}
@endsection