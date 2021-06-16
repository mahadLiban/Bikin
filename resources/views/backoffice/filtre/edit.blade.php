@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit filtre</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/filtres/{{ $filtre->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        
       
        <div class="mb-3">
            <label class="form-label">nom</label>
            <input value="{{ $filtre->nom }}" type="text" class="form-control"  name="nom">
          </div>
          
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection