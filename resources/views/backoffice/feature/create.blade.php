@extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create about</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("abouts.store")  }}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control"  name="img">
        </div>

        <div class="mb-3">
            <label class="form-label">petit Titre</label>
            <input type="text" class="form-control"  name="petitTitre">
          </div> 
          
          <div class="mb-3">
            <label class="form-label">Sous titre</label>
            <input type="text" class="form-control"  name="sousTitre">
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
            <label class="form-label">description</label>
            <input type="text" class="form-control"  name="description">
        </div>
        


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection 