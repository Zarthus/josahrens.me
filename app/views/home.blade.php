@extends('layouts.default')

@section('description', 'Home page of josahrens.me, the personal website of Jos \'Zarthus\' Ahrens.')
@stop

@section('title', 'Home')
@stop

@section('header')
<div id="hero-background" class="hero-background-index">
            <div class="container">
                <header class="intro">
                    <div class="hero-unit">
                        <h1>
                            {{ trans('home.header-text') }}
                        </h1>
                        <h3>
                            {{ trans('home.header-text-sub') }}
                        </h3>

                        <div class="row">
                            <div class="col-md-offset-4 col-md-4 text-center">
                                <button id="hero-button" class="btn btn-primary btn-lg">Portfolio <i class="fa fa-arrow-down"></i></button>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
@stop

@section('content')
<div class="container">

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <img src="/assets/image/picture_self.jpg" width='350' height='400' alt="placeholder">
        </div>
        <div class="col-md-6">
            <h2>{{ trans('home.about_me_head') }}</h2>
            <p>
                {{ trans('home.about_me_body', array('age' => $age, 'year' => 'third', 'urlroot' => $url_root)) }}
            </p>
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <h2><a href="{{ $url_root }}/resume">{{ trans('home.resume_head') }}</a></h2>
            <p>
                {{ trans('home.resume_body', array('urlroot' => $url_root)) }}
            </p>
        </div>
        <div class="col-md-6">
            <img src="/assets/image/resume.jpg" alt="placeholder">
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <img src="/assets/image/timeline.jpg" alt="placeholder">
        </div>
        <div class="col-md-6">
            <h2><a href="{{ $url_root }}/timeline">{{ trans('home.timeline_head') }}</a></h2>
            <p>
                {{ trans('home.timeline_body', array('urlroot' => $url_root)) }}
            </p>
        </div>
    </div>

    <div class="row portfolio-block">
        <div class="col-md-offset-2 col-md-4">
            <h2><a href="{{ $url_root }}/contact">{{ trans('home.contact_head') }}</a></h2>
            <p>
                {{ trans('home.contact_body', array('urlroot' => $url_root)) }}
            </p>
        </div>
    </div>

</div>
@stop