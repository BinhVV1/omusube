<?php

namespace ContainerPgzHabb;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder20839 = null;
    private $initializerdabb2 = null;
    private static $publicProperties014b6 = [
        
    ];
    public function getConnection()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getConnection', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getMetadataFactory', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getExpressionBuilder', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'beginTransaction', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getCache', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getCache();
    }
    public function transactional($func)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'transactional', array('func' => $func), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'commit', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->commit();
    }
    public function rollback()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'rollback', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getClassMetadata', array('className' => $className), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createQuery', array('dql' => $dql), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createNamedQuery', array('name' => $name), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createQueryBuilder', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'flush', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'clear', array('entityName' => $entityName), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->clear($entityName);
    }
    public function close()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'close', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->close();
    }
    public function persist($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'persist', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'remove', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->remove($entity);
    }
    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->refresh($entity, $lockMode);
    }
    public function detach($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'detach', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'merge', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'contains', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getEventManager', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getConfiguration', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'isOpen', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getUnitOfWork', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getProxyFactory', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'initializeObject', array('obj' => $obj), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getFilters', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'isFiltersStateClean', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'hasFilters', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerdabb2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;
        if (! $this->valueHolder20839) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder20839 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder20839->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__get', ['name' => $name], $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        if (isset(self::$publicProperties014b6[$name])) {
            return $this->valueHolder20839->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20839;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder20839;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20839;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder20839;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__isset', array('name' => $name), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20839;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder20839;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__unset', array('name' => $name), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20839;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder20839;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__clone', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        $this->valueHolder20839 = clone $this->valueHolder20839;
    }
    public function __sleep()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__sleep', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return array('valueHolder20839');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdabb2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdabb2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'initializeProxy', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20839;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20839;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
