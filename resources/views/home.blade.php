@extends('layouts.main-layout')
@section('content')
<ul>
@foreach ($emplo as $item)
<a href="{{route('emp-show', $item -> id)}}"> 
    <li>{{$item -> name}} {{$item -> lastname}}</li>
    </a>
 @endforeach
</ul> 

@endsection