@extends('layouts.master')
@section('content')
    <p>Yes, het is gelukt!!</p>
    <p>De link staat nu in de database</p>
    <a href="{{ route('home') }}">Klik hier om terug te gaan</a>
@endsection