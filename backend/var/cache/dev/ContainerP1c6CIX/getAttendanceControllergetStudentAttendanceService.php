<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getAttendanceControllergetStudentAttendanceService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getAttendanceControllergetStudentAttendanceService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttendanceControllergetStudentAttendanceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bsDb5E3.App\Controller\AttendanceController::getStudentAttendance()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getStudentAttendance()'] = ($container->privates['.service_locator.bsDb5E3'] ?? $container->load('get_ServiceLocator_BsDb5E3Service'))->withContext('App\\Controller\\AttendanceController::getStudentAttendance()', $container);
    }
}
