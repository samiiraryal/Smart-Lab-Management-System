<?php

<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getTranslation_ExtractorService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTranslation_ExtractorService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getTranslation_ExtractorService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getTranslation_ExtractorService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getTranslation_ExtractorService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'ChainExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'PhpAstExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'TwigExtractor.php';

        $container->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpAstExtractor(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['translation.extractor.visitor.trans_method'] ??= new \Symfony\Component\Translation\Extractor\Visitor\TransMethodVisitor());
            yield 1 => ($container->privates['translation.extractor.visitor.translatable_message'] ??= new \Symfony\Component\Translation\Extractor\Visitor\TranslatableMessageVisitor());
            yield 2 => ($container->privates['translation.extractor.visitor.constraint'] ?? $container->load('getTranslation_Extractor_Visitor_ConstraintService'));
        }, 3)));
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($container->privates['twig'] ?? self::getTwigService($container))));

        return $instance;
    }
}
