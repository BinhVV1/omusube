<?php

namespace ContainerPgzHabb;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder20839 = null;
    private $initializerdabb2 = null;
    private static $publicProperties014b6 = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findAllEnabled', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findByCode', array('code' => $code), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'delete', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->delete($entity);
    }
    public function save($entity)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'save', array('entity' => $entity), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'clear', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findAll', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'count', array('criteria' => $criteria), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getClassName', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'matching', array('criteria' => $criteria), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializerdabb2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;
        if (! $this->valueHolder20839) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolder20839 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder20839->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__get', ['name' => $name], $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        if (isset(self::$publicProperties014b6[$name])) {
            return $this->valueHolder20839->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}
