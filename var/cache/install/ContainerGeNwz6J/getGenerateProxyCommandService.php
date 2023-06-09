<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateProxyCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\GenerateProxyCommand' shared autowired service.
     *
     * @return \Eccube\Command\GenerateProxyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'GenerateProxyCommand.php';

        $container->privates['Eccube\\Command\\GenerateProxyCommand'] = $instance = new \Eccube\Command\GenerateProxyCommand(($container->privates['Eccube\\Service\\EntityProxyService'] ?? $container->load('getEntityProxyServiceService')), $container);

        $instance->setName('eccube:generate:proxies');

        return $instance;
    }
}
