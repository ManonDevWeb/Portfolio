<?php

namespace ContainerVwNeVHx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9152d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb976 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc434b = [
        
    ];

    public function getConnection()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getConnection', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getMetadataFactory', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getExpressionBuilder', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'beginTransaction', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getCache', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'transactional', array('func' => $func), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'wrapInTransaction', array('func' => $func), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'commit', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->commit();
    }

    public function rollback()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'rollback', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getClassMetadata', array('className' => $className), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'createQuery', array('dql' => $dql), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'createNamedQuery', array('name' => $name), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'createQueryBuilder', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'flush', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'clear', array('entityName' => $entityName), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->clear($entityName);
    }

    public function close()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'close', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->close();
    }

    public function persist($entity)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'persist', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'remove', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'refresh', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'detach', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'merge', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'contains', array('entity' => $entity), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getEventManager', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getConfiguration', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'isOpen', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getUnitOfWork', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getProxyFactory', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'initializeObject', array('obj' => $obj), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'getFilters', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'isFiltersStateClean', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'hasFilters', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return $this->valueHolder9152d->hasFilters();
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

        $instance->initializereb976 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9152d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9152d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9152d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, '__get', ['name' => $name], $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        if (isset(self::$publicPropertiesc434b[$name])) {
            return $this->valueHolder9152d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9152d;

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

        $targetObject = $this->valueHolder9152d;
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
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9152d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9152d;
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
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, '__isset', array('name' => $name), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9152d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9152d;
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
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, '__unset', array('name' => $name), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9152d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9152d;
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
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, '__clone', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        $this->valueHolder9152d = clone $this->valueHolder9152d;
    }

    public function __sleep()
    {
        $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, '__sleep', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;

        return array('valueHolder9152d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb976 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb976;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb976 && ($this->initializereb976->__invoke($valueHolder9152d, $this, 'initializeProxy', array(), $this->initializereb976) || 1) && $this->valueHolder9152d = $valueHolder9152d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9152d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9152d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
