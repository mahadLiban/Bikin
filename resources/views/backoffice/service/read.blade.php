@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">service</h5>
            <p>Icone:{{ $service->logo }}</p>
            <p>petitTitre:{{ $service->petitTitre }}</p>
            <p>description:{{ $service->description }}</p>


          <a href="{{ route("services.index") }}" class="btn btn-primary">return service</a>
        </div>
      </div>
</div>

@endsection