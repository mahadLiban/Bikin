@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset("img/" . $home->img) }}" alt=""> 
          <h5 class="card-title">home</h5>
            <p>Bouton texte:{{ $home->btnTxt }}</p>

          <a href="{{ route("homes.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>

@endsection