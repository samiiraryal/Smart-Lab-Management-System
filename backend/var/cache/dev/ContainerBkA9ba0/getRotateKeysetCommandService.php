<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getRotateKeysetCommandService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getRotateKeysetCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRotateKeysetCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\RotateKeysetCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\RotateKeysetCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ObjectOutputCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'RotateKeysetCommand.php';

        $container->privates['Jose\\Component\\Console\\RotateKeysetCommand'] = $instance = new \Jose\Component\Console\RotateKeysetCommand();

        $instance->setName('keyset:rotate');
        $instance->setDescription('Rotate a key set.');

        return $instance;
    }
}
