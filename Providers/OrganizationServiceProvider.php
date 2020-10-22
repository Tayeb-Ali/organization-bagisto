<?php

namespace DOCore\Organization\Providers;

use DOCore\Organization\Http\View\Composers\CompanyComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Widget;

class OrganizationServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/admin-routes.php');
        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/front-routes.php');
        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/api-routes.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'organization');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'organization');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

//        app('arrilot.widget-namespaces')->registerNamespace('organization', '\DOCore\Organization\Widgets');

//        Widget::group('dashboard')->position(0)->addWidget('organization::MainWidget');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/Factory');

        View::composer(['organization::admin.helper.company-dropdown'], CompanyComposer::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/config.php', 'organization');
        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/menu.php', 'menu.admin');
        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/acl.php', 'acl');
    }
}
