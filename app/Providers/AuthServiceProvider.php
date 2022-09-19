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
        // $this->registerPolicies();
        // Gate::define('super_admin', function ($user) {
        //     return $user->role_id == 1;
        // });
        // Gate::define('admin', function ($user) {
        //     return $user->role_id == 2;
        // });
        // Gate::define('operator', function ($user) {
        //     return $user->role_id == 3;
        // });
        // Gate::define('pejabat_penanggung_jawab', function ($user) {
        //     return $user->role_id == 4;
        // });
        // Gate::define('pejabat', function ($user) {
        //     return $user->role_id == 5;
        // });

        //
    }
}
