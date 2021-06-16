@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset("img/" . $team->img) }}" alt=""> 

          <h5 class="card-title">team</h5>
            <p>Icone:{{ $team->icone }}</p>

          <a href="{{ route("teams.index") }}" class="btn btn-primary">return team</a>
        </div>
      </div>
</div>

@endsection