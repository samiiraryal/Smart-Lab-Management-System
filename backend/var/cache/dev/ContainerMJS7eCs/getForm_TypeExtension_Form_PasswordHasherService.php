<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getForm_TypeExtension_Form_PasswordHasherService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getForm_TypeExtension_Form_PasswordHasherService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getForm_TypeExtension_Form_PasswordHasherService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getForm_TypeExtension_Form_PasswordHasherService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getForm_TypeExtension_Form_PasswordHasherService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getForm_TypeExtension_Form_PasswordHasherService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerDTRWV7p/getForm_TypeExtension_Form_PasswordHasherService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.form.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PasswordHasher'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypePasswordHasherExtension.php';

        return $container->privates['form.type_extension.form.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension(($container->privates['form.listener.password_hasher'] ?? $container->load('getForm_Listener_PasswordHasherService')));
    }
}
