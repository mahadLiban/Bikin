@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit titre</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/titres/{{ $titre->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
          <label class="form-label">titre</label>
          <input value="{{ $titre->titre }}" type="text" class="form-control"  name="titre">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input value="{{ $titre->description }}" type="text" class="form-control"  name="description">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection