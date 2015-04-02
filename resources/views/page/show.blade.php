@extends('master')

@section('content')

@if(!empty($page->title))
	<div class="scrollpoint sp-effect5">
		<h3>{{ strtoupper($page->title) }}</h3>
	</div>
	{!! $page->body !!}

	@if(strlen($page->download)>3)
		<br> <span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp; <a href="{{ $page->download }}" download>Download File Attachment</a>
	@endif
@endif

@endsection