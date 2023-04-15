<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigLintValidatorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Validator\TwigLintValidator' shared autowired service.
     *
     * @return \Eccube\Form\Validator\TwigLintValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'TwigLintValidator.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['Eccube\\Form\\Validator\\TwigLintValidator'])) {
            return $container->privates['Eccube\\Form\\Validator\\TwigLintValidator'];
        }

        return $container->privates['Eccube\\Form\\Validator\\TwigLintValidator'] = new \Eccube\Form\Validator\TwigLintValidator($a);
    }
}
