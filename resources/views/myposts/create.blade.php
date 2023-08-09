@extends('layouts.app')

@section('content')

<h1>Create a post</h1>

{!!Form::open(['action' => 'gpostscontroller@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

<div class='form-group'>
{{Form::label('title', 'Title')}}
{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

{{Form::label('body', 'Body')}}
{{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}

<div class="form-group">
    {{Form::file('cover_image')}}
</div>
<a href="/lsapp/public/dashboard" class="btn btn-secondary">
    Cancel
</a>
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

</div>

{!!Form::close()!!}


@endsection


