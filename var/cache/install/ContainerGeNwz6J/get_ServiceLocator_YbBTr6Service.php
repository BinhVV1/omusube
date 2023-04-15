<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YbBTr6Service extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.yb_bTr6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yb_bTr6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Product' => ['privates', '.errored..service_locator.yb_bTr6.Eccube\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.yb_bTr6": it references class "Eccube\\Entity\\Product" but no such service exists.'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
        ], [
            'Product' => 'Eccube\\Entity\\Product',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
        ]);
    }
}
