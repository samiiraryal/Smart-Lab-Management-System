<?php

namespace ContainerDTRWV7p;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWEDecrypterFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWEDecrypterFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWEDecrypterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'JWEDecrypterFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWEDecrypterFactory'] = new \Jose\Bundle\JoseFramework\Services\JWEDecrypterFactory(($container->services['Jose\\Component\\Core\\AlgorithmManagerFactory'] ?? self::getAlgorithmManagerFactoryService($container)), ($container->services['Jose\\Component\\Encryption\\Compression\\CompressionMethodManagerFactory'] ?? $container->load('getCompressionMethodManagerFactoryService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
