<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckRememberMeConditions_CustomerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.check_remember_me_conditions.customer' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckRememberMeConditionsListener.php';

        return $container->privates['security.listener.check_remember_me_conditions.customer'] = new \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener(['remember_me_parameter' => 'login_memory', 'always_remember_me' => false], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
