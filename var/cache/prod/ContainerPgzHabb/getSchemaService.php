<?php

namespace ContainerPgzHabb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchemaService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\Api42\GraphQL\Schema' shared service.
     *
     * @return \Plugin\Api42\GraphQL\Schema
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'webonyx'.\DIRECTORY_SEPARATOR.'graphql-php'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Schema.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Schema.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'SingleResultQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'CustomerQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'SearchFormQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'CustomersQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'OrderQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'OrdersQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'ProductQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Query'.\DIRECTORY_SEPARATOR.'ProductsQuery.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Mutation.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Mutation'.\DIRECTORY_SEPARATOR.'UpdateProductStockMutation.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'GraphQL'.\DIRECTORY_SEPARATOR.'Mutation'.\DIRECTORY_SEPARATOR.'UpdateShippedMutation.php';

        $a = ($container->privates['Plugin\\Api42\\GraphQL\\Types'] ?? $container->load('getTypesService'));
        $b = new \ArrayObject();

        $c = new \Plugin\Api42\GraphQL\Query\CustomerQuery();

        $d = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        $c->setEntityManager($d);
        $c->setTypes($a);
        $e = new \Plugin\Api42\GraphQL\Query\CustomersQuery(($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')));

        $f = ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService'));
        $g = ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container)));
        $h = ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService'));

        $e->setPaginator($f);
        $e->setEccubeConfig($g);
        $e->setFormFactory($h);
        $e->setTypes($a);
        $i = new \Plugin\Api42\GraphQL\Query\OrderQuery();
        $i->setEntityManager($d);
        $i->setTypes($a);
        $j = new \Plugin\Api42\GraphQL\Query\OrdersQuery(($container->privates['Eccube\\Repository\\OrderRepository'] ?? $container->getOrderRepositoryService()));
        $j->setPaginator($f);
        $j->setEccubeConfig($g);
        $j->setFormFactory($h);
        $j->setTypes($a);
        $k = new \Plugin\Api42\GraphQL\Query\ProductQuery();
        $k->setEntityManager($d);
        $k->setTypes($a);
        $l = new \Plugin\Api42\GraphQL\Query\ProductsQuery(($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()));
        $l->setPaginator($f);
        $l->setEccubeConfig($g);
        $l->setFormFactory($h);
        $l->setTypes($a);

        $b->append($c);
        $b->append($e);
        $b->append($i);
        $b->append($j);
        $b->append($k);
        $b->append($l);
        $m = new \ArrayObject();
        $m->append(new \Plugin\Api42\GraphQL\Mutation\UpdateProductStockMutation($a, ($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? $container->getProductClassRepositoryService()), $d));
        $m->append(new \Plugin\Api42\GraphQL\Mutation\UpdateShippedMutation($g, $d, ($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')), ($container->privates['Eccube\\Service\\OrderStateMachine'] ?? $container->load('getOrderStateMachineService')), ($container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $container->load('getOrderStatusRepositoryService')), $a, ($container->privates['Eccube\\Repository\\ShippingRepository'] ?? $container->load('getShippingRepositoryService'))));

        return $container->privates['Plugin\\Api42\\GraphQL\\Schema'] = new \Plugin\Api42\GraphQL\Schema($a, $b, $m);
    }
}