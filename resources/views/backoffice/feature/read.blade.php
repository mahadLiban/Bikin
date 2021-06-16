@extends('layouts.appBack')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">about</h5>
             <p>image:{{ $about->img }}</p>
            <p>Titre :{{ $about->petitTitre }}</p>
            <p>Sous Titre :{{ $about->sousTitre }}</p>
            <p>li1:{{ $about->li1 }}</p>
            <p>li2:{{ $about->li2 }}</p>
            <p>li3:{{ $about->li3 }}</p>
            <p>Description :{{ $about->description }}</p>


          <a href="{{ route("abouts.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection