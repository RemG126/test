@extends('layouts.template')

@section('content')

<form action="{{route('crud.store')}}" method="POST">
    @csrf
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

@endsection
