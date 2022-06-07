<?php

namespace ContainerBOkcsjf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9437 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9e547 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd699e = [
        
    ];

    public function getConnection()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getConnection', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getMetadataFactory', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getExpressionBuilder', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'beginTransaction', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getCache', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'transactional', array('func' => $func), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'commit', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->commit();
    }

    public function rollback()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'rollback', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getClassMetadata', array('className' => $className), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'createQuery', array('dql' => $dql), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'createNamedQuery', array('name' => $name), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'createQueryBuilder', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'flush', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'clear', array('entityName' => $entityName), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->clear($entityName);
    }

    public function close()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'close', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->close();
    }

    public function persist($entity)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'persist', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'remove', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'refresh', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'detach', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'merge', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'contains', array('entity' => $entity), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getEventManager', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getConfiguration', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'isOpen', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getUnitOfWork', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getProxyFactory', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'initializeObject', array('obj' => $obj), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'getFilters', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'isFiltersStateClean', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'hasFilters', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return $this->valueHolderf9437->hasFilters();
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

        $instance->initializer9e547 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf9437) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9437 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9437->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, '__get', ['name' => $name], $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        if (isset(self::$publicPropertiesd699e[$name])) {
            return $this->valueHolderf9437->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9437;

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

        $targetObject = $this->valueHolderf9437;
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
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9437;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9437;
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
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, '__isset', array('name' => $name), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9437;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9437;
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
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, '__unset', array('name' => $name), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9437;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9437;
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
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, '__clone', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        $this->valueHolderf9437 = clone $this->valueHolderf9437;
    }

    public function __sleep()
    {
        $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, '__sleep', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;

        return array('valueHolderf9437');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9e547 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9e547;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9e547 && ($this->initializer9e547->__invoke($valueHolderf9437, $this, 'initializeProxy', array(), $this->initializer9e547) || 1) && $this->valueHolderf9437 = $valueHolderf9437;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9437;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9437;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
