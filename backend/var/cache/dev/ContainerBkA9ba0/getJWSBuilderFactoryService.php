<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getJWSBuilderFactoryService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getJWSBuilderFactoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWSBuilderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWSBuilderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWSBuilderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'JWSBuilderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWSBuilderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWSBuilderFactory(($container->services['Jose\\Component\\Core\\AlgorithmManagerFactory'] ?? self::getAlgorithmManagerFactoryService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
