<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointProcessorService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\PointProcessor' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\PointProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'DiscountProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'PurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PurchaseFlow'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'PointProcessor.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\PointProcessor(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Service\\PointHelper'] ?? $container->load('getPointHelperService')));
    }
}
