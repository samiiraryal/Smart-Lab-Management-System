<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getStimulus_AssetMapper_LoaderJavascriptCompilerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getStimulus_AssetMapper_LoaderJavascriptCompilerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getStimulus_AssetMapper_LoaderJavascriptCompilerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getStimulus_AssetMapper_LoaderJavascriptCompilerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getStimulus_AssetMapper_LoaderJavascriptCompilerService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStimulus_AssetMapper_LoaderJavascriptCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'stimulus.asset_mapper.loader_javascript_compiler' shared service.
     *
     * @return \Symfony\UX\StimulusBundle\AssetMapper\StimulusLoaderJavaScriptCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stimulus-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AssetMapper'.\DIRECTORY_SEPARATOR.'StimulusLoaderJavaScriptCompiler.php';

        $a = ($container->privates['stimulus.asset_mapper.controllers_map_generator'] ?? $container->load('getStimulus_AssetMapper_ControllersMapGeneratorService'));

        if (isset($container->privates['stimulus.asset_mapper.loader_javascript_compiler'])) {
            return $container->privates['stimulus.asset_mapper.loader_javascript_compiler'];
        }

        return $container->privates['stimulus.asset_mapper.loader_javascript_compiler'] = new \Symfony\UX\StimulusBundle\AssetMapper\StimulusLoaderJavaScriptCompiler($a, true);
    }
}
