<?php

namespace ContainerT1OiWtX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde8c0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer37f1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1dd8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getConnection', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getMetadataFactory', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getExpressionBuilder', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'beginTransaction', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getCache', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'transactional', array('func' => $func), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->transactional($func);
    }

    public function commit()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'commit', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->commit();
    }

    public function rollback()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'rollback', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getClassMetadata', array('className' => $className), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'createQuery', array('dql' => $dql), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'createNamedQuery', array('name' => $name), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'createQueryBuilder', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'flush', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'clear', array('entityName' => $entityName), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->clear($entityName);
    }

    public function close()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'close', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->close();
    }

    public function persist($entity)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'persist', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'remove', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'refresh', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'detach', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'merge', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'contains', array('entity' => $entity), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getEventManager', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getConfiguration', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'isOpen', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getUnitOfWork', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getProxyFactory', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'initializeObject', array('obj' => $obj), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'getFilters', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'isFiltersStateClean', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'hasFilters', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return $this->valueHolderde8c0->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer37f1c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderde8c0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde8c0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde8c0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__get', ['name' => $name], $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        if (isset(self::$publicPropertiese1dd8[$name])) {
            return $this->valueHolderde8c0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde8c0;

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

        $targetObject = $this->valueHolderde8c0;
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
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde8c0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderde8c0;
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
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__isset', array('name' => $name), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde8c0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderde8c0;
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
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__unset', array('name' => $name), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde8c0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderde8c0;
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
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__clone', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        $this->valueHolderde8c0 = clone $this->valueHolderde8c0;
    }

    public function __sleep()
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__sleep', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        return array('valueHolderde8c0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer37f1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer37f1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'initializeProxy', array(), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde8c0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde8c0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
