<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getConsole_Command_MessengerSetupTransportsService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getConsole_Command_MessengerSetupTransportsService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerSetupTransportsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SetupTransportsCommand.php';

        $container->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($container->privates['messenger.receiver_locator'] ?? $container->load('getMessenger_ReceiverLocatorService')), ['async', 'failed']);

        $instance->setName('messenger:setup-transports');
        $instance->setDescription('Prepare the required infrastructure for the transport');

        return $instance;
    }
}
