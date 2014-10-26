@extends('layouts.default')

@section('description', 'Find out how to contact me.')
@stop

@section('title', 'Contact')
@stop

@section('header')
<div id="resume-header" class="text-center">
    <h1>
        {{ trans('contact.header-text') }}
    </h1>

    <p>
        {{ trans('contact.header-sub') }}
    </p>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <h2>{{ trans('contact.main-head') }}</h2>
            <p>
                {{ trans('contact.main-body') }}
            </p>

            <p>
                {{ trans('contact.aboutme-body') }}
            </p>

            <p>
                {{ trans('contact.reqport-body') }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <h2>{{ trans('contact.email-head') }}</h2>
            <p>
                {{ trans('contact.email-body') }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <h2>{{ trans('contact.so-head') }}</h2>
            <p>
                {{ trans('contact.so-body') }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <h2>{{ trans('contact.feedback-head') }}</h2>
            <p>
                {{ trans('contact.feedback-body') }}
            </p>
        </div>
    </div>
</div>
@stop