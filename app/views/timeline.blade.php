@extends('layouts.default')

@section('description', 'The josahrens.me timeline, venture through the years.')
@stop

@section('title', 'Timeline')
@stop

@section('header')
<div id="hero-background" class="hero-background-time">
    <div class="container">
        <header class="intro">
            <div class="hero-unit">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 text-center">
                        <button id="hero-button" class="btn btn-primary btn-lg">{{ trans('timeline.begin_journey') }} <i class="fa fa-arrow-down"></i></button>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 text-center">
            <h1>
                {{ trans('timeline.header-text') }}
            </h1>
        </div>
    </div>

    {{ $timeline_html }}
</div>
@stop