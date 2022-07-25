<?php

namespace App\Providers;

use App\Models\Hotel;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;
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
        Gate::define('HotelIsPublishedForLike', function (User $user, Hotel $hotel) {

            return $hotel->is_published === 'ok';

        });
        Gate::define('JustOneTimeToChangeStatusOfOrder', function (User $user, Order $order) {

            return $order->status === 'wait';

        });
        Gate::define('UserHasAccessToReview', function (User $user, Hotel $hotel) {

            return DB::table('reserves')
                ->join('orders', 'orders.id', '=', 'reserves.order_id')
                ->where('orders.user_id', auth()->user()->id)
                ->where('hotel_id', $hotel->id)
                ->where('reserves.status', 'ok')->exists();
        });
      
        //
    }
}
