<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOAuthControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Plugin\Api42\Controller\Admin\OAuthController' shared autowired service.
     *
     * @return \Plugin\Api42\Controller\Admin\OAuthController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'OAuthController.php';

        $container->services['Plugin\\Api42\\Controller\\Admin\\OAuthController'] = $instance = new \Plugin\Api42\Controller\Admin\OAuthController(($container->privates['league.oauth2_server.manager.doctrine.client'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_ClientService')), ($container->privates['league.oauth2_server.manager.doctrine.access_token'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_AccessTokenService')), ($container->privates['league.oauth2_server.manager.doctrine.refresh_token'] ?? $container->load('getLeague_Oauth2Server_Manager_Doctrine_RefreshTokenService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.gxxsrPa'] ?? $container->load('get_ServiceLocator_GxxsrPaService'))->withContext('Plugin\\Api42\\Controller\\Admin\\OAuthController', $container));

        return $instance;
    }
}
