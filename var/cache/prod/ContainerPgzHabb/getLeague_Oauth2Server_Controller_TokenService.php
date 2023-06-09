<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Controller_TokenService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'league.oauth2_server.controller.token' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Controller\TokenController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TokenController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'psr-http-message-bridge'.\DIRECTORY_SEPARATOR.'HttpFoundationFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'psr-http-message-bridge'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'HttpFoundationFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ResponseFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ServerRequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'StreamFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'UploadedFileFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'http-factory'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'UriFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nyholm'.\DIRECTORY_SEPARATOR.'psr7'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Psr17Factory.php';

        return $container->services['league.oauth2_server.controller.token'] = new \League\Bundle\OAuth2ServerBundle\Controller\TokenController(($container->privates['league.oauth2_server.authorization_server'] ?? $container->load('getLeague_Oauth2Server_AuthorizationServerService')), ($container->privates['league.oauth2_server.factory.psr_http'] ?? $container->load('getLeague_Oauth2Server_Factory_PsrHttpService')), ($container->privates['league.oauth2_server.factory.http_foundation'] ?? ($container->privates['league.oauth2_server.factory.http_foundation'] = new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory())), ($container->privates['league.oauth2_server.factory.psr17'] ?? ($container->privates['league.oauth2_server.factory.psr17'] = new \Nyholm\Psr7\Factory\Psr17Factory())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
