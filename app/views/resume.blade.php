@extends('layouts.default')

@section('description', 'Résumé of Jos Ahrens')
@stop

@section('title', 'Résumé')
@stop

@section('header')
<div id="resume-header" class="text-center">
    <h1>
        {{ trans('resume.header-text') }}
    </h1>

    <p>
        {{ trans('resume.header-sub') }} &middot; <a href="#" class="js-display-email">please enable JavaScript</a>
    </p>
</div>
@stop

@section('content')
<div class="container">

    <div class="row text-center-sm">
        <div class="col-md-offset-4 col-md-4">
            <strong>{{ trans('resume.about_head') }}</strong>
        </div>
    </div>

    <div class="row text-center-sm">
        <div class="col-md-offset-4 col-md-4">
            {{ trans('resume.about_body') }}
        </div>
    </div>
    <br> <!-- ! About -->

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.links_self') }}</strong>
        </div>
        <div class="col-md-5">
            <a href="https://github.com/zarthus" target="_blank">GitHub</a><br>
            <a href="http://stackoverflow.com/users/3100691/zarthus" target="_blank">Stack Overflow</a><br>
            <a href="https://careers.stackoverflow.com/zarthus" target="_blank">Stack Overflow Careers</a><br>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.links_created') }}</strong>
        </div>
        <div class="col-md-5">
            <a href="http://josahrens.me" target="_blank">josahrens.me - personal website</a> - September, 2014<br>
            <a href="http://zarth.us" target="_blank">zarth.us - my own website</a> - March, 2014<br>
        </div>
    </div>
    <!--
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.links_contrib') }}</strong>
        </div>
        <div class="col-md-5">
        </div>
    </div>
    -->
    <hr> <!-- ! Links -->

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.languages_head') }}</strong>
        </div>
        <div class="col-md-5">
            {{ trans('resume.profiles_body') }}
        </div>
    </div>
    <hr> <!-- ! Profiles -->

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.education_head') }}</strong>
        </div>
        <div class="col-md-5">
            {{ trans('resume.education_body') }}
        </div>
        <div class="col-md-1">
            {{ trans('resume.education_timestamp') }}
        </div>
    </div>
    <hr> <!-- ! Education -->

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.workexp_head') }}</strong>
        </div>
        <div class="col-md-5">
            {{ trans('resume.workexp_body') }}
        </div>
        <div class="col-md-1">
            {{ trans('resume.workexp_timestamp') }}
        </div>
    </div>
    <!-- ! Work Experience -->

</div>
@stop