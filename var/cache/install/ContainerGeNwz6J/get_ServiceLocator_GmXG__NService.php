<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GmXG__NService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.gmXG..N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gmXG..N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.admin' => ['privates', 'security.event_dispatcher.admin', 'getSecurity_EventDispatcher_AdminService', false],
            'security.event_dispatcher.api' => ['privates', 'security.event_dispatcher.api', 'getSecurity_EventDispatcher_ApiService', true],
            'security.event_dispatcher.customer' => ['privates', 'security.event_dispatcher.customer', 'getSecurity_EventDispatcher_CustomerService', false],
        ], [
            'event_dispatcher' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.admin' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.api' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.customer' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
