<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTeacherControllerindexService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getTeacherControllerindexService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeacherControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9UJDqDl.App\Controller\TeacherController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9UJDqDl.App\\Controller\\TeacherController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'teacherRepository' => ['privates', 'App\\Repository\\TeacherRepository', 'getTeacherRepositoryService', true],
        ], [
            'teacherRepository' => 'App\\Repository\\TeacherRepository',
        ]))->withContext('App\\Controller\\TeacherController::index()', $container);
    }
}
