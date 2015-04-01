@extends('master')

        @section('slider')
                @stop

        @section('content')
        <div class="container-fluid">
<div class="section-heading scrollpoint sp-effect5">
    <h3>{{ strtoupper($mainPage->title) }}</h3>
    </div>
        {!! $mainPage->body !!}
</div>

        @stop