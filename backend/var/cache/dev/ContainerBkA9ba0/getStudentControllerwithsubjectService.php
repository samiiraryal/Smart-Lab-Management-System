<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerBkA9ba0/getStudentControllerwithsubjectService.php
namespace ContainerBkA9ba0;
========
namespace ContainerDQ5ka7F;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerDQ5ka7F/getStudentControllerwithsubjectService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStudentControllerwithsubjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y.RDPi2.App\Controller\StudentController::withsubject()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y.RDPi2.App\\Controller\\StudentController::withsubject()'] = ($container->privates['.service_locator.Y.RDPi2'] ?? $container->load('get_ServiceLocator_Y_RDPi2Service'))->withContext('App\\Controller\\StudentController::withsubject()', $container);
    }
}
