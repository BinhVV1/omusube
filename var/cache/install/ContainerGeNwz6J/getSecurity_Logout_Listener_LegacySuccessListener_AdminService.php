<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_LegacySuccessListener_AdminService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'security.logout.listener.legacy_success_listener.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LegacyLogoutHandlerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'LegacyLogoutHandlerListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'EccubeLogoutSuccessHandler.php';

        return $container->privates['security.logout.listener.legacy_success_listener.admin'] = new \Symfony\Bundle\SecurityBundle\Security\LegacyLogoutHandlerListener(new \Eccube\Security\Http\Authentication\EccubeLogoutSuccessHandler(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['Eccube\\Request\\Context'] ?? $container->load('getContextService')), 'admin_login'));
    }
}
