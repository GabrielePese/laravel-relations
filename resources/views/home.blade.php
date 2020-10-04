@extends('layouts.main-layout')
@section('content')
<br>
<a id="create" href="{{route('emp-create')}}"> Crea NUOVO</a>
<br><br>
<ul>
@foreach ($emplo as $item)
<li>
    <a href="{{route('emp-show', $item -> id)}}"> 

    {{$item -> name}} {{$item -> lastname}}   

    </a>
</li>
    <a href="{{route('emp-delete', $item -> id)}}">X</a>
 @endforeach
</ul> 

@endsection