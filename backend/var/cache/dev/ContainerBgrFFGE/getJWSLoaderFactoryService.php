<?php

namespace ContainerBgrFFGE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWSLoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWSLoaderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWSLoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'JWSLoaderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWSLoaderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWSLoaderFactory(($container->services['Jose\\Component\\Signature\\Serializer\\JWSSerializerManagerFactory'] ?? self::getJWSSerializerManagerFactoryService($container)), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\JWSVerifierFactory'] ?? $container->load('getJWSVerifierFactoryService')), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\HeaderCheckerManagerFactory'] ?? self::getHeaderCheckerManagerFactoryService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
