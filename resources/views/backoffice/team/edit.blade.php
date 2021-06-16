@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit team</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/teams/{{ $team->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")

        <div class="mb-3 ">
            <label class="form-label ">icon</label>
            <br>
            <input type="radio" class="btn-check" name="icone" value="bi bi-twittere" id="option1" autocomplete="off" checked>
            <label class="btn btn-secondary" for="option1"><i class="bi bi-twitter"></i></label>
  
            <input type="radio" class="btn-check" name="icone" value="bi bi-facebook" id="option2" autocomplete="off">
            <label class="btn btn-secondary" for="option2"><i class="bi bi-facebook"></i></label>
  
            <input type="radio" class="btn-check" name="icone" value="bi bi-instagram" id="option3" autocomplete="off">
            <label class="btn btn-secondary" for="option3"><i class="bbi bi-instagram"></i></label>
  
            <input type="radio" class="btn-check" name="icone" value="bi bi-linkedin" id="option4" autocomplete="off">
            <label class="btn btn-secondary" for="option4"><i class="bi bi-linkedin"></i></label>
  
          </div> 

          <div class="mb-3">
            <label class="form-label">Image</label>
            <input value="{{ $team->img }}"   type="file" class="form-control"  name="img">
          </div>
   
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection