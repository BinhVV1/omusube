<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XDDNkEyService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.xDDNkEy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xDDNkEy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Plugin' => ['privates', '.errored..service_locator.xDDNkEy.Eccube\\Entity\\Plugin', NULL, 'Cannot autowire service ".service_locator.xDDNkEy": it references class "Eccube\\Entity\\Plugin" but no such service exists.'],
        ], [
            'Plugin' => 'Eccube\\Entity\\Plugin',
        ]);
    }
}
