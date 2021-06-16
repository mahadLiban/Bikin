@extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create titre</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("titres.store")  }}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
          <label class="form-label">titre</label>
          <input type="text" class="form-control"  name="footerTitre">
        </div>     
            
        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" class="form-control"  name="description">
        </div>

        <div class="mb-3">
            <label class="form-label">phone</label>
            <input type="text" class="form-control"  name="phone">
        </div>


        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control"  name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">li1</label>
            <input type="text" class="form-control"  name="li1">
        </div>

        <div class="mb-3">
            <label class="form-label">li2</label>
            <input type="text" class="form-control"  name="li2">
        </div>

        <div class="mb-3">
            <label class="form-label">li3</label>
            <input type="text" class="form-control"  name="li3">
        </div>

        <div class="mb-3">
            <label class="form-label">li4</label>
            <input type="text" class="form-control"  name="li4">
        </div>

        <div class="mb-3">
            <label class="form-label">li5</label>
            <input type="text" class="form-control"  name="li5">
        </div>

        <div class="mb-3">
            <label class="form-label">li6</label>
            <input type="text" class="form-control"  name="li6">
        </div>

        <div class="mb-3">
            <label class="form-label">li7</label>
            <input type="text" class="form-control"  name="li7">
        </div>

        <div class="mb-3">
            <label class="form-label">li8</label>
            <input type="text" class="form-control"  name="li8">
        </div>

        <div class="mb-3">
            <label class="form-label">li9</label>
            <input type="text" class="form-control"  name="li9">
        </div>

        <div class="mb-3">
            <label class="form-label">li10</label>
            <input type="text" class="form-control"  name="li10">
        </div>

        <div class="mb-3">
            <label class="form-label">btnTxt</label>
            <input type="text" class="form-control"  name="btnTxt">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection