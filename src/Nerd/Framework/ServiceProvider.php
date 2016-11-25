<?php

namespace Nerd\Framework;

use Nerd\Framework\Services\ServiceProviderContract;

abstract class ServiceProvider implements ServiceProviderContract
{
    private $app;

    public function __construct(ApplicationContract $app)
    {
        $this->app = $app;
    }

    /**
     * @return ApplicationContract
     */
    protected function getApp()
    {
        return $this->app;
    }
}
