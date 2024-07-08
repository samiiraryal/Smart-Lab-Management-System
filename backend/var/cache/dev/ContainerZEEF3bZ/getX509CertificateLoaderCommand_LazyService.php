<?php

namespace ContainerZEEF3bZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getX509CertificateLoaderCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\X509CertificateLoaderCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\X509CertificateLoaderCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('key:load:x509', [], 'Load a key from a X.509 certificate file.', false, #[\Closure(name: 'Jose\\Component\\Console\\X509CertificateLoaderCommand')] fn (): \Jose\Component\Console\X509CertificateLoaderCommand => ($container->privates['Jose\\Component\\Console\\X509CertificateLoaderCommand'] ?? $container->load('getX509CertificateLoaderCommandService')));
    }
}
