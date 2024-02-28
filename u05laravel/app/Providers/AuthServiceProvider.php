<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;


// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //     $this->defineAdminGate();
        //     $this->defineUserGate();
        // }

        // private function defineAdminGate(): void
        // {
        //     Gate::define('admin', function ($user) {
        //         return $user->role === 1; // Assuming 1 represents admin role
        //     });
        // }

        // private function defineUserGate(): void
        // {
        //     Gate::define('user', function ($user) {
        //         return $user->role === 0; // Assuming 0 represents user role
        //     });
    }
}
