<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerOsaKUrs/get_Console_Command_About_LazyService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/get_Console_Command_About_LazyService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/get_Console_Command_About_LazyService.php
=======
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_About_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_About_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_About_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_About_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_About_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.about.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.about.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('about', [], 'Display information about the current project', false, #[\Closure(name: 'console.command.about', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\AboutCommand => ($container->privates['console.command.about'] ?? $container->load('getConsole_Command_AboutService')));
    }
}
