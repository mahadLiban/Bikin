@extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create service</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("services.store")  }}" enctype="multipart/form-data">
        @csrf
        
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

          <input type="radio" class="btn-check" name="logo" value="bi bi-linkedin" id="option4" autocomplete="off">
          <label class="btn btn-secondary" for="option4"><i class="bi bi-linkedin"></i></label>

        </div>    
        <div class="mb-3">
            <label class="form-label">petitTitre</label>
            <input type="text" class="form-control"  name="petitTitre">
        </div>

        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" class="form-control"  name="description">
        </div>
    

         


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection 