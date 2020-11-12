<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
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
        $this->registerPostPolicies();


        //
    }
    public function registerPostPolicies()
    {

        Gate::define('edit',function($user){
            return $user->hasAnyRoles(['admin','teacher']);
        });
        // Gate::define('create',function($user){
        //     return $user->hasAnyPermissions(['create_user']);
        // });
        Gate::define('create',function($user){
            return $user->hasAnyRoles(['admin','teacher']);
        });
        Gate::define('delete',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('manage',function($user){
            return $user->hasAnyRoles(['admin','teacher','user']);
        });
    }
}
