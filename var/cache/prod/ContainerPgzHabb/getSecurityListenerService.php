<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityListenerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\EventListener\SecurityListener' shared autowired service.
     *
     * @return \Eccube\EventListener\SecurityListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SecurityListener.php';

        return $container->privates['Eccube\\EventListener\\SecurityListener'] = new \Eccube\EventListener\SecurityListener(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Service\\CartService'] ?? $container->getCartServiceService()), ($container->privates['eccube.purchase.flow.cart'] ?? $container->load('getEccube_Purchase_Flow_CartService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}