<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerP1c6CIX/getAssetMapper_Compiler_JavascriptImportPathCompilerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Compiler_JavascriptImportPathCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.compiler.javascript_import_path_compiler' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Compiler\JavaScriptImportPathCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'JavaScriptImportPathCompiler.php';

        return $container->privates['asset_mapper.compiler.javascript_import_path_compiler'] = new \Symfony\Component\AssetMapper\Compiler\JavaScriptImportPathCompiler(($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), 'warn', ($container->privates['monolog.logger.asset_mapper'] ?? $container->load('getMonolog_Logger_AssetMapperService')));
    }
}
