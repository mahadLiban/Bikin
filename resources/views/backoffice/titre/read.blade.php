@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">titre</h5>
            <p>Titre :{{ $titre->titre }}</p>
            <p>Description:{{ $titre->description }}</p>
          <a href="{{ route("titres.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>

@endsection