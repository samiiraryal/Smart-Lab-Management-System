<?php

<<<<<<< HEAD
namespace ContainerBkA9ba0;
=======
<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerDTRWV7p/getConsole_Command_TranslationPullService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getConsole_Command_TranslationPullService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getConsole_Command_TranslationPullService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getConsole_Command_TranslationPullService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getConsole_Command_TranslationPullService.php
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da
>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationPullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_pull' shared service.
     *
     * @return \Symfony\Component\Translation\Command\TranslationPullCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationPullCommand.php';

        $container->privates['console.command.translation_pull'] = $instance = new \Symfony\Component\Translation\Command\TranslationPullCommand(($container->privates['translation.provider_collection'] ?? $container->load('getTranslation_ProviderCollectionService')), ($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), 'en', [], []);

        $instance->setName('translation:pull');
        $instance->setDescription('Pull translations from a given provider.');

        return $instance;
    }
}
