<?php

<<<<<<< HEAD
namespace ContainerBkA9ba0;
=======
<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getSecurity_ChannelListenerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getSecurity_ChannelListenerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getSecurity_ChannelListenerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getSecurity_ChannelListenerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getSecurity_ChannelListenerService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da
>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ChannelListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ChannelListener.php';

        $a = ($container->privates['router.request_context'] ?? self::getRouter_RequestContextService($container));

        return $container->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), $a->getHttpPort(), $a->getHttpsPort());
    }
}
