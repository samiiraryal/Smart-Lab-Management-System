<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getPublicKeyCommandService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getPublicKeyCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublicKeyCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Component\Console\PublicKeyCommand' shared autowired service.
     *
     * @return \Jose\Component\Console\PublicKeyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'ObjectOutputCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Library'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'PublicKeyCommand.php';

        $container->privates['Jose\\Component\\Console\\PublicKeyCommand'] = $instance = new \Jose\Component\Console\PublicKeyCommand();

        $instance->setName('key:convert:public');
        $instance->setDescription('Convert a private key into public key. Symmetric keys (shared keys) are not changed.');

        return $instance;
    }
}
