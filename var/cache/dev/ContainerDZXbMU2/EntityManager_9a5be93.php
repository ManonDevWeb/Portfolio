<?php

namespace ContainerDZXbMU2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6960b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc075b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties60aa9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getConnection', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getMetadataFactory', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getExpressionBuilder', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'beginTransaction', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getCache', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'transactional', array('func' => $func), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'commit', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->commit();
    }

    public function rollback()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'rollback', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getClassMetadata', array('className' => $className), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'createQuery', array('dql' => $dql), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'createNamedQuery', array('name' => $name), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'createQueryBuilder', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'flush', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'clear', array('entityName' => $entityName), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->clear($entityName);
    }

    public function close()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'close', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->close();
    }

    public function persist($entity)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'persist', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'remove', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'refresh', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'detach', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'merge', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'contains', array('entity' => $entity), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getEventManager', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getConfiguration', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'isOpen', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getUnitOfWork', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getProxyFactory', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'initializeObject', array('obj' => $obj), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'getFilters', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'isFiltersStateClean', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'hasFilters', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return $this->valueHolder6960b->hasFilters();
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

        $instance->initializerc075b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6960b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6960b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6960b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, '__get', ['name' => $name], $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        if (isset(self::$publicProperties60aa9[$name])) {
            return $this->valueHolder6960b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6960b;

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

        $targetObject = $this->valueHolder6960b;
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
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6960b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6960b;
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
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, '__isset', array('name' => $name), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6960b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6960b;
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
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, '__unset', array('name' => $name), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6960b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6960b;
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
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, '__clone', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        $this->valueHolder6960b = clone $this->valueHolder6960b;
    }

    public function __sleep()
    {
        $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, '__sleep', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;

        return array('valueHolder6960b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc075b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc075b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc075b && ($this->initializerc075b->__invoke($valueHolder6960b, $this, 'initializeProxy', array(), $this->initializerc075b) || 1) && $this->valueHolder6960b = $valueHolder6960b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6960b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6960b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
