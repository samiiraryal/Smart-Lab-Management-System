<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.debug.value_resolver.argument_resolver.backed_enum_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'BackedEnumValueResolver.php';

        return $container->privates['.debug.value_resolver.argument_resolver.backed_enum_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver(), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
