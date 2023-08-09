<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAPP')}}</title>


    </head>
    <body>
        <h1>Services page</h1>
        <p>The services we offer include the following: </p>
        <ol type="a">
            <li>Getting you equipped with Laravel skills for you to build your dynamic webpages.</li>
            <li>Sharpen your creativity by offering tasks that require analytical thinking. </li>
        </ol>
    </body>
</html>
-->

@extends('layouts.app')

@section('content')

<h1>{{$title}}</h1>
<!-- <p>The services we offer include the following: </p>-->

@if(count($services) > 0)
<ul class="list-group">
@foreach($services as $service)
<li class="list-group-item">{{$service}}</li>
@endforeach
</ul>
@endif
<ol type="a">
    <li>Getting you equipped with Laravel skills for you to build your dynamic webpages.</li>
    <li>Sharpen your creativity by offering tasks that require analytical thinking. </li>
</ol>

@endsection
