<?php

namespace Nerd\Framework;

use Nerd\Framework\Services\ServiceProviderContract;

abstract class ServiceProvider implements ServiceProviderContract
{
    private $application;

    public function __construct(ApplicationContract $application)
    {
        $this->application = $application;
    }

    /**
     * @return ApplicationContract
     */
    protected function getApplication()
    {
        return $this->application;
    }
}
