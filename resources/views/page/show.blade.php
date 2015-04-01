@extends('master')

@section('content')

<div class="scrollpoint sp-effect5">
	<h3>{{ strtoupper($page->title) }}</h3>
</div>
{!! $page->body !!}

@endsection