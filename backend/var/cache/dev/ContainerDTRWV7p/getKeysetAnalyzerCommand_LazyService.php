<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerOsaKUrs/getKeysetAnalyzerCommand_LazyService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getKeysetAnalyzerCommand_LazyService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getKeysetAnalyzerCommand_LazyService.php
=======
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getKeysetAnalyzerCommand_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getKeysetAnalyzerCommand_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getKeysetAnalyzerCommand_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerDTRWV7p/getKeysetAnalyzerCommand_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeysetAnalyzerCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Jose\Component\Console\KeysetAnalyzerCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.Jose\\Component\\Console\\KeysetAnalyzerCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('keyset:analyze', [], 'JWKSet quality analyzer.', false, #[\Closure(name: 'Jose\\Component\\Console\\KeysetAnalyzerCommand')] fn (): \Jose\Component\Console\KeysetAnalyzerCommand => ($container->privates['Jose\\Component\\Console\\KeysetAnalyzerCommand'] ?? $container->load('getKeysetAnalyzerCommandService')));
    }
}
