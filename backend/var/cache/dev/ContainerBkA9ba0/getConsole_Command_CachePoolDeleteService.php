<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getConsole_Command_CachePoolDeleteService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getConsole_Command_CachePoolDeleteService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getConsole_Command_CachePoolDeleteService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getConsole_Command_CachePoolDeleteService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getConsole_Command_CachePoolDeleteService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolDeleteCommand.php';

        $container->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($container->services['cache.global_clearer'] ?? $container->load('getCache_GlobalClearerService')), ['cache.app', 'cache.system', 'cache.validator', 'cache.serializer', 'cache.property_info', 'cache.asset_mapper', 'cache.messenger.restart_workers_signal', 'cache.validator_expression_language', 'cache.doctrine.orm.default.result', 'cache.doctrine.orm.default.query', 'cache.security_expression_language', 'cache.security_is_granted_attribute_expression_language', 'cache.security_is_csrf_token_valid_attribute_expression_language']);

        $instance->setName('cache:pool:delete');
        $instance->setDescription('Delete an item from a cache pool');

        return $instance;
    }
}
