<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getForm_FactoryService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getForm_FactoryService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getForm_FactoryService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormFactory.php';

        return $container->privates['form.factory'] = new \Symfony\Component\Form\FormFactory(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')));
    }
}
