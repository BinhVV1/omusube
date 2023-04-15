<?php

namespace ContainerPgzHabb;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder20839 = null;
    private $initializerdabb2 = null;
    private static $publicProperties014b6 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'install', array('path' => $path, 'source' => $source), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'installWithCode', array('code' => $code), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'preInstall', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createTempDir', array(), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'deleteDirs', array('arr' => $arr), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'checkSymbolName', array('string' => $string), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'deleteFile', array('path' => $path), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'checkSamePlugin', array('code' => $code), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'calcPluginDir', array('code' => $code), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'createPluginDir', array('d' => $d), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'unregisterPlugin', array('p' => $p), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'disable', array('plugin' => $plugin), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        return $this->valueHolder20839->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializerdabb2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolder20839) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder20839 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolder20839->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializerdabb2 && ($this->initializerdabb2->__invoke($valueHolder20839, $this, '__get', ['name' => $name], $this->initializerdabb2) || 1) && $this->valueHolder20839 = $valueHolder20839;
        if (isset(self::$publicProperties014b6[$name])) {
            return $this->valueHolder20839->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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

if (!\class_exists('PluginService_e75fd88', false)) {
    \class_alias(__NAMESPACE__.'\\PluginService_e75fd88', 'PluginService_e75fd88', false);
}
