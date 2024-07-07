<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getOctKeyGeneratorCommandService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getOctKeyGeneratorCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOctKeyGeneratorCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\OctKeyGeneratorCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\OctKeyGeneratorCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ObjectOutputCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'OctKeyGeneratorCommand.php';

        $container->privates['Jose\\Component\\Console\\OctKeyGeneratorCommand'] = $instance = new \Jose\Component\Console\OctKeyGeneratorCommand();

        $instance->setName('key:generate:oct');
        $instance->setDescription('Generate an octet key (JWK format)');

        return $instance;
    }
}
