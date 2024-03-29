<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::before(function ($user) {
            return $user->role->name === 'Directrice CPMS' ? true : null;
        });

        Gate::define('access-admin', function ($user) {
            return $user->role->name === 'Directrice CPMS';
        });

        Gate::define('access-manager', function ($user) {
            return $user->role->name === 'Directeur des études';
        });

        Gate::define('access-parent', function ($user) {
            return $user->role->name === 'Parent';
        });
    }
    
}
