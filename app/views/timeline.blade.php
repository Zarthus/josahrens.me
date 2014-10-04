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
    <div id="timeline">

        <span id="time-line-start">&nbsp;</span>
        <div class="row">
            <div class="col-md-offset-2 col-md-1 timeline-dating">
                <p>&nbsp;</p>
            </div>
            <div class="col-md-7">
                <div class="timeline-entry text-left">
                    <p>
                        timeline.did_something()
                    </p>
                </div>
            </div>
        </div>
        <span id="time-line-end">&nbsp;</span>

    </div>
</div>
@stop

@section('scripts')
<script src="/assets/js/timeline.js"></script>
@stop