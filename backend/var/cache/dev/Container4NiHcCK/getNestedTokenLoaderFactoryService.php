<?php

namespace Container4NiHcCK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNestedTokenLoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\NestedTokenLoaderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\NestedTokenLoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'NestedTokenLoaderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\NestedTokenLoaderFactory'] = new \Jose\Bundle\JoseFramework\Services\NestedTokenLoaderFactory(($container->services['Jose\\Bundle\\JoseFramework\\Services\\JWELoaderFactory'] ?? $container->load('getJWELoaderFactoryService')), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\JWSLoaderFactory'] ?? $container->load('getJWSLoaderFactoryService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
