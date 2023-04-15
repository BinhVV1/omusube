<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecommendSearchModelControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Plugin\Recommend42\Controller\RecommendSearchModelController' shared autowired service.
     *
     * @return \Plugin\Recommend42\Controller\RecommendSearchModelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Recommend42'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RecommendSearchModelController.php';

        $container->services['Plugin\\Recommend42\\Controller\\RecommendSearchModelController'] = $instance = new \Plugin\Recommend42\Controller\RecommendSearchModelController(($container->privates['Eccube\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
        $instance->setFormFactory(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setContainer(($container->privates['.service_locator.gxxsrPa'] ?? $container->load('get_ServiceLocator_GxxsrPaService'))->withContext('Plugin\\Recommend42\\Controller\\RecommendSearchModelController', $container));

        return $instance;
    }
}
