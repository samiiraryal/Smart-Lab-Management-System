<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_MultiplierRetryStrategy_AsyncService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.multiplier_retry_strategy.async' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Retry'.\DIRECTORY_SEPARATOR.'RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Retry'.\DIRECTORY_SEPARATOR.'MultiplierRetryStrategy.php';

        return $container->privates['messenger.retry.multiplier_retry_strategy.async'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(3, 1000, 2, 0, 0.1);
    }
}
