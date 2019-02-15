@extends('layouts.master')

@section('content')
    @foreach($links as $link)
        <h2>{{ $link->title }}</h2>
        <a href="{{ $link->url }}">Website</a>
        <p>{{ $link->description }}</p>
        <hr>
    @endforeach
@endsection