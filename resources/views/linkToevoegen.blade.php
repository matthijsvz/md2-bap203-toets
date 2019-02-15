@extends('layouts.master')

@section('content')
@if ($errors->any())
       <h4>The following error occured:</h4>
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif
<form action="{{ route('linkToevoegen') }}" method="post">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description" value="{{ old('description') }}">
  </div>
  <div class="form-group">
    <label for="url">URL</label>
    <input type="url" class="form-control" id="url" placeholder="Enter URL" name="url" value="{{ old('url') }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{ route('home') }}">Klik hier om terug te gaan naar de home pagina</a>
@endsection