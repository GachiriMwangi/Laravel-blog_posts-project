@extends('layouts.app')

@section('content')

{!!Form::open(['action' => ['gpostscontroller@update' , $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
<div class="form-group">
{{Form::label('title', 'Title')}}
{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

{{Form::label('body', 'Body')}}
{{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}

</div>

<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!!Form::close()!!}




@endsection
