@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
        <h1>{{$title}}</h1> <!-- Replacing the title with an attribute-->
        <p>Creating an application programming interface using laravel.</p>
        <p><a class="btn btn-primary btn-lg" href="/sign_up/login_with_bootstrap.html" role="button">Login</a>
            &nbsp;&nbsp;<a class="btn btn-success btn-lg" href="/sign_up/sign_up.html" role="button">Register</a></p>
    </div>
        @endsection
