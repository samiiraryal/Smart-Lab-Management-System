<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getKeyEnvVarProcessorService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getKeyEnvVarProcessorService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getKeyEnvVarProcessorService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getKeyEnvVarProcessorService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getKeyEnvVarProcessorService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getKeyEnvVarProcessorService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerDTRWV7p/getKeyEnvVarProcessorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeyEnvVarProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Bundle\JoseFramework\EnvVarProcessor\KeyEnvVarProcessor' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\EnvVarProcessor\KeyEnvVarProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'web-token'.\DIRECTORY_SEPARATOR.'jwt-framework'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'EnvVarProcessor'.\DIRECTORY_SEPARATOR.'KeyEnvVarProcessor.php';

        return $container->privates['Jose\\Bundle\\JoseFramework\\EnvVarProcessor\\KeyEnvVarProcessor'] = new \Jose\Bundle\JoseFramework\EnvVarProcessor\KeyEnvVarProcessor();
    }
}
