@extends('layouts.main-layout')
@section('content')

 {{-- Qui sotto metto $employ perche'e'come ho salvato nel controller nello store. 
 $employ = Employee::findOrFail($id);  --}}

<h1>{{$employ ->name }} {{$employ -> lastname}}</h1>

<a id="aaa" href="{{route('emp-index')}}">TORNA INDEX</a>
@endsection