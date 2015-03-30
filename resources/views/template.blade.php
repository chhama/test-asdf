<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>National Health Mission</title>

		<!-- Bootstrap CSS -->
		{!!Html::Style('css/bootstrap.css')!!}
		{!!Html::Style('css/custom.css')!!}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		@yield('extrajs')
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation" style='z-index: 9999'>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=<?php $_SERVER['DOCUMENT_ROOT']; ?>>National Health Mission</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li data-menuanchor="page1"><a href="#main">Home</a></li>
					<li data-menuanchor="society"><a href="#society">Society</a></li>
					<li data-menuanchor="guideline"><a href="#guideline">Guideline</a></li>
					<li data-menuanchor="gallery"><a href="#gallery">Photo Gallery</a></li>
					<li data-menuanchor="hr"><a href="#hr">Human Resources</a></li>
					<li data-menuanchor="contacts"><a href="#contacts">Contacts</a></li>
					<li data-menuanchor="helpline"><a href="#helpline">Helpline</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Login</a></li>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		@yield('content')
		<!-- jQuery -->
		{!!Html::Script('js/jquery.js')!!}
		<!-- Bootstrap JavaScript -->
		{!!Html::Script('js/bootstrap.js')!!}
	
	</body>
@yield('footscript')
</html>