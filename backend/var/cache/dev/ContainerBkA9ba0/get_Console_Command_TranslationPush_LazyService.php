<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_TranslationPush_LazyService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_TranslationPush_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_TranslationPush_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_TranslationPush_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/get_Console_Command_TranslationPush_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationPush_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.translation_push.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.translation_push.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:push', [], 'Push translations to a given provider.', false, #[\Closure(name: 'console.command.translation_push', class: 'Symfony\\Component\\Translation\\Command\\TranslationPushCommand')] fn (): \Symfony\Component\Translation\Command\TranslationPushCommand => ($container->privates['console.command.translation_push'] ?? $container->load('getConsole_Command_TranslationPushService')));
    }
}
