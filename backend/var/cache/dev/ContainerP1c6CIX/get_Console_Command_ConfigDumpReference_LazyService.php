<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_ConfigDumpReference_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_ConfigDumpReference_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_ConfigDumpReference_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.config_dump_reference.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.config_dump_reference.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('config:dump-reference', [], 'Dump the default configuration for an extension', false, #[\Closure(name: 'console.command.config_dump_reference', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand => ($container->privates['console.command.config_dump_reference'] ?? $container->load('getConsole_Command_ConfigDumpReferenceService')));
    }
}
