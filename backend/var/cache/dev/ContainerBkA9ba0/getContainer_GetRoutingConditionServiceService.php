<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getContainer_GetRoutingConditionServiceService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getContainer_GetRoutingConditionServiceService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getContainer_GetRoutingConditionServiceService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getContainer_GetRoutingConditionServiceService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getContainer_GetRoutingConditionServiceService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetRoutingConditionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'container.get_routing_condition_service' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.get_routing_condition_service'] = ($container->privates['.service_locator.GIuJv7e'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], []))->get(...);
    }
}
