<?php

namespace App\Providers;

use App\Models\Deputat;
use App\Models\Director;
use App\Models\HeadOfSecretariat;
use App\Models\Reception;
use App\Models\Senator;
use App\Observers\DeputatObserver;
use App\Observers\DirectorObserver;
use App\Observers\HeadOfSecretariatObserver;
use App\Observers\ReceptionObserver;
use App\Observers\SenatorObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Director::observe(DirectorObserver::class);
        Senator::observe(SenatorObserver::class);
        Deputat::observe(DeputatObserver::class);
        HeadOfSecretariat::observe(HeadOfSecretariatObserver::class);
        Reception::observe(ReceptionObserver::class);
    }
}
