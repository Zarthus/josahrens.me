@extends('layouts.default')
@section('description', 'This page is not yet available.')
@stop

@section('title', 'Under Construction')
@stop

@section('header')
<div id="hero-background" class="hero-background-construction">
            <div class="container">
                <header class="intro">
                    <div class="hero-unit">
                        <h1>
                            {{ trans('construction.header-text') }}
                        </h1>
                        <h3>
                            {{ trans('construction.under_construction') }}
                        </h3>
                    </div>
                </header>
            </div>
        </div>
@stop
