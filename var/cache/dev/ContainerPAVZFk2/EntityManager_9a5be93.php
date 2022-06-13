<?php

namespace ContainerPAVZFk2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8f2c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22393 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0b001 = [
        
    ];

    public function getConnection()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getConnection', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getMetadataFactory', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getExpressionBuilder', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'beginTransaction', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getCache', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'transactional', array('func' => $func), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'commit', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->commit();
    }

    public function rollback()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'rollback', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getClassMetadata', array('className' => $className), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'createQuery', array('dql' => $dql), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'createNamedQuery', array('name' => $name), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'createQueryBuilder', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'flush', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'clear', array('entityName' => $entityName), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->clear($entityName);
    }

    public function close()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'close', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->close();
    }

    public function persist($entity)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'persist', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'remove', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'refresh', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'detach', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'merge', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'contains', array('entity' => $entity), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getEventManager', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getConfiguration', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'isOpen', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getUnitOfWork', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getProxyFactory', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'initializeObject', array('obj' => $obj), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'getFilters', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'isFiltersStateClean', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'hasFilters', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return $this->valueHolderf8f2c->hasFilters();
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

        $instance->initializer22393 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf8f2c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8f2c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8f2c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, '__get', ['name' => $name], $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        if (isset(self::$publicProperties0b001[$name])) {
            return $this->valueHolderf8f2c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8f2c;

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

        $targetObject = $this->valueHolderf8f2c;
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
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8f2c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8f2c;
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
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, '__isset', array('name' => $name), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8f2c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8f2c;
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
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, '__unset', array('name' => $name), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8f2c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8f2c;
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
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, '__clone', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        $this->valueHolderf8f2c = clone $this->valueHolderf8f2c;
    }

    public function __sleep()
    {
        $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, '__sleep', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;

        return array('valueHolderf8f2c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22393 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22393;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22393 && ($this->initializer22393->__invoke($valueHolderf8f2c, $this, 'initializeProxy', array(), $this->initializer22393) || 1) && $this->valueHolderf8f2c = $valueHolderf8f2c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8f2c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8f2c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
