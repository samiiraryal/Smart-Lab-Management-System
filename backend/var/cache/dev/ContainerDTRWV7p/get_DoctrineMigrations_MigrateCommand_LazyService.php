<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_DoctrineMigrations_MigrateCommand_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_DoctrineMigrations_MigrateCommand_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_DoctrineMigrations_MigrateCommand_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_MigrateCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine_migrations.migrate_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.doctrine_migrations.migrate_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:migrate', [], 'Execute a migration to a specified version or the latest available version.', false, #[\Closure(name: 'doctrine_migrations.migrate_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\MigrateCommand => ($container->privates['doctrine_migrations.migrate_command'] ?? $container->load('getDoctrineMigrations_MigrateCommandService')));
    }
}
