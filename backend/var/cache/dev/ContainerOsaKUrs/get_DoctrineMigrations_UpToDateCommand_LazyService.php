<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/get_DoctrineMigrations_UpToDateCommand_LazyService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/get_DoctrineMigrations_UpToDateCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_UpToDateCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine_migrations.up_to_date_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.doctrine_migrations.up_to_date_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:up-to-date', [], 'Tells you if your schema is up-to-date.', false, #[\Closure(name: 'doctrine_migrations.up_to_date_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand => ($container->privates['doctrine_migrations.up_to_date_command'] ?? $container->load('getDoctrineMigrations_UpToDateCommandService')));
    }
}
