<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/get_ServiceLocator_4wc4Ag1Service.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_ServiceLocator_4wc4Ag1Service.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_ServiceLocator_4wc4Ag1Service.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_ServiceLocator_4wc4Ag1Service.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/get_ServiceLocator_4wc4Ag1Service.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4wc4Ag1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4wc4Ag1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4wc4Ag1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'loader' => ['privates', '.errored..service_locator.4wc4Ag1.Symfony\\Component\\Config\\Loader\\LoaderInterface', NULL, 'Cannot autowire service ".service_locator.4wc4Ag1": it needs an instance of "Symfony\\Component\\Config\\Loader\\LoaderInterface" but this type has been excluded from autowiring.'],
        ], [
            'loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]);
    }
}
