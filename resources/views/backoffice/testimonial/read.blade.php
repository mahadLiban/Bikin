@extends('layouts.appBack')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img style="width : 200px" src={{ asset('img/'. $testimonial->pdp) }} alt="">        <div class="card-body">
          <h5 class="card-title underline"><u>testimonial</u> </h5>
            <p><span class="text-danger bold">Paragraphe</span>  :{{ $testimonial->paragraphe }}</p>
            <hr>
            <p> <span class="text-danger bold">nom</span>  : {{ $testimonial->nom }}</p>
            <hr>
            <p> <span class="text-danger bold">role</span> :{{ $testimonial->role }}</p>


          <a href="{{ route("testimonials.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection