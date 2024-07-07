<?php

namespace ContainerP1c6CIX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddKeyIntoKeysetCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\AddKeyIntoKeysetCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\AddKeyIntoKeysetCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ObjectOutputCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'AddKeyIntoKeysetCommand.php';

        $container->privates['Jose\\Component\\Console\\AddKeyIntoKeysetCommand'] = $instance = new \Jose\Component\Console\AddKeyIntoKeysetCommand();

        $instance->setName('keyset:add:key');
        $instance->setDescription('Add a key into a key set.');

        return $instance;
    }
}
