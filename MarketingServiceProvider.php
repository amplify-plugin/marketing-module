<?php

namespace Amplify\System\Marketing;

use Amplify\System\Cms\Models\MegaMenu;
use Amplify\System\Cms\Models\Menu;
use Amplify\System\Cms\Models\Navigation;
use Amplify\System\Cms\Observers\MegaMenuObserver;
use Amplify\System\Cms\Observers\MenuObserver;
use Amplify\System\Cms\Observers\NavigationObserver;
use Illuminate\Support\ServiceProvider;

class MarketingServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/marketing.php',
            'amplify.marketing'
        );
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
    }
}
