@extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create filtre</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("filtres.store")  }}" enctype="multipart/form-data">
        @csrf
        
       
          
          <div class="mb-3">
            <label class="form-label">Nom filtre</label>
            <input type="text" class="form-control"  name="nom">
          </div>    
            
        


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection