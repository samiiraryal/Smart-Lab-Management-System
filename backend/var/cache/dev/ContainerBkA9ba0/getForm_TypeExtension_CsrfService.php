<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getForm_TypeExtension_CsrfService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getForm_TypeExtension_CsrfService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getForm_TypeExtension_CsrfService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getForm_TypeExtension_CsrfService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getForm_TypeExtension_CsrfService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_CsrfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php';

        return $container->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($container->privates['security.csrf.token_manager'] ?? self::getSecurity_Csrf_TokenManagerService($container)), true, '_token', ($container->services['translator'] ?? self::getTranslatorService($container)), 'validators', ($container->privates['form.server_params'] ?? $container->load('getForm_ServerParamsService')));
    }
}
