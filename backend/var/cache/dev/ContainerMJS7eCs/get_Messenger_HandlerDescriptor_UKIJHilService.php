<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/get_Messenger_HandlerDescriptor_UKIJHilService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/get_Messenger_HandlerDescriptor_UKIJHilService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/get_Messenger_HandlerDescriptor_UKIJHilService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_Messenger_HandlerDescriptor_UKIJHilService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_Messenger_HandlerDescriptor_UKIJHilService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_Messenger_HandlerDescriptor_UKIJHilService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerDTRWV7p/get_Messenger_HandlerDescriptor_UKIJHilService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_UKIJHilService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.UKIJHil' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'MessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.UKIJHil'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Notifier\Messenger\MessageHandler(($container->privates['texter.transports'] ?? $container->load('getTexter_TransportsService'))), []);
    }
}
