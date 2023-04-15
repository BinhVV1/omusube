<?php

namespace ContainerGeNwz6J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxRuleTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\TaxRuleType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\TaxRuleType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'TaxRuleType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\TaxRuleType'] = new \Eccube\Form\Type\Admin\TaxRuleType(($container->privates['Eccube\\Repository\\TaxRuleRepository'] ?? $container->getTaxRuleRepositoryService()));
    }
}
