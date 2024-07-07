<?php

namespace ContainerBkA9ba0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiLoginControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiLoginController' shared autowired service.
     *
     * @return \App\Controller\ApiLoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ApiLoginController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'JWTtoken.php';

        $container->services['App\\Controller\\ApiLoginController'] = $instance = new \App\Controller\ApiLoginController(($container->privates['App\\Repository\\TeacherRepository'] ?? $container->load('getTeacherRepositoryService')), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), new \App\Service\JWTtoken());

        $instance->setContainer(($container->privates['.service_locator.8FV7jiY'] ?? $container->load('get_ServiceLocator_8FV7jiYService'))->withContext('App\\Controller\\ApiLoginController', $container));

        return $instance;
    }
}
