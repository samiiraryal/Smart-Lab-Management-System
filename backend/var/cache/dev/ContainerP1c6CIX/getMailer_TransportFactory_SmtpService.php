<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getMailer_TransportFactory_SmtpService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getMailer_TransportFactory_SmtpService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getMailer_TransportFactory_SmtpService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_SmtpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'Smtp'.\DIRECTORY_SEPARATOR.'EsmtpTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.transport_factory.smtp'])) {
            return $container->privates['mailer.transport_factory.smtp'];
        }

        return $container->privates['mailer.transport_factory.smtp'] = new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory($a, ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
