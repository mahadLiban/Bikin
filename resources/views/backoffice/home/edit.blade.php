@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit home</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/homes/{{ $home->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
            <label class="form-label">Texte btn</label>
            <input value="{{ $home->btnTxt }}" type="text" class="form-control"  name="btnTxt">
          </div>

          <div class="mb-3">
            <label class="form-label">Image</label>
            <input value="{{ $home->img }}"   type="file" class="form-control"  name="img">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection