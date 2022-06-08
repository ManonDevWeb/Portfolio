<?php

namespace ContainerRGdRCcT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder352cc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd2378 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9779b = [
        
    ];

    public function getConnection()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getConnection', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getMetadataFactory', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getExpressionBuilder', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'beginTransaction', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getCache', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'transactional', array('func' => $func), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'commit', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->commit();
    }

    public function rollback()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'rollback', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getClassMetadata', array('className' => $className), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'createQuery', array('dql' => $dql), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'createNamedQuery', array('name' => $name), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'createQueryBuilder', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'flush', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'clear', array('entityName' => $entityName), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->clear($entityName);
    }

    public function close()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'close', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->close();
    }

    public function persist($entity)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'persist', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'remove', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'refresh', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'detach', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'merge', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'contains', array('entity' => $entity), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getEventManager', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getConfiguration', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'isOpen', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getUnitOfWork', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getProxyFactory', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'initializeObject', array('obj' => $obj), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'getFilters', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'isFiltersStateClean', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'hasFilters', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return $this->valueHolder352cc->hasFilters();
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

        $instance->initializerd2378 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder352cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder352cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder352cc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, '__get', ['name' => $name], $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        if (isset(self::$publicProperties9779b[$name])) {
            return $this->valueHolder352cc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder352cc;

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

        $targetObject = $this->valueHolder352cc;
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
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder352cc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder352cc;
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
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, '__isset', array('name' => $name), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder352cc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder352cc;
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
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, '__unset', array('name' => $name), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder352cc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder352cc;
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
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, '__clone', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        $this->valueHolder352cc = clone $this->valueHolder352cc;
    }

    public function __sleep()
    {
        $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, '__sleep', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;

        return array('valueHolder352cc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd2378 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd2378;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd2378 && ($this->initializerd2378->__invoke($valueHolder352cc, $this, 'initializeProxy', array(), $this->initializerd2378) || 1) && $this->valueHolder352cc = $valueHolder352cc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder352cc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder352cc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
