@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit service</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
service
  </ul>
    <form method="POST" action="/services/{{ $service->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")

        <div class="mb-3 ">
            <label class="form-label ">icon</label>
            <br>
            <input type="radio" class="btn-check" name="logo" value="bx bxl-dribbble" id="option1" autocomplete="off" checked>
            <label class="btn btn-secondary" for="option1"><i class="bx bxl-dribbble"></i></label>
  
            <input type="radio" class="btn-check" name="logo" value="bx bx-file" id="option1" autocomplete="off" checked>
            <label class="btn btn-secondary" for="option1"><i class="bx bx-file"></i></label>
  
            <input type="radio" class="btn-check" name="logo" value="bx bx-tachometer" id="option2" autocomplete="off">
            <label class="btn btn-secondary" for="option2"><i class="bx bx-tachometer"></i></label>
  
            <input type="radio" class="btn-check" name="logo" value="bx bx-layer" id="option3" autocomplete="off">
            <label class="btn btn-secondary" for="option3"><i class="bx bx-layer"></i></label>

          </div>    
          
        <div class="mb-3">
            <label class="form-label">petit Titre</label>
            <input value="{{ $service->petitTitre }}" type="text" class="form-control"  name="petitTitre">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <input value="{{ $service->description }}" type="text" class="form-control"  name="description">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection