<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailMagazineSendHistoryRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\MailMagazine42\Repository\MailMagazineSendHistoryRepository' shared autowired service.
     *
     * @return \Plugin\MailMagazine42\Repository\MailMagazineSendHistoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'MailMagazine42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'MailMagazineSendHistoryRepository.php';

        return $container->privates['Plugin\\MailMagazine42\\Repository\\MailMagazineSendHistoryRepository'] = new \Plugin\MailMagazine42\Repository\MailMagazineSendHistoryRepository(($container->privates['Eccube\\Doctrine\\Query\\Queries'] ?? ($container->privates['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())), ($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
