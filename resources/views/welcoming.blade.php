@extends('layouts.app')
@vite(['resources/scss/app.scss'])
@section('content')
    <div class="jumbotron text-center">
<h1 class="container">Hello Sass.</h1>
<span id="span1"></span>
<h4>Nice Work.</h4>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>&nbsp;&nbsp;<a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endsection

