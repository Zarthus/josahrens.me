@extends('layouts.default')

@section('description', 'Home page of josahrens.me, the personal website of Jos \'Zarthus\' Ahrens.')
@stop

@section('title', 'Home')
@stop

@section('header-head', 'Home')
@stop

@section('header-body')
<div class="header-image-box">
    <img src="/assets/image/background.png">

</div>
<p class="intro-text">
    {{ trans('home.header-text') }}
</p>
@stop

@section('content')
<div class="container">
    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">

        </div>
        <div class="col-md-6">
            <h2>{{ trans('home.about_me_head') }}</h2>
            <p>
                {{ trans('home.about_me_body') }}
            </p>
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <h2>{{ trans('home.timeline_head') }}</h2>
            <p>
                {{ trans('home.timeline_body') }}
            </p>
        </div>
        <div class="col-md-6">

        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">

        </div>
        <div class="col-md-6">
            <h2>{{ trans('layouts.placeholder_head') }}</h2>
            <p>
                {{ trans('layouts.placeholder_body') }}
            </p>
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <h2>{{ trans('layouts.placeholder_head') }}</h2>
            {{ trans('layouts.placeholder_body') }}
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
@stop