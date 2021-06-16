@extends('layouts.appBack')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">filtre</h5>
            <p>nom:{{ $filtre->nom }}</p>


          <a href="{{ route("filtres.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection