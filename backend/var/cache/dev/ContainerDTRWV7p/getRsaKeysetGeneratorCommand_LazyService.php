<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getRsaKeysetGeneratorCommand_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getRsaKeysetGeneratorCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRsaKeysetGeneratorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\RsaKeysetGeneratorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\RsaKeysetGeneratorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('keyset:generate:rsa', [], 'Generate a key set with RSA keys (JWK format)', false, #[\Closure(name: 'Jose\\Component\\Console\\RsaKeysetGeneratorCommand')] fn (): \Jose\Component\Console\RsaKeysetGeneratorCommand => ($container->privates['Jose\\Component\\Console\\RsaKeysetGeneratorCommand'] ?? $container->load('getRsaKeysetGeneratorCommandService')));
    }
}
