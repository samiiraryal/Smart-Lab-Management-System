<?php

namespace ContainerDTRWV7p;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BsDb5E3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bsDb5E3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bsDb5E3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'attendanceRepository' => ['privates', 'App\\Repository\\AttendanceRepository', 'getAttendanceRepositoryService', true],
        ], [
            'attendanceRepository' => 'App\\Repository\\AttendanceRepository',
        ]);
    }
}
