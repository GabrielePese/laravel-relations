@extends('layouts.main-layout')
@section('content')

<h1>{{$employ ->name }} {{$employ -> lastname}}</h1>

<a id="aaa" href="{{route('emp-index')}}">TORNA INDEX</a>
@endsection