<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getTwig_Mailer_MessageListenerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getTwig_Mailer_MessageListenerService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getTwig_Mailer_MessageListenerService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getTwig_Mailer_MessageListenerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getTwig_Mailer_MessageListenerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getTwig_Mailer_MessageListenerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerP1c6CIX/getTwig_Mailer_MessageListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Mailer_MessageListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'MessageListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Mime'.\DIRECTORY_SEPARATOR.'BodyRenderer.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['twig.mailer.message_listener'])) {
            return $container->privates['twig.mailer.message_listener'];
        }

        return $container->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer($a, localeSwitcher: ($container->privates['translation.locale_switcher'] ?? self::getTranslation_LocaleSwitcherService($container))));
    }
}
