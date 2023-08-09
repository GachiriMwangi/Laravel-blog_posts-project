@extends('layouts.app')

@section('content')
<a href="/lsapp/public/myposts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

<div>

    {{$post->body}}

</div>

<small>Written on {{$post->created_at}}</small>
<br/>
<a href="/lsapp/public/myposts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!! Form::open(['action' => ['MyPostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

{!!Form::close()!!}
@endsection
