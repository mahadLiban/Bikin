{{-- nav backend --}}


<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo "><a href="/" class="">Front end</a></h1>
    <nav id="navbar" class="navbar">
           
                <ul>
                    <li>
                        <a class="nav-link scrollto active " href={{ route("homes.index") }}>Home</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto " href={{ route("abouts.index") }}>About</a>
                    </li>

                    <li>
                        <a class="nav-link scrollto " href={{ route("teams.index") }}>Team</a>
                    </li>

                    <li>
                        <a class="nav-link scrollto " href={{ route("services.index") }}>Services</a>
                    </li>

                    <li>
                        <a class="nav-link scrollto " href={{ route("testimonials.index") }}>Testimonial</a>
                    </li>

                    <li>
                        <a class="nav-link scrollto " href={{ route("titres.index") }}>Titre</a>
                    </li>

                    <li>
                        <a class="nav-link scrollto " href={{ route("contacts.index") }}>Contact</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto " href={{ route("features.index") }}>Features</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto " href={{ route("filtres.index") }}>filtres</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto " href={{ route("imgortfolios.index") }}>Img portfolio</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto " href={{ route("footers.index") }}>footer</a>
                    </li>
                    

                    @auth
                    <li>
                        <a class="nav-link scrollto " href="/"> Bonjour {{Auth::user()->name }}</a>
                    </li>
                    @endauth
                    
                </ul>
            
    </nav>
</div>
</header>
