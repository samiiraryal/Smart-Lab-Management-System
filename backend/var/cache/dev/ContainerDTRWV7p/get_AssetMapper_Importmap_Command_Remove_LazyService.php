<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/get_AssetMapper_Importmap_Command_Remove_LazyService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/get_AssetMapper_Importmap_Command_Remove_LazyService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/get_AssetMapper_Importmap_Command_Remove_LazyService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/get_AssetMapper_Importmap_Command_Remove_LazyService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/get_AssetMapper_Importmap_Command_Remove_LazyService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/get_AssetMapper_Importmap_Command_Remove_LazyService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerDTRWV7p/get_AssetMapper_Importmap_Command_Remove_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Remove_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.importmap.command.remove.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.asset_mapper.importmap.command.remove.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:remove', [], 'Remove JavaScript packages', false, #[\Closure(name: 'asset_mapper.importmap.command.remove', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapRemoveCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapRemoveCommand => ($container->privates['asset_mapper.importmap.command.remove'] ?? $container->load('getAssetMapper_Importmap_Command_RemoveService')));
    }
}
