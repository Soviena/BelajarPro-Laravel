@extends('layout.layout')
@section('content')

@foreach($article as $c)
    <p>{{ $c->chapter }}</p>
    <p>{{ $c->deskripsi }}</p>
@endforeach

@endsection