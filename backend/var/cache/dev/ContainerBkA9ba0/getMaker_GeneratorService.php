<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getMaker_GeneratorService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getMaker_GeneratorService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getMaker_GeneratorService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getMaker_GeneratorService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getMaker_GeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TemplateComponentGenerator.php';

        return $container->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), 'App', NULL, new \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator());
    }
}
