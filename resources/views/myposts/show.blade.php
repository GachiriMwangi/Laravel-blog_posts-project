@extends('layouts.app')

@section('content')
<br/>
<div>
<a href="/lsapp/public/myposts">
    <button class="btn btn-primary">
        Go back</button></a>
<h1>{{$post->title}}</h1>

<h6>{{$post->body}}</h6>



<small>Written on {{$post->created_at}}. </small>
<br/>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<table>
    <tr>
        <td>
<a href="/lsapp/public/myposts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
<br/>
        </td>

<td>
{!! Form::open(['action' => ['gpostscontroller@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}

{!!Form::close()!!}

        </td>
    </tr>
</table>
@endif
@endif
</div>
@endsection
<!-- Display the image here
    <img style="width: 100%;" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"

<div>
-->
