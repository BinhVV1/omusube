<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComposerRequireAlreadyInstalledPluginsCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\ComposerRequireAlreadyInstalledPluginsCommand' shared autowired service.
     *
     * @return \Eccube\Command\ComposerRequireAlreadyInstalledPluginsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ComposerRequireAlreadyInstalledPluginsCommand.php';

        $container->privates['Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand'] = $instance = new \Eccube\Command\ComposerRequireAlreadyInstalledPluginsCommand(($container->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $container->load('getComposerApiServiceService')), ($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->getPluginRepositoryService()), ($container->privates['Eccube\\Service\\PluginApiService'] ?? $container->load('getPluginApiServiceService')));

        $instance->setName('eccube:composer:require-already-installed');

        return $instance;
    }
}
