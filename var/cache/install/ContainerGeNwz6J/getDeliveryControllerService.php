<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Setting\Shop\DeliveryController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Setting\Shop\DeliveryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Setting'.\DIRECTORY_SEPARATOR.'Shop'.\DIRECTORY_SEPARATOR.'DeliveryController.php';

        $container->services['Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController'] = $instance = new \Eccube\Controller\Admin\Setting\Shop\DeliveryController(($container->privates['Eccube\\Repository\\PaymentOptionRepository'] ?? $container->load('getPaymentOptionRepositoryService')), ($container->privates['Eccube\\Repository\\DeliveryFeeRepository'] ?? $container->load('getDeliveryFeeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')), ($container->privates['Eccube\\Repository\\DeliveryTimeRepository'] ?? $container->load('getDeliveryTimeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\SaleTypeRepository'] ?? $container->load('getSaleTypeRepositoryService')));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.gxxsrPa'] ?? $container->load('get_ServiceLocator_GxxsrPaService'))->withContext('Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController', $container));

        return $instance;
    }
}
