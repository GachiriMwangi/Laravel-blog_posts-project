@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div >
                <div style="font-size: 30px;">{{ __('Dashboard') }}</div>

                <div >
                    <br/>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<a href="myposts" class="btn btn-success">
    All Articles
</a>
                    <a href="myposts/create" class="btn btn-primary">Create Post</a>
<br/><br/>
                    <h3>Your Blog Posts</h3>

                    @if(count($myposts) > 0)

                    <table class="table table-striped">

                        <tr>

                    <th>Title</th>
                    <th></th>
                    <th></th>


                        </tr>
@foreach($myposts as $post)

<tr>
    <td>{{$post->title}}</td>
    <td><a href="/lsapp/public/myposts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </td>
    <td>
        {!!Form::open(['action' => ['gpostscontroller@destroy', $post->id], 'method' => 'POST',  'class' => 'pull right'])!!}

        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}

        {!!Form::close()!!}


    </td>
</tr>
@endforeach

                    </table>

@else <p>You currently have no posts. </p>
@endif




                    {{ __('') }}

                    {{__('')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
