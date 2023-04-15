<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeague_Oauth2Server_Manager_Doctrine_ClientService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'league.oauth2_server.manager.doctrine.client' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\ClientManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'ClientManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ClientManager.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['league.oauth2_server.manager.doctrine.client'])) {
            return $container->privates['league.oauth2_server.manager.doctrine.client'];
        }

        return $container->privates['league.oauth2_server.manager.doctrine.client'] = new \League\Bundle\OAuth2ServerBundle\Manager\Doctrine\ClientManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), $a, 'League\\Bundle\\OAuth2ServerBundle\\Model\\Client');
    }
}
