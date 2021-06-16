@extends('layouts.appFront')
@section('content')


    @include('partials.navbarFront')
    @include('partials.home')
    <main id="main" >



      @include('partials.about')
      @include('partials.feature')
      @include('partials.service')
      @include('partials.portfolio')
      @include('partials.testimonial')
      @include('partials.team')
      @include('partials.contact')




    </main><!-- End #main -->
    @include('partials.footer')
@endsection