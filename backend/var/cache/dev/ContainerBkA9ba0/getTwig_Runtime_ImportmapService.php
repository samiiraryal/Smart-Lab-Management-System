<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTwig_Runtime_ImportmapService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTwig_Runtime_ImportmapService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getTwig_Runtime_ImportmapService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getTwig_Runtime_ImportmapService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getTwig_Runtime_ImportmapService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_ImportmapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.importmap' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ImportMapRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ImportMapRuntime.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'ImportMapRenderer.php';

        return $container->privates['twig.runtime.importmap'] = new \Symfony\Bridge\Twig\Extension\ImportMapRuntime(new \Symfony\Component\AssetMapper\ImportMap\ImportMapRenderer(($container->privates['asset_mapper.importmap.generator'] ?? $container->load('getAssetMapper_Importmap_GeneratorService')), ($container->privates['assets.packages'] ?? self::getAssets_PackagesService($container)), 'UTF-8', 'es-module-shims', ['data-turbo-track' => 'reload'], ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
