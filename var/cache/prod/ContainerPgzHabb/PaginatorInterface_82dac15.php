<?php

namespace ContainerPgzHabb;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';
class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder20839 = null;
    private $initializerdabb2 = null;
    private static $publicProperties014b6 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        if ($this->valueHolder20839 === $returnValue = $this->valueHolder20839->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializerdabb2 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder20839) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder20839 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__get', ['name' => $name], $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        if (isset(self::$publicProperties014b6[$name])) {
            return $this->valueHolder20839->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
