@extends('layouts.default')

@section('description', 'Home page of josahrens.me, the personal website of Jos \'Zarthus\' Ahrens.')
@stop

@section('title', 'Home')
@stop

@section('header-text', trans('home.header-text'))
@stop

@section('content')
<div class="text-center">
<h1 >Some kind of content</h1>
<?php
for ($i = 0; $i < 5; $i++) {
    echo '<p class="lead-big">Lorem Ipsum dolar sir amit, dolar ser amit i know how to spell french. -french-
            <br>breagging sinfiq atheme inwdaoq qapsl oqwo sak sqp qsop </p>';
    echo '<p class="lead">Lorem Ipsum dolar sir amit, dolar ser amit i know how to spell french. -french-
            <br>breagging sinfiq atheme inwdaoq qapsl oqwo sak sqp qsop </p>';
}
?>
</div>
@stop