<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getTeacherControllerdeleteService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getTeacherControllerdeleteService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeacherControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dVVaH_u.App\Controller\TeacherController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.dVVaH_u'] ?? $container->load('get_ServiceLocator_DVVaHUService'));

        if (isset($container->privates['.service_locator.dVVaH_u.App\\Controller\\TeacherController::delete()'])) {
            return $container->privates['.service_locator.dVVaH_u.App\\Controller\\TeacherController::delete()'];
        }

        return $container->privates['.service_locator.dVVaH_u.App\\Controller\\TeacherController::delete()'] = $a->withContext('App\\Controller\\TeacherController::delete()', $container);
    }
}
