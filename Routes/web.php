<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'backpack'),
    'middleware' => array_merge(config('backpack.base.web_middleware', ['web']),
        (array) config('backpack.base.middleware_key', 'admin')),
    ['admin_password_reset_required'],
    'namespace' => 'Amplify\System\Marketing\Http\Controllers',
], function () {
    Route::crud('campaign', 'CampaignCrudController');
    Route::crud('merchandising-zone', 'MerchandisingZoneCrudController');
    Route::crud('subscriber', 'SubscriberCrudController');
});
