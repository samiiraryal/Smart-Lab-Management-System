<?php

<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getAssetMapper_Importmap_ManagerService.php
<<<<<<<< HEAD:backend/var/cache/dev/ContainerMJS7eCs/getAssetMapper_Importmap_ManagerService.php
namespace ContainerMJS7eCs;

========
namespace ContainerOsaKUrs;
>>>>>>>> origin/prizina:backend/var/cache/dev/ContainerOsaKUrs/getAssetMapper_Importmap_ManagerService.php
========
<<<<<<<< HEAD:backend/var/cache/dev/ContainerP1c6CIX/getAssetMapper_Importmap_ManagerService.php
namespace ContainerP1c6CIX;
========
namespace ContainerDTRWV7p;

<<<<<<< HEAD
>>>>>>>> master:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Importmap_ManagerService.php
=======
>>>>>>>> 880060bb5da0c8eda634d33d133a5000981d034f:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Importmap_ManagerService.php
>>>>>>> 30d3579f095403e4b6f449e111a5699e2e871658
>>>>>>>> 081930ac77502788e8c5bf70fc329cbfccb254a4:backend/var/cache/dev/ContainerDTRWV7p/getAssetMapper_Importmap_ManagerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.manager' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'ImportMapManager.php';

        return $container->privates['asset_mapper.importmap.manager'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapManager(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), ($container->privates['asset_mapper.importmap.remote_package_downloader'] ?? $container->load('getAssetMapper_Importmap_RemotePackageDownloaderService')), ($container->privates['asset_mapper.importmap.resolver'] ?? $container->load('getAssetMapper_Importmap_ResolverService')));
    }
}
