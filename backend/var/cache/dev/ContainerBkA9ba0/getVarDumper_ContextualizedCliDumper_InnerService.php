<?php

<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getVarDumper_ContextualizedCliDumper_InnerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getVarDumper_ContextualizedCliDumper_InnerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getVarDumper_ContextualizedCliDumper_InnerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getVarDumper_ContextualizedCliDumper_InnerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
=======
namespace ContainerBkA9ba0;
>>>>>>> 43717bd8fbd4660ee8dfa0df411eea0544a1c6da:backend/var/cache/dev/ContainerBkA9ba0/getVarDumper_ContextualizedCliDumper_InnerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVarDumper_ContextualizedCliDumper_InnerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper.inner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['var_dumper.contextualized_cli_dumper.inner'] = $instance = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container))]);

        return $instance;
    }
}
