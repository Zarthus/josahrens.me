@extends('layouts.default')
@section('description', 'This page is not yet available.')
@stop

@section('title', 'Under Construction')
@stop

@section('header-head', 'Jos Ahrens')
@stop

@section('header-body')
<p class="intro-text">
    {{ trans('construction.header-text') }}
</p>
@stop


@section('content')
<h1 class="text-center">{{ trans('construction.under_construction_h1') }}</h1>
<h2 class="text-center">{{ trans('construction.under_construction_h2') }}</h2>
@stop