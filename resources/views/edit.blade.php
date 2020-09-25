@extends('layouts.template')

@section('content')

<form action="{{route('crud.update', $person->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$person->name}}">
    <button type="submit">Submit</button>
</form>

@endsection
