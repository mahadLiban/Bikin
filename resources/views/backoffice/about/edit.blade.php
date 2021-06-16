@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit about</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/abouts/{{ $about->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3 ">
          <label class="form-label ">Icone</label>
          <br>
          <input type="radio" class="btn-check" name="logo" value="bx bx-chevron-right" id="option1" autocomplete="off" checked>
          <label class="btn btn-secondary" for="option1"><i class="bx bx-chevron-right"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-receipt" id="option2" autocomplete="off">
          <label class="btn btn-secondary" for="option2"><i class="bx bx-receipt"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-cube-alt" id="option3" autocomplete="off">
          <label class="btn btn-secondary" for="option3"><i class="bx bx-cube-alt"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-imagesr" id="option4" autocomplete="off">
          <label class="btn btn-secondary" for="option4"><i class="bx bx-images"></i></label>


          <input type="radio" class="btn-check" name="logo" value="bx bx-shield" id="option5" autocomplete="off">
          <label class="btn btn-secondary" for="option5"><i class="bx bx-shield"></i></label>

          

        </div>    

          <div class="mb-3">
            <label class="form-label">petit Titre1</label>
            <input value="{{ $about->petitTitre1 }}" type="text" class="form-control"  name="petitTitre1">
          </div>
          <div class="mb-3">
            <label class="form-label">sous Titre 1</label>
            <input value="{{ $about->sousTitre1 }}" type="text" class="form-control"  name="sousTitre1">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection