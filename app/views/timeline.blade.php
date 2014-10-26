@extends('layouts.default')

@section('description', 'The josahrens.me timeline, venture through the years.')
@stop

@section('title', 'Timeline')
@stop

@section('header')
<div id="hero-background" class="hero-background-time">
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


    @foreach($events as $event)
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <h2>{{ $event['head'] }}</h2>
                {{ $event['date'] }}

                <p>
                    {{ $event['body'] }}
                </p>
            </div>
        </div>
        <br>
    @endforeach
</div>
@stop