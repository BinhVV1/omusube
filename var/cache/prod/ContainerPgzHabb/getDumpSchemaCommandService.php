<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDumpSchemaCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\Api42\Command\DumpSchemaCommand' shared autowired service.
     *
     * @return \Plugin\Api42\Command\DumpSchemaCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DumpSchemaCommand.php';

        $container->privates['Plugin\\Api42\\Command\\DumpSchemaCommand'] = $instance = new \Plugin\Api42\Command\DumpSchemaCommand(($container->privates['Plugin\\Api42\\GraphQL\\Schema'] ?? $container->load('getSchemaService')));

        $instance->setName('eccube:api:dump-schema');

        return $instance;
    }
}
