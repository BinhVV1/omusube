<?php

namespace ContainerPgzHabb;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder20839 = null;
    private $initializerdabb2 = null;
    private static $publicProperties014b6 = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'error', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'info', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializerdabb2 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHolder20839) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder20839 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHolder20839->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__get', ['name' => $name], $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        if (isset(self::$publicProperties014b6[$name])) {
            return $this->valueHolder20839->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
