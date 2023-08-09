@extends('layout.app')

@section('content')

<h2>Array Content Goes here.</h2>

@if(count($sports) > 0)
<ul>
@foreach($sports as $sport)
<li>{{$sport}}</li>
@endforeach

</ul>
@endif

@endsection
