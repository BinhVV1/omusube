<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Storage_Factory_ServiceService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'session.storage.factory.service' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Session\ServiceSessionFactory
     *
     * @deprecated Since symfony/framework-bundle 5.3: The "session.storage.factory.service" service is deprecated, use "session.storage.factory.native", "session.storage.factory.php_bridge" or "session.storage.factory.mock_file" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.3', 'The "session.storage.factory.service" service is deprecated, use "session.storage.factory.native", "session.storage.factory.php_bridge" or "session.storage.factory.mock_file" instead.');

        return new \Symfony\Bundle\FrameworkBundle\Session\ServiceSessionFactory($container->load('getSession_Storage_NativeService'));
    }
}
