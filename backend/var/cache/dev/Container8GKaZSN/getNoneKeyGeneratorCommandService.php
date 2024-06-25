<?php

namespace Container8GKaZSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoneKeyGeneratorCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\NoneKeyGeneratorCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\NoneKeyGeneratorCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ObjectOutputCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'GeneratorCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'NoneKeyGeneratorCommand.php';

        $container->privates['Jose\\Component\\Console\\NoneKeyGeneratorCommand'] = $instance = new \Jose\Component\Console\NoneKeyGeneratorCommand();

        $instance->setName('key:generate:none');
        $instance->setDescription('Generate a none key (JWK format). This key type is only supposed to be used with the "none" algorithm.');

        return $instance;
    }
}
