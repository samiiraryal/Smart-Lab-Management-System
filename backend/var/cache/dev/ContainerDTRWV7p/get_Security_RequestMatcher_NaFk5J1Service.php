<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Security_RequestMatcher_NaFk5J1Service.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_Security_RequestMatcher_NaFk5J1Service.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Security_RequestMatcher_NaFk5J1Service.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_RequestMatcher_NaFk5J1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.request_matcher.NaFk5J1' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\ChainRequestMatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'ChainRequestMatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcher'.\DIRECTORY_SEPARATOR.'PathRequestMatcher.php';

        return $container->privates['.security.request_matcher.NaFk5J1'] = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api')]);
    }
}
