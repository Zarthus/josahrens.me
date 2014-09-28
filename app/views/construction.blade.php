@extends('layouts.default')
@section('description', 'This page is not yet available.')
@stop

@section('title', 'Under Construction')
@stop

@section('header-head', 'Under Construction..')
@stop

@section('header-body')
<p class="intro-text">
    {{ trans('construction.header-text') }}
</p>
@stop


@section('content')
<h3 class="text-center">{{ trans('construction.under_construction') }}</h3>
@stop