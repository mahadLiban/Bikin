<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();  
            // About
            Gate::define("about-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });

            // contact
            Gate::define("contact-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });

            // feature
            Gate::define("feature-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("feature-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });

            // Filtre
            Gate::define("filtre-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("filtre-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            // Footer
            Gate::define("footer-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            // Footer
            Gate::define("home-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            // Footer
            Gate::define("imgortfolio-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("imgortfolio-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
             // Service
             Gate::define("service-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("service-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            // Team
            Gate::define("team-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("team-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
             // Portofolio
             Gate::define("testimonial-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("testimonial-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            // Titre
            Gate::define("titre-create",function(){
                return in_array(Auth::user()->role_id,[1]);
            });
            Gate::define("titre-edit",function(){
                return in_array(Auth::user()->role_id,[1]);
            });

           

    }
}
