<?php

namespace ContainerI8aypC6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJose_InternalClockService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jose.internal_clock' shared autowired service.
     *
     * @return \Jose\Component\Checker\InternalClock
     *
     * @deprecated Since web-token/jwt-bundle 3.2.0: The service "jose.internal_clock" is an internal service that will be removed in 4.0.0. Please use a PSR-20 compatible service as clock.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('web-token/jwt-bundle', '3.2.0', 'The service "jose.internal_clock" is an internal service that will be removed in 4.0.0. Please use a PSR-20 compatible service as clock.');

        return $container->privates['jose.internal_clock'] = new \Jose\Component\Checker\InternalClock();
    }
}
