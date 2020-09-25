@extends('layouts.template')

@section('content')

<div>
    <a href="{{route('crud.create')}}">Create</a>
</div>
<div>
    <a href="{{route('crud.read')}}">Read</a>
</div>

@endsection