<?php

namespace Container8GKaZSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOctKeyGeneratorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\OctKeyGeneratorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\OctKeyGeneratorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('key:generate:oct', [], 'Generate an octet key (JWK format)', false, #[\Closure(name: 'Jose\\Component\\Console\\OctKeyGeneratorCommand')] fn (): \Jose\Component\Console\OctKeyGeneratorCommand => ($container->privates['Jose\\Component\\Console\\OctKeyGeneratorCommand'] ?? $container->load('getOctKeyGeneratorCommandService')));
    }
}
