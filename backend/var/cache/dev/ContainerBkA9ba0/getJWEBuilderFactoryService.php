<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getJWEBuilderFactoryService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getJWEBuilderFactoryService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getJWEBuilderFactoryService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getJWEBuilderFactoryService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getJWEBuilderFactoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWEBuilderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWEBuilderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWEBuilderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'JWEBuilderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWEBuilderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWEBuilderFactory(($container->services['Jose\\Component\\Core\\AlgorithmManagerFactory'] ?? self::getAlgorithmManagerFactoryService($container)), ($container->services['Jose\\Component\\Encryption\\Compression\\CompressionMethodManagerFactory'] ?? $container->load('getCompressionMethodManagerFactoryService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
