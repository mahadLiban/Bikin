@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">Footer</h5>
            <p>Titre :{{ $footer->footerTitre }}</p>
            <p>Description:{{ $footer->description }}</p>
            <p>Phone:{{ $footer->phone }}</p>
            <p>Email:{{ $footer->email }}</p>
            <p>li1:{{ $footer->li1 }}</p>
            <p>li2:{{ $footer->li2 }}</p>
            <p>li3:{{ $footer->li3 }}</p>
            <p>li4:{{ $footer->li4 }}</p>
            <p>li5:{{ $footer->li5 }}</p>
            <p>li6:{{ $footer->li6 }}</p>
            <p>li7:{{ $footer->li7 }}</p>
            <p>li8:{{ $footer->li8 }}</p>
            <p>li9:{{ $footer->li9 }}</p>
            <p>li10:{{ $footer->li10 }}</p>
            <p>btnTxt:{{ $footer->btnTxt }}</p>

          <a href="{{ route("footers.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>

@endsection