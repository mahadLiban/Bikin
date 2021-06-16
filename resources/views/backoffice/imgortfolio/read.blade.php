@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset("img/" . $imgortfolio->img) }}" alt=""> 
          <h5 class="card-title">imgortfolio</h5>
          <p>filtre:{{ $imgortfolio->filter->nom }}</p>

          <a href="{{ route("imgortfolios.index") }}" class="btn btn-primary">return imgortfolio</a>
        </div>
      </div>
</div>

@endsection