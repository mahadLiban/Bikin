@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit feature</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/features/{{ $feature->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")

        <div class="mb-3">
            <label class="form-label">image</label>
            <input value="{{ $feature->img }}" type="file" class="form-control"  name="img">
          </div>

        <div class="mb-3">
          <label class="form-label">Petit Titre</label>
          <input type="text" value="{{ $feature->petitTitre }}" class="form-control"  name="petitTitre">
        </div> 
        
        <div class="mb-3">
          <label class="form-label">Sous titre</label>
          <input type="text" value="{{ $feature->sousTitre }}" class="form-control"  name="sousTitre">
        </div> 

        <div class="mb-3">
            <label class="form-label">li1</label>
            <input value="{{ $feature->li1 }}" type="text" class="form-control"  name="li1">
          </div>

          <div class="mb-3">
            <label class="form-label">li2</label>
            <input value="{{ $feature->li2 }}" type="text" class="form-control"  name="li2">
          </div>

          <div class="mb-3">
            <label class="form-label">li3</label>
            <input value="{{ $feature->li3 }}" type="text" class="form-control"  name="li3">
          </div>
          <div class="mb-3">
            <label class="form-label">description</label>
            <input value="{{ $feature->description }}" type="text" class="form-control"  name="description">
          </div>

          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection