<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAPP')}}</title>


    </head>
    <body>
        <h1>About</h1>
        <p>The About Handle</p>
    </body>
</html>

-->

@extends('layouts.app')

@section('content')

<h1>About</h1>
<p>The About Handle</p>

<p>{{$about_page}}</p>

@endsection
