<?php

namespace ContainerDBEJ9HC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b3fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer084ea = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6bb81 = [
        
    ];

    public function getConnection()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getConnection', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getMetadataFactory', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getExpressionBuilder', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'beginTransaction', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getCache', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'transactional', array('func' => $func), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'commit', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->commit();
    }

    public function rollback()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'rollback', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'createQuery', array('dql' => $dql), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'createQueryBuilder', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'flush', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'clear', array('entityName' => $entityName), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'close', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->close();
    }

    public function persist($entity)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'persist', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'remove', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'refresh', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'detach', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'merge', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'contains', array('entity' => $entity), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getEventManager', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getConfiguration', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'isOpen', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getUnitOfWork', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getProxyFactory', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'getFilters', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'isFiltersStateClean', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'hasFilters', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return $this->valueHolder3b3fb->hasFilters();
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

        $instance->initializer084ea = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3b3fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3b3fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3b3fb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, '__get', ['name' => $name], $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        if (isset(self::$publicProperties6bb81[$name])) {
            return $this->valueHolder3b3fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b3fb;

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

        $targetObject = $this->valueHolder3b3fb;
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
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b3fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b3fb;
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
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, '__isset', array('name' => $name), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b3fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b3fb;
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
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, '__unset', array('name' => $name), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b3fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b3fb;
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
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, '__clone', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        $this->valueHolder3b3fb = clone $this->valueHolder3b3fb;
    }

    public function __sleep()
    {
        $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, '__sleep', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;

        return array('valueHolder3b3fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer084ea = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer084ea;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer084ea && ($this->initializer084ea->__invoke($valueHolder3b3fb, $this, 'initializeProxy', array(), $this->initializer084ea) || 1) && $this->valueHolder3b3fb = $valueHolder3b3fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b3fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b3fb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
