<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getConsole_Command_CachePoolInvalidateTagsService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getConsole_Command_CachePoolInvalidateTagsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolInvalidateTagsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_invalidate_tags' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolInvalidateTagsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolInvalidateTagsCommand.php';

        $container->privates['console.command.cache_pool_invalidate_tags'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolInvalidateTagsCommand(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cache.app' => ['privates', 'cache.app.taggable', 'getCache_App_TaggableService', true],
        ], [
            'cache.app' => 'Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter',
        ]));

        $instance->setName('cache:pool:invalidate-tags');
        $instance->setDescription('Invalidate cache tags for all or a specific pool');

        return $instance;
    }
}
