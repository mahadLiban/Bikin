<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Bikin Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href={{ asset("/img/favicon.png") }} rel="icon">
        <link href={{ asset("/img/apple-touch-icon.png") }} rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href={{ asset("/css/aos.css")}} rel="stylesheet">
        <link href={{ asset("/css/bootstrap.min.css") }} rel="stylesheet">
        <link href={{ asset("/css/bootstrap-icons.css") }} rel="stylesheet">
        <link href={{ asset("/css/boxicons.min.css ") }}rel="stylesheet">
        <link href={{ asset("/css/glightbox.min.css ")}} rel="stylesheet">
        <link href={{ asset("/css/swiper-bundle.min.css") }} rel="stylesheet">
        
        <!-- Template Main CSS File -->
        <link href={{ asset("css/style.css") }} rel="stylesheet">
        <link rel="stylesheet" href={{ asset("css/app.css") }}>
      
        <!-- =======================================================
        * Template Name: Bikin - v4.3.0
        * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>
      

<body>
    @include('partials.navbarBack')
    
    <section id="hero2" >
        <div class="container">
            @yield('content')
        </div>
        
    </section>


    <script src={{ asset("js/aos.js") }}></script>
    <script src={{ asset("/js/bootstrap.bundle.min.js ")}}></script>
    <script src={{ asset("/js/glightbox.min.js ")}}></script>
    <script src={{ asset("/js/isotope.pkgd.min.js")}}></script>
    <script src={{ asset("/js/validate.js ") }}></script>
    <script src={{ asset("js/swiper-bundle.min.js") }}></script>
  
    <!-- Template Main JS File -->
    <script src={{ asset("js/main.js") }}></script>
    <script src={{ asset("js/app.js") }}></script>
  





</body>
</html>
