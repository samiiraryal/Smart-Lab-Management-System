<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getAssetMapper_Importmap_GeneratorService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getAssetMapper_Importmap_GeneratorService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Importmap_GeneratorService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Importmap_GeneratorService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getAssetMapper_Importmap_GeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.generator' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'ImportMapGenerator.php';

        return $container->privates['asset_mapper.importmap.generator'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.compiled_asset_mapper_config_reader'] ??= new \Symfony\Component\AssetMapper\CompiledAssetMapperConfigReader((\dirname(__DIR__, 4).'/public/assets'))), ($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')));
    }
}
