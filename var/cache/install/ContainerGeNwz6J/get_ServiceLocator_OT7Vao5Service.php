<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OT7Vao5Service extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.OT7Vao5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OT7Vao5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'TaxRule' => ['privates', '.errored..service_locator.OT7Vao5.Eccube\\Entity\\TaxRule', NULL, 'Cannot autowire service ".service_locator.OT7Vao5": it references class "Eccube\\Entity\\TaxRule" but no such service exists.'],
        ], [
            'TaxRule' => 'Eccube\\Entity\\TaxRule',
        ]);
    }
}
