<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getTeacherControllereditService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getTeacherControllereditService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeacherControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dVVaH_u.App\Controller\TeacherController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dVVaH_u.App\\Controller\\TeacherController::edit()'] = ($container->privates['.service_locator.dVVaH_u'] ?? $container->load('get_ServiceLocator_DVVaHUService'))->withContext('App\\Controller\\TeacherController::edit()', $container);
    }
}
