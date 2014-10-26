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


    <?php $tr_date = trans('timeline.date'); ?>
    @foreach($events as $event)
        <?php
        $tr_head = trans('timeline.' . $event['trans_name'] . '-head', array('urlroot' => $url_root));
        $tr_body = trans('timeline.' . $event['trans_name'] . '-body', array('urlroot' => $url_root));

        $datestr = '';

        if ($event['date'] != '0000-00-00') {
            if (substr($event['date'], 5) == '01-01') {
                $datestr = '<p>' . $tr_date . ': ' . substr($event['date'], 0, 4) . '</p>';
            } else {
                $datestr = '<p>' . $tr_date . ': ' . $event['date'] . '</p>';
            }
        }

        ?>

        <!-- Timeline ID: {{ $event['id'] }} -->
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <h2>{{ $tr_head }}</h2>
                {{ $datestr }}

                <p>
                    {{ $tr_body }}
                </p>
            </div>
        </div>
        <br>
    @endforeach
</div>
@stop