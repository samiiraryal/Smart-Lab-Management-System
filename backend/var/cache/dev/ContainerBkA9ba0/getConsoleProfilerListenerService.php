<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getConsoleProfilerListenerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getConsoleProfilerListenerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getConsoleProfilerListenerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getConsoleProfilerListenerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getConsoleProfilerListenerService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsoleProfilerListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console_profiler_listener' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ConsoleProfilerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ConsoleProfilerListener.php';

        $a = ($container->services['.container.private.profiler'] ?? self::get_Container_Private_ProfilerService($container));

        if (isset($container->privates['console_profiler_listener'])) {
            return $container->privates['console_profiler_listener'];
        }

        return $container->privates['console_profiler_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ConsoleProfilerListener($a, ($container->services['.virtual_request_stack'] ?? self::get_VirtualRequestStackService($container)), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), $container->getEnv('not:default:kernel.runtime_mode.web:'), ($container->services['router'] ?? self::getRouterService($container)));
    }
}
