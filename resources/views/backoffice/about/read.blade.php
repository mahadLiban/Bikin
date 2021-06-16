@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">titre</h5>
            <p>Icone :{{ $about->logo }}</p>
            <p>petit Titre :{{ $about->petitTitre }}</p>
            <p>sous Titre :{{ $about->sousTitre }}</p>
            <p>btn Txt :{{ $about->btnTxt }}</p>
            <p>petit Titre1 :{{ $about->petitTitre1 }}</p>
            <p>sous Titre1 :{{ $about->sousTitre1 }}</p>
          <a href="{{ route("abouts.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>

@endsection