<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LGv8wtJService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.lGv8wtJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lGv8wtJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'News' => ['privates', '.errored..service_locator.lGv8wtJ.Eccube\\Entity\\News', NULL, 'Cannot autowire service ".service_locator.lGv8wtJ": it references class "Eccube\\Entity\\News" but no such service exists.'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
        ], [
            'News' => 'Eccube\\Entity\\News',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
        ]);
    }
}
