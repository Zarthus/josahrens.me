@extends('layouts.default')

@section('description', 'Find out how to contact me.')
@stop

@section('title', 'Contact')
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
    

</div>
@stop