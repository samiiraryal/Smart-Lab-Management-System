<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'DoctrineDbalCacheAdapterSchemaListener.php';

        return $container->privates['doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener([]);
    }
}
