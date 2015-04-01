@extends('master')

@section('content')

@if(!empty($page->title))
	<div class="scrollpoint sp-effect5">
		<h3>{{ strtoupper($page->title) }}</h3>
	</div>
	{!! $page->body !!}
@endif

@endsection