<?php

namespace ContainerDTRWV7p;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMergeKeysetCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\MergeKeysetCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\MergeKeysetCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('keyset:merge', [], 'Merge several key sets into one.', false, #[\Closure(name: 'Jose\\Component\\Console\\MergeKeysetCommand')] fn (): \Jose\Component\Console\MergeKeysetCommand => ($container->privates['Jose\\Component\\Console\\MergeKeysetCommand'] ?? $container->load('getMergeKeysetCommandService')));
    }
}
