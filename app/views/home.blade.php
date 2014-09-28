@extends('layouts.default')

@section('description', 'Home page of josahrens.me, the personal website of Jos \'Zarthus\' Ahrens.')
@stop

@section('title', 'Home')
@stop

@section('header-head', 'Home')
@stop

@section('header-body')
<p class="intro-text">
    {{ trans('home.header-text') }}
</p>
@stop

@section('content')
<div class="container">
    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <img src="http://placehold.it/350x400" alt="placeholder">
        </div>
        <div class="col-md-6">
            <h2><a href="/portfolio">{{ trans('home.about_me_head') }}</a></h2>
            <p>
                {{ trans('home.about_me_body', array('age' => $age, 'year' => 'third')) }}
            </p>
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <h2><a href="/resume">{{ trans('home.resume_head') }}</a></h2>
            <p>
                {{ trans('home.resume_body') }}
            </p>
        </div>
        <div class="col-md-6">

        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">

        </div>
        <div class="col-md-6">
            <h2><a href="/timeline">{{ trans('home.timeline_head') }}</a></h2>
            <p>
                {{ trans('home.timeline_body') }}
            </p>
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <h2><a href="/contact">{{ trans('home.contact_head') }}</a></h2>
            <p>
                {{ trans('home.contact_body') }}
            </p>
        </div>
        <div class="col-md-6">
        </div>
    </div>

</div>
@stop