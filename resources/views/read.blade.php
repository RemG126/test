@extends('layouts.template')

@section('content')

@foreach($people as $person)
    <div>
        {{$person->name}}
        <a href="{{route('crud.edit', $person->id)}}">Edit</a>
        <a href="{{route('crud.sure', $person->id)}}">Destroy</a>
    </div>
@endforeach

@endsection