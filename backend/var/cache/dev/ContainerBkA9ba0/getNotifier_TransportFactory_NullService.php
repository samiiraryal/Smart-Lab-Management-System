<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getNotifier_TransportFactory_NullService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getNotifier_TransportFactory_NullService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getNotifier_TransportFactory_NullService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getNotifier_TransportFactory_NullService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getNotifier_TransportFactory_NullService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_TransportFactory_NullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport\NullTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'NullTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['notifier.transport_factory.null'])) {
            return $container->privates['notifier.transport_factory.null'];
        }

        return $container->privates['notifier.transport_factory.null'] = new \Symfony\Component\Notifier\Transport\NullTransportFactory($a, ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));
    }
}
