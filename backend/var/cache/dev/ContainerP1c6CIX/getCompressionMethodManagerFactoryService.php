<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getCompressionMethodManagerFactoryService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getCompressionMethodManagerFactoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompressionMethodManagerFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Component\Encryption\Compression\CompressionMethodManagerFactory' shared autowired service.
     *
     * @return \Jose\Component\Encryption\Compression\CompressionMethodManagerFactory
     *
     * @deprecated Since web-token/jwt-bundle 3.3.0: The "Jose\Component\Encryption\Compression\CompressionMethodManagerFactory" service is deprecated and will be removed in version 4.0. Compression is not recommended for the JWE.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('web-token/jwt-bundle', '3.3.0', 'The "Jose\\Component\\Encryption\\Compression\\CompressionMethodManagerFactory" service is deprecated and will be removed in version 4.0. Compression is not recommended for the JWE.');

        $container->services['Jose\\Component\\Encryption\\Compression\\CompressionMethodManagerFactory'] = $instance = new \Jose\Component\Encryption\Compression\CompressionMethodManagerFactory();

        $instance->add('DEF', $container->load('getDeflateService'));

        return $instance;
    }
}
