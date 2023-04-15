<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryTimeRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\DeliveryTimeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\DeliveryTimeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'DeliveryTimeRepository.php';

        return $container->privates['Eccube\\Repository\\DeliveryTimeRepository'] = new \Eccube\Repository\DeliveryTimeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
