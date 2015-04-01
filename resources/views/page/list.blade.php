@extends('master')

@section('content')

<div class="scrollpoint sp-effect5">
	<h3>{{ strtoupper($postByCat[0]->category->name) }}</h3>
</div>
<ol start='1'>
@foreach($postByCat as $post)
	<li><a href="{{ URL::route('page.index','id='.$post->id) }}">{{ $post->title }}</a></li>
@endforeach
<ol>

@endsection