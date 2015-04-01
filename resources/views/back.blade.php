@extends('master')

    @section('content')
        <section id="stateprofile">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect5">
                <h3>{{ strtoupper($page->title) }}</h3>
                </div>
                    {!! $page->body !!}
                </div>
               
        </section>
    @stop       