<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getP12CertificateLoaderCommand_LazyService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getP12CertificateLoaderCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getP12CertificateLoaderCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\P12CertificateLoaderCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\P12CertificateLoaderCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('key:load:p12', [], 'Load a key from a P12 certificate file.', false, #[\Closure(name: 'Jose\\Component\\Console\\P12CertificateLoaderCommand')] fn (): \Jose\Component\Console\P12CertificateLoaderCommand => ($container->privates['Jose\\Component\\Console\\P12CertificateLoaderCommand'] ?? $container->load('getP12CertificateLoaderCommandService')));
    }
}
