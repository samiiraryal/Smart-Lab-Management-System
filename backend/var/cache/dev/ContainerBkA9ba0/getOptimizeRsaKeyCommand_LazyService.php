<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getOptimizeRsaKeyCommand_LazyService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getOptimizeRsaKeyCommand_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getOptimizeRsaKeyCommand_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getOptimizeRsaKeyCommand_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getOptimizeRsaKeyCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOptimizeRsaKeyCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\OptimizeRsaKeyCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\OptimizeRsaKeyCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('key:optimize', [], 'Optimize a RSA key by calculating additional primes (CRT).', false, #[\Closure(name: 'Jose\\Component\\Console\\OptimizeRsaKeyCommand')] fn (): \Jose\Component\Console\OptimizeRsaKeyCommand => ($container->privates['Jose\\Component\\Console\\OptimizeRsaKeyCommand'] ?? $container->load('getOptimizeRsaKeyCommandService')));
    }
}
