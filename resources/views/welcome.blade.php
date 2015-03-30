@extends('template')
@section('content')
<div id="pagepiling" style="overflow: hidden; touch-action: none;">
	    <div class="section pp-section pp-table pp-easing active" id="section1" data-anchor="main" style="z-index: 4;  background-image:url('../images/sparkler.jpeg');  background-repeat: no-repeat; background-size: 100% 100%; background-color: white;"><div class="pp-tableCell" style="height:100%">
	    	<h1 class='whitehead'>National Health Mission</h1>
			<p class='whitehead'>The state of Mizoram highly appreciates the initiatives and activities taken up under the National Rural Health Mission through which the people have access to better Health Care facilities in terms of infrastructure and better equipped and skilled manpower right at their own villages. The major Target/ goal set for the next 3 years are Maternal Mortality Ratio with less than 60 and also for Infant Mortality Rate less than 30 and TFR at less than or equal to 2.1 in 2016-17.
The health system approaches, its goals and strategies are mentioned in the conceptual framework. The overall goals / activities to be achieved in the year 2014 – 15 have been summarized as given in the table below.</p>
			
	    </div></div>

	    <div class="section pp-section pp-table pp-easing" id="section2" data-anchor="society" style="z-index: 3;  background-image:url('../images/night.jpeg');  background-repeat: no-repeat; background-size: 100% 100%; background-color: rgb(238, 0, 90);"><div class="pp-tableCell" style="height:100%">
	    	<div class="intro">
	    		<h1 class="whitehead">jQuery plugin</h1>
	    		<p class="whitehead">Pile your sections one over another and access them scrolling or by URL!</p>
	    	
	    </div></div></div>
	    <div class="section pp-section pp-table pp-easing" id="section3" data-anchor="guideline" style="z-index: 2;  background-image:url('../images/mac.jpeg'); background-repeat: no-repeat; background-size: 100% 100%; background-color: rgb(44, 62, 80);"><div class="pp-tableCell" style="height:100%">
	    	<div class="intro">
	    		<h1>Configurable</h1>
	    		<p>Plenty of options, methods and callbacks to use.</p>
	    		<div id="colors2"></div>
	    		<div id="colors3"></div>
	    	</div>
	    </div></div>
	    <div class="section pp-section pp-table pp-easing" id="section4" data-anchor="gallery" style="z-index: 1;  background-image:url('../images/bridge.jpeg');  background-repeat: no-repeat; background-size: 100% 100%; background-color: rgb(51, 153, 204);"><div class="pp-tableCell" style="height:100%">
	    	<div class="intro">
	    		<h1 class='whitehead'>Compatible</h1>
	    		<p class='whitehead'>Designed to work on tablet and mobile devices. <br>
	    		Oh! And its compatible with old browsers such as IE 8 or Opera 12!</p>
	    	</div>
	    </div></div>

	    <div class="section pp-section pp-table pp-easing" id="section5" data-anchor="hr" style="z-index: 1;  background-image:url('../images/sheep.jpeg');  background-repeat: no-repeat; background-size: 100% 100%; background-color: rgb(151, 53, 104);"><div class="pp-tableCell" style="height:100%">
	    	<div class="intro">
	    		<h1>Compatible</h1>
	    		<p>Designed to work on tablet and mobile devices.</p>
	    		<p>Oh! And its compatible with old browsers such as IE 8 or Opera 12!</p>
	    	</div>
	    </div></div>
	    <div class="section pp-section pp-table pp-easing" id="section6" data-anchor="helpline" style="z-index: 1;  background-image:url('../images/helpline.jpeg');  background-repeat: no-repeat; background-size: 100% 100%; background-color: rgb(151, 53, 104);"><div class="pp-tableCell" style="height:100%">
	    	<div class="intro">
	    		<h1>Compatible</h1>
	    		<p>Designed to work on tablet and mobile devices.</p>
	    		<p>Oh! And its compatible with old browsers such as IE 8 or Opera 12!</p>
	    	</div>
	    </div></div>
	</div>
@stop
@section('footscript')
	{!! Html::Script('js/jquery.pagepiling.js') !!}

	{!! Html::Style('css/jquery.pagepiling.css') !!}

	<script language='javascript'>
	$(document).ready(function() {
    $('#pagepiling').pagepiling({
    	loopBottom: true,
    });
	});
	</script>
@stop
