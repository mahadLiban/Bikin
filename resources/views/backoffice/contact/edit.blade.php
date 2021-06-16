@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit contact</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/contacts/{{ $contact->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3 ">
          <label class="form-label ">Icon</label>
          <br>
          <input type="radio" class="btn-check" name="logo" value="bx bx-location-plus" id="option1" autocomplete="off" checked>
          <label class="btn btn-secondary" for="option1"><i class="bx bx-location-plus"></i></label>

          <input type="radio" class="btn-check" name="logo" value="bx bx-mail-send" id="option2" autocomplete="off">
          <label class="btn btn-secondary" for="option2"><i class="bx bx-mail-send"></i></label>


          <input type="radio" class="btn-check" name="logo" value="bx bx-phone-call" id="option3" autocomplete="off">
          <label class="btn btn-secondary" for="option3"><i class="bx bx-phone-call"></i></label>

        </div>    
        <div class="mb-3">
            <label class="form-label">Texte</label>
            <input value="{{ $contact->text }}" type="text" class="form-control"  name="text">
          </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input value="{{ $contact->email1 }}" type="text" class="form-control"  name="email1">
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <input value="{{ $contact->description }}" type="text" class="form-control"  name="description">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection