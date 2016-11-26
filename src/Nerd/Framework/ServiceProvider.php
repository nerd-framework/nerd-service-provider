<?php

namespace Nerd\Framework;

use Nerd\Framework\Services\ServiceProviderContract;

abstract class ServiceProvider implements ServiceProviderContract
{
    /**
     * @var ApplicationContract
     */
    protected $app;

    public function __construct(ApplicationContract $app)
    {
        $this->app = $app;
    }

    public function boot()
    {
        //
    }

    public function register()
    {
        //
    }
}
