<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerOsaKUrs/getAttendanceControllergetStudentAttendanceByDateService.php
namespace ContainerOsaKUrs;
========
namespace ContainerZEEF3bZ;

>>>>>>>> origin/sandesh:backend/var/cache/dev/ContainerZEEF3bZ/getAttendanceControllergetStudentAttendanceByDateService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttendanceControllergetStudentAttendanceByDateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bsDb5E3.App\Controller\AttendanceController::getStudentAttendanceByDate()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getStudentAttendanceByDate()'] = ($container->privates['.service_locator.bsDb5E3'] ?? $container->load('get_ServiceLocator_BsDb5E3Service'))->withContext('App\\Controller\\AttendanceController::getStudentAttendanceByDate()', $container);
    }
}
