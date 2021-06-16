@extends('layouts.appBack')
@section('content')
    

<section class="container">
    <h2 class="text-center my-4 bg-danger">Create testimonial</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("testimonials.store")  }}" enctype="multipart/form-data">
        @csrf
        
       
          
          <div class="mb-3">
            <label class="form-label">paragraphe</label>
            <input type="text" class="form-control"  name="paragraphe">
          </div>    
            
        <div class="mb-3">
            <label class="form-label">Photo de profil</label>
            <input type="file" class="form-control"  name="pdp">
        </div>
        <div class="mb-3">
            <label class="form-label">nom</label>
            <input type="text" class="form-control"  name="nom">
        </div>
            <div>

                <label class="form-label">Role</label>
                <select class="form-select" name="role">
                    <option selected>Choisissez un role</option>
                    <option value="CEO founder">CEO founder</option>
                    <option value="Freelance">Freelance</option>
                    <option value="Store Owner">Store Owner</option>
                    <option value="Entrepreneur">Entrepreneur</option>
                    <option value="Entrepreneur">Designer</option>

                </select>
            </div>
       
        


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</section>

@endsection