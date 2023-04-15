<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\CalendarType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\CalendarType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'CalendarType.php';

        $a = ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService'));

        if (isset($container->privates['Eccube\\Form\\Type\\Admin\\CalendarType'])) {
            return $container->privates['Eccube\\Form\\Type\\Admin\\CalendarType'];
        }

        return $container->privates['Eccube\\Form\\Type\\Admin\\CalendarType'] = new \Eccube\Form\Type\Admin\CalendarType(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), $a, ($container->privates['Eccube\\Repository\\CalendarRepository'] ?? $container->load('getCalendarRepositoryService')));
    }
}
