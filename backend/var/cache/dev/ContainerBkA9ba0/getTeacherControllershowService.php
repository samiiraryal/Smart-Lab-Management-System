<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTeacherControllershowService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTeacherControllershowService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getTeacherControllershowService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getTeacherControllershowService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getTeacherControllershowService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeacherControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z3EEKdA.App\Controller\TeacherController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z3EEKdA.App\\Controller\\TeacherController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'teacher' => ['privates', '.errored..service_locator.z3EEKdA.App\\Entity\\Teacher', NULL, 'Cannot autowire service ".service_locator.z3EEKdA": it needs an instance of "App\\Entity\\Teacher" but this type has been excluded in "config/services.yaml".'],
        ], [
            'teacher' => 'App\\Entity\\Teacher',
        ]))->withContext('App\\Controller\\TeacherController::show()', $container);
    }
}
