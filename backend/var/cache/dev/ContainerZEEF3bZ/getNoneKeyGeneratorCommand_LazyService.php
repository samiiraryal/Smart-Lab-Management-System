<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerOsaKUrs/getNoneKeyGeneratorCommand_LazyService.php
namespace ContainerOsaKUrs;
========
namespace ContainerZEEF3bZ;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerZEEF3bZ/getNoneKeyGeneratorCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoneKeyGeneratorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\NoneKeyGeneratorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\NoneKeyGeneratorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('key:generate:none', [], 'Generate a none key (JWK format). This key type is only supposed to be used with the "none" algorithm.', false, #[\Closure(name: 'Jose\\Component\\Console\\NoneKeyGeneratorCommand')] fn (): \Jose\Component\Console\NoneKeyGeneratorCommand => ($container->privates['Jose\\Component\\Console\\NoneKeyGeneratorCommand'] ?? $container->load('getNoneKeyGeneratorCommandService')));
    }
}
