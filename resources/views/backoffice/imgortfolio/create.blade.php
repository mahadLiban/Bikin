@extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create imgortfolio</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("imgortfolios.store")  }}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
          <label class="form-label">Imgage</label>
          <input type="file" class="form-control"  name="img">
        </div>     

        <div>
            <label  class="form-label">Filter</label>          
            <select  class="form-select"  name="filtre_id">
                <option  selected>Choisissez un filtre</option>
                @foreach ($filtres  as  $filtre)
                <option  value="{{  $filtre->id  }}">{{  $filtre->nom  }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection