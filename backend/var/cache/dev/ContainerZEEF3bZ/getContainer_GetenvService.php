<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerOsaKUrs/getContainer_GetenvService.php
namespace ContainerOsaKUrs;
========
namespace ContainerZEEF3bZ;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerZEEF3bZ/getContainer_GetenvService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetenvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'container.getenv' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['container.getenv'] = $container->getEnv(...);
    }
}
