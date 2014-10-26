@extends('layouts.default')

@section('description', 'The josahrens.me timeline, venture through the years.')
@stop

@section('title', 'Home')
@stop

@section('header')
<div id="hero-background" class="hero-background-index">
    <div class="container">
        <header class="intro">
            <div class="hero-unit">
                <h1>
                    {{ trans('timeline.header-text') }}
                </h1>
                <h4>
                    {{ trans('timeline.header-text-sub') }}
                </h4>

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
    {{ $timeline_html }}
</div>
@stop