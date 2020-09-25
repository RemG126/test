@extends('layouts.template')

@section('content')

<form action="{{route('crud.destroy', $id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Yes</button>
    <a href="{{route('crud.read')}}">No</a>
</form>

@endsection