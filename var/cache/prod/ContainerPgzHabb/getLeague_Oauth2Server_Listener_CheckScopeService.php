<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Listener_CheckScopeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'league.oauth2_server.listener.check_scope' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Security\EventListener\CheckScopeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckScopeListener.php';

        return $container->privates['league.oauth2_server.listener.check_scope'] = new \League\Bundle\OAuth2ServerBundle\Security\EventListener\CheckScopeListener(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
