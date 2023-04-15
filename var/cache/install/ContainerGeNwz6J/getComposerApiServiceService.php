<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComposerApiServiceService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Service\Composer\ComposerApiService' shared autowired service.
     *
     * @return \Eccube\Service\Composer\ComposerApiService
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['Eccube\\Service\\Composer\\ComposerApiService'] = $container->createProxy('ComposerApiService_c77e330', function () use ($container) {
                return \ComposerApiService_c77e330::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerServiceInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerApiService.php';

        return new \Eccube\Service\Composer\ComposerApiService(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), ($container->privates['Eccube\\Service\\SchemaService'] ?? $container->load('getSchemaServiceService')), ($container->privates['Eccube\\Service\\PluginContext'] ?? $container->load('getPluginContextService')));
    }
}
