<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getJWELoaderFactoryService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getJWELoaderFactoryService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getJWELoaderFactoryService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWELoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWELoaderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWELoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'JWELoaderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWELoaderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWELoaderFactory(($container->services['Jose\\Component\\Encryption\\Serializer\\JWESerializerManagerFactory'] ?? self::getJWESerializerManagerFactoryService($container)), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\JWEDecrypterFactory'] ?? $container->load('getJWEDecrypterFactoryService')), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\HeaderCheckerManagerFactory'] ?? self::getHeaderCheckerManagerFactoryService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
