<?php

<<<<<<< HEAD
namespace ContainerBkA9ba0;
=======
<<<<<<< HEAD
<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_MailerTest_LazyService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Console_Command_MailerTest_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_MailerTest_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Console_Command_MailerTest_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/get_Console_Command_MailerTest_LazyService.php
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
class get_Console_Command_MailerTest_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.mailer_test.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.mailer_test.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('mailer:test', [], 'Test Mailer transports by sending an email', false, #[\Closure(name: 'console.command.mailer_test', class: 'Symfony\\Component\\Mailer\\Command\\MailerTestCommand')] fn (): \Symfony\Component\Mailer\Command\MailerTestCommand => ($container->privates['console.command.mailer_test'] ?? $container->load('getConsole_Command_MailerTestService')));
    }
}
