<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getEcKeyGeneratorCommand_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getEcKeyGeneratorCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEcKeyGeneratorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\EcKeyGeneratorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\EcKeyGeneratorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('key:generate:ec', [], 'Generate an EC key (JWK format)', false, #[\Closure(name: 'Jose\\Component\\Console\\EcKeyGeneratorCommand')] fn (): \Jose\Component\Console\EcKeyGeneratorCommand => ($container->privates['Jose\\Component\\Console\\EcKeyGeneratorCommand'] ?? $container->load('getEcKeyGeneratorCommandService')));
    }
}
