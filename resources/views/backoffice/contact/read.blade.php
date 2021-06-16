@extends('layouts.appBack')
@section('content')
    

<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">contact</h5>
            <p>Icon :<i class="{{ $contact->logo }}"></i></p>
            <p>Titre :{{ $contact->text }}</p>
            <p>Email :{{ $contact->email1 }}</p>
            <p>Description :{{ $contact->description }}</p>

          <a href="{{ route("contacts.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>

@endsection