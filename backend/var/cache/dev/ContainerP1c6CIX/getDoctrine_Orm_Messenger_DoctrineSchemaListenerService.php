<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getDoctrine_Orm_Messenger_DoctrineSchemaListenerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getDoctrine_Orm_Messenger_DoctrineSchemaListenerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getDoctrine_Orm_Messenger_DoctrineSchemaListenerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'MessengerTransportDoctrineSchemaListener.php';

        return $container->privates['doctrine.orm.messenger.doctrine_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.async'] ?? $container->load('getMessenger_Transport_AsyncService'));
            yield 1 => ($container->privates['messenger.transport.failed'] ?? $container->load('getMessenger_Transport_FailedService'));
        }, 2));
    }
}
