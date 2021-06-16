@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit footer</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/footers/{{ $footer->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
          <label class="form-label">Titre1</label>
          <input value="{{ $footer->footerTitre1 }}" type="text" class="form-control"  name="footerTitre1">
        </div>

        <div class="mb-3">
            <label class="form-label">Titre2</label>
            <input value="{{ $footer->footerTitre2 }}" type="text" class="form-control"  name="footerTitre2">
          </div>

          <div class="mb-3">
            <label class="form-label">Titre3</label>
            <input value="{{ $footer->footerTitre3 }}" type="text" class="form-control"  name="footerTitre2">
          </div>

          <div class="mb-3">
            <label class="form-label">Titre4</label>
            <input value="{{ $footer->footerTitre4 }}" type="text" class="form-control"  name="footerTitre2">
          </div>

          <div class="mb-3">
            <label class="form-label">description</label>
            <input value="{{ $footer->description }}" type="text" class="form-control"  name="description">
          </div>
          <div class="mb-3">
            <label class="form-label">description2</label>
            <input value="{{ $footer->description2 }}" type="text" class="form-control"  name="description2">
          </div>

          <div class="mb-3">
            <label class="form-label">phone</label>
            <input value="{{ $footer->phone }}" type="text" class="form-control"  name="phone">
          </div>

          <div class="mb-3">
            <label class="form-label">email</label>
            <input value="{{ $footer->email }}" type="text" class="form-control"  name="email">
          </div>

          <div class="mb-3">
            <label class="form-label">li1</label>
            <input value="{{ $footer->li1 }}" type="text" class="form-control"  name="li1">
          </div>

          <div class="mb-3">
            <label class="form-label">li2</label>
            <input value="{{ $footer->li2 }}" type="text" class="form-control"  name="li2">
          </div>

          <div class="mb-3">
            <label class="form-label">li3</label>
            <input value="{{ $footer->li3 }}" type="text" class="form-control"  name="li3">
          </div>

          <div class="mb-3">
            <label class="form-label">li4</label>
            <input value="{{ $footer->li4 }}" type="text" class="form-control"  name="li4">
          </div>

          <div class="mb-3">
            <label class="form-label">li5</label>
            <input value="{{ $footer->li5 }}" type="text" class="form-control"  name="li5">
          </div>

          <div class="mb-3">
            <label class="form-label">li6</label>
            <input value="{{ $footer->li6 }}" type="text" class="form-control"  name="li6">
          </div>

          <div class="mb-3">
            <label class="form-label">li7</label>
            <input value="{{ $footer->li7 }}" type="text" class="form-control"  name="li7">
          </div>

          <div class="mb-3">
            <label class="form-label">li8</label>
            <input value="{{ $footer->li8 }}" type="text" class="form-control"  name="li8">
          </div>

          <div class="mb-3">
            <label class="form-label">li9</label>
            <input value="{{ $footer->li9 }}" type="text" class="form-control"  name="li9">
          </div>

          <div class="mb-3">
            <label class="form-label">li10</label>
            <input value="{{ $footer->li10 }}" type="text" class="form-control"  name="li10">
          </div>

          <div class="mb-3">
            <label class="form-label">btnTxt</label>
            <input value="{{ $footer->btnTxt }}" type="text" class="form-control"  name="btnTxt">
          </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection