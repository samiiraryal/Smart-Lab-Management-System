<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getSession_Handler_NativeService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getSession_Handler_NativeService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getSession_Handler_NativeService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getSession_Handler_NativeService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getSession_Handler_NativeService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Handler_NativeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.handler.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'StrictSessionHandler.php';

        return $container->privates['session.handler.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \SessionHandler());
    }
}
