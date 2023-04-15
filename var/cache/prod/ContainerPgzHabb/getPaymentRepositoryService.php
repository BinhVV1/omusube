<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\PaymentRepository' shared autowired service.
     *
     * @return \Eccube\Repository\PaymentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PaymentRepository.php';

        return $container->privates['Eccube\\Repository\\PaymentRepository'] = new \Eccube\Repository\PaymentRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
