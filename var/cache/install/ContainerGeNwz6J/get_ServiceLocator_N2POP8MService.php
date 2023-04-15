<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N2POP8MService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.n2POP8M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n2POP8M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'orderPdfService' => ['privates', 'Eccube\\Service\\OrderPdfService', 'getOrderPdfServiceService', true],
        ], [
            'orderPdfService' => 'Eccube\\Service\\OrderPdfService',
        ]);
    }
}
