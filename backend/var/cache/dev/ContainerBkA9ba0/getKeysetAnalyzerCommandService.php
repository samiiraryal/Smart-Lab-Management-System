<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getKeysetAnalyzerCommandService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getKeysetAnalyzerCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeysetAnalyzerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\KeysetAnalyzerCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\KeysetAnalyzerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'KeysetAnalyzerCommand.php';

        $container->privates['Jose\\Component\\Console\\KeysetAnalyzerCommand'] = $instance = new \Jose\Component\Console\KeysetAnalyzerCommand(($container->services['Jose\\Component\\KeyManagement\\Analyzer\\KeysetAnalyzerManager'] ?? self::getKeysetAnalyzerManagerService($container)), ($container->services['Jose\\Component\\KeyManagement\\Analyzer\\KeyAnalyzerManager'] ?? self::getKeyAnalyzerManagerService($container)));

        $instance->setName('keyset:analyze');
        $instance->setDescription('JWKSet quality analyzer.');

        return $instance;
    }
}
