<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getAttendanceControllergetPresentStudentsService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getAttendanceControllergetPresentStudentsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttendanceControllergetPresentStudentsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bsDb5E3.App\Controller\AttendanceController::getPresentStudents()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bsDb5E3.App\\Controller\\AttendanceController::getPresentStudents()'] = ($container->privates['.service_locator.bsDb5E3'] ?? $container->load('get_ServiceLocator_BsDb5E3Service'))->withContext('App\\Controller\\AttendanceController::getPresentStudents()', $container);
    }
}
