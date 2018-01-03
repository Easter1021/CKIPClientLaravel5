<?php

namespace Easter1021\CKIPClientLaravel5\Providers;

use Illuminate\Support\ServiceProvider;

class CKIPClientServiceProvider extends ServiceProvider
{
    /**
     * 是否延时加载提供器。
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CKIPClient::class, function ($app) {
            return new CKIPClient();
        });
    }

    /**
     * 获取提供器提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return [CKIPClient::class];
    }
}
