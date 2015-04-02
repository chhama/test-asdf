@extends('master')

@section('content')

<?php $catname = App\Category::find($id); ?>
	<div class="scrollpoint sp-effect5">
		<h3>{{ strtoupper($catname->name) }}</h3>
	</div>
	<ol start='1'>
	@foreach($postByCat as $post)
		<?php 
			if(strlen($post->download)>3 && strlen($post->body)<1) {
				echo "<li><a href='$post->download' download>$post->title</a></li>";
			} else {
				echo "<li><a href=" . URL::route('page.index','id='.$post->id) . ">$post->title</a></li>";
			}
		?>
		
	@endforeach
	<ol>
	{!! $postByCat !!}
@endsection