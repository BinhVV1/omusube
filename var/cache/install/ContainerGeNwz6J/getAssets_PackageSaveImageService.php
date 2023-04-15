<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageSaveImageService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'assets._package_save_image' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['assets._package_save_image'] = new \Symfony\Component\Asset\PathPackage('/html/upload/save_image', ($container->privates['assets.empty_version_strategy'] ?? ($container->privates['assets.empty_version_strategy'] = new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy())), ($container->privates['assets.context'] ?? $container->getAssets_ContextService()));
    }
}
