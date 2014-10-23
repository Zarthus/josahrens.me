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
            <a href="https://github.com/Zarthus/School-Project-Webshop" target="_blank">Core Dump - Webshop for School Project</a> - February, 2014<br>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.links_contrib') }}</strong>
        </div>
        <div class="col-md-5">
            <a href="https://github.com/ClouDev/CloudBot" target="_blank">CloudBot</a> (Python)<br>
            <a href="https://github.com/aca20031/hsbot" target="_blank">Hearthstone Bot</a> (C#)<br>
            <a href="https://github.com/nasonfish/regolf" target="_blank">Regolf - a regular expression game</a> (Perl)<br>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.links_feedback') }}</strong>
        </div>
        <div class="col-md-5">
            <a href="https://github.com/znc/znc">ZNC</a> (feedback, {{ trans('resume.bug_reporting') }}, {{ trans('resume.assistance') }})<br>
            <a href="http://regex101.com">Regex101</a> (feedback, {{ trans('resume.bug_reporting') }}, {{ trans('resume.assistance') }})<br>
            <a href="http://weechat.org">Weechat</a> (feedback)<br>
        </div>
    </div>
    <hr> <!-- ! Links -->


    <div class="row text-center-sm">
         <div class="col-md-offset-4 col-md-5">
             <strong>{{ trans('resume.languages_body') }}</strong>
         </div>
    </div>
    <br>

    <div class="row text-center-sm">
         <div class="col-md-offset-2 col-md-2">
             <strong>{{ trans('resume.languages_head_spoken') }}</strong>
         </div>
         <div class="col-md-5">
             {{ trans('resume.languages_body_spoken') }}
         </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.languages_head_program') }}</strong>
        </div>
        <div class="col-md-5">
            <?php
                $languages = array('HTML', 'CSS', 'PHP', 'SQL', 'JavaScript', 'Java', 'Bash', 'Regular Expressions',
                                   'Python', 'C', 'C++', 'C#', 'Visual Basic', 'Android', 'Perl'); // in order of learning sorted to alphabetically.
                sort($languages);
                echo implode(', ', $languages);
            ?>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.languages_head_libs') }}</strong>
        </div>
        <div class="col-md-5">
            <?php
                $worked_libs = array('Bootstrap', 'JQuery', 'Code Igniter', 'AngularJS', 'Laravel');
                sort($worked_libs);
                echo implode(', ', $worked_libs);
            ?>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.languages_head_likes') }}</strong>
        </div>
        <div class="col-md-5">
            <?php
                $languages_likes = array('PHP', 'Java', 'Python', 'C++', 'C#'); // in order of learning sorted to alphabetically.
                sort($languages_likes);
                echo implode(', ', $languages_likes);
            ?>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.languages_head_dislikes') }}</strong>
        </div>
        <div class="col-md-5">
            <?php
                $languages_dislikes = array('CSS', 'Assembly', 'Visual Basic'); // in order of learning sorted to alphabetically.
                sort($languages_dislikes);
                echo implode(', ', $languages_dislikes);
            ?>
        </div>
    </div>
    <hr> <!-- ! Profiles -->

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.education_head') }}</strong>
        </div>
        <div class="col-md-5">
            Alfa College Groningen, {{ trans('resume.education_appdev') }}, MBO 4
        </div>
        <div class="col-md-2">
            2013 - 2016
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-4 col-md-5">
            Alfa College Hoogeveen, {{ trans('resume.education_teachers_assistant') }}, MBO 4, {{ trans('resume.unfinished') }}
        </div>
        <div class="col-md-2">
            2011 - 2013
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-4 col-md-5">
            Esdal College Klazienaveen, {{ trans('resume.education_construction') }}, Kader Bouw, graduated
        </div>
        <div class="col-md-2">
            2007 - 2011
        </div>
    </div>
    <hr> <!-- ! Education -->

    <div class="row text-center-sm">
        <div class="col-md-offset-4 col-md-5">
            <strong>{{ trans('resume.workexp_head') }}</strong>
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.workexp_agency') }}</strong>
        </div>
        <div class="col-md-5">
            <a href="http://timing.nl">Timing</a> - {{ trans('resume.workexp_timing_tasks') }}
        </div>
        <div class="col-md-1">
            2013
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.workexp_voluntary') }}</strong>
        </div>
        <div class="col-md-5">
            {{ trans('resume.basic_voluntary_contrib') }}
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <br>

    <div class="row text-center-sm">
        <div class="col-md-offset-2 col-md-2">
            <strong>{{ trans('resume.workexp_intern') }}</strong>
        </div>
        <div class="col-md-5">
            {{ trans('resume.internship_teacher_assistant') }}
        </div>
        <div class="col-md-1">
            2012, 2013
        </div>
    </div>
    <!-- ! Work Experience -->

</div>
@stop