<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getReportControllerService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getReportControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReportController' shared autowired service.
     *
     * @return \App\Controller\ReportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ReportController.php';

        $container->services['App\\Controller\\ReportController'] = $instance = new \App\Controller\ReportController();

        $instance->setContainer(($container->privates['.service_locator.8FV7jiY'] ?? $container->load('get_ServiceLocator_8FV7jiYService'))->withContext('App\\Controller\\ReportController', $container));

        return $instance;
    }
}
