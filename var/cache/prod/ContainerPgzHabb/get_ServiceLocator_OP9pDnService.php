<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OP9pDnService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.O_p9pDn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O_p9pDn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ProductReview' => ['privates', '.errored..service_locator.O_p9pDn.Plugin\\ProductReview42\\Entity\\ProductReview', NULL, 'Cannot autowire service ".service_locator.O_p9pDn": it references class "Plugin\\ProductReview42\\Entity\\ProductReview" but no such service exists.'],
        ], [
            'ProductReview' => 'Plugin\\ProductReview42\\Entity\\ProductReview',
        ]);
    }
}
