<?php

namespace App\Providers;

use App\Models\Hotel;
use App\Models\User;
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

        Gate::define('hostIsOk', function (User $user) {

            return (($user->host) && ($user->host->status === 'ok'));
        });

        Gate::define('HotelsForRealHost', function (User $user, Hotel $hotel) {

            return $user->host->id === $hotel->host_id;

        });
        //
    }
}
