<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getReportControllerviewReportByStudentAndDateService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getReportControllerviewReportByStudentAndDateService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getReportControllerviewReportByStudentAndDateService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getReportControllerviewReportByStudentAndDateService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getReportControllerviewReportByStudentAndDateService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportControllerviewReportByStudentAndDateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P.blNFL.App\Controller\ReportController::viewReportByStudentAndDate()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P.blNFL.App\\Controller\\ReportController::viewReportByStudentAndDate()'] = ($container->privates['.service_locator.P.blNFL'] ?? $container->load('get_ServiceLocator_P_BlNFLService'))->withContext('App\\Controller\\ReportController::viewReportByStudentAndDate()', $container);
    }
}
