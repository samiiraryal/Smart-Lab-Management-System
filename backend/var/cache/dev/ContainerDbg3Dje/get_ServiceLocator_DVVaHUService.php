<?php

namespace ContainerDbg3Dje;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DVVaHUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dVVaH_u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dVVaH_u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'teacher' => ['privates', '.errored..service_locator.dVVaH_u.App\\Entity\\Teacher', NULL, 'Cannot autowire service ".service_locator.dVVaH_u": it needs an instance of "App\\Entity\\Teacher" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'teacher' => 'App\\Entity\\Teacher',
        ]);
    }
}
