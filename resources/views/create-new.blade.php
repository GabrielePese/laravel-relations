@extends('layouts.main-layout')
@section('content')

<form action="{{route('emp-store')}}" method="post">
    @csrf
    @method('post')

  <div class="form-group">
      <label for="name">name</label>
      <input type="text" name="name" value="">
  </div>
  <div class="form-group">
    <label for="lastname">lastname</label>
    <input type="text" name="lastname" value="">
</div>
<div class="form-group">
    <label for="location_id">location</label>
    <select name="location_id">
        @foreach ($locs as $item)
            <option value="{{$item -> id}}"> {{$item -> city}} </option>
        @endforeach

    </select>
</div>

<button type="submit"> CREA</button>
</form>

<a id="aaa" href="{{route('emp-index')}}">TORNA INDEX</a>
@endsection