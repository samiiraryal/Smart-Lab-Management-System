<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Messenger_HandlerDescriptor_JyyWvHwService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Messenger_HandlerDescriptor_JyyWvHwService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_JyyWvHwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.jyyWvHw' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'RedispatchMessageHandler.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['.messenger.handler_descriptor.jyyWvHw'])) {
            return $container->privates['.messenger.handler_descriptor.jyyWvHw'];
        }

        return $container->privates['.messenger.handler_descriptor.jyyWvHw'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Messenger\Handler\RedispatchMessageHandler($a), []);
    }
}
