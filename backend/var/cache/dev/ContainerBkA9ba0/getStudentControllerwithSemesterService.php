<?php

namespace ContainerBkA9ba0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStudentControllerwithSemesterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y.RDPi2.App\Controller\StudentController::withSemester()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y.RDPi2.App\\Controller\\StudentController::withSemester()'] = ($container->privates['.service_locator.Y.RDPi2'] ?? $container->load('get_ServiceLocator_Y_RDPi2Service'))->withContext('App\\Controller\\StudentController::withSemester()', $container);
    }
}
