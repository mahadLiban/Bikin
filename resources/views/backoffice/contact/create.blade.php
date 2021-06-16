{{-- @extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create contact</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("contacts.store")  }}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3 ">
          <label class="form-label ">icon</label>
          <br>
          <input type="radio" class="btn-check" name="logo" value="bx bxl-dribbble" id="option1" autocomplete="off" checked>
          <label class="btn btn-secondary" for="option1"><i class="bx bxl-dribbble"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-file" id="option2" autocomplete="off">
          <label class="btn btn-secondary" for="option2"><i class="bx bx-file"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-tachometer" id="option3" autocomplete="off">
          <label class="btn btn-secondary" for="option3"><i class="bx bx-tachometer"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-layer" id="option4" autocomplete="off">
          <label class="btn btn-secondary" for="option4"><i class="bx bx-layer"></i></label>


          <input type="radio" class="btn-check" name="logo" value="bx bx-slideshow" id="option5" autocomplete="off">
          <label class="btn btn-secondary" for="option5"><i class="bx bx-slideshow"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-arch" id="option6" autocomplete="off">
          <label class="btn btn-secondary" for="option6"><i class="bx bx-arch"></i></label>

        </div>    
    

            <div class="mb-3">
            <label class="form-label">Titre </label>
            <input type="text" class="form-control"  name="text">
          </div> 

          <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control"  name="email">
          </div> 

          <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" class="form-control"  name="description">
          </div> 
            


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection --}}