<?php

namespace ContainerDbg3Dje;

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
