<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getTranslation_Loader_PoService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getTranslation_Loader_PoService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getTranslation_Loader_PoService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTranslation_Loader_PoService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getTranslation_Loader_PoService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getTranslation_Loader_PoService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerP1c6CIX/getTranslation_Loader_PoService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Loader_PoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PoFileLoader.php';

        return $container->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
}
