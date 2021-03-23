<?php

namespace ContainerNvJc2xI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder90b65 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00dab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescd6d7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getConnection', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getMetadataFactory', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getExpressionBuilder', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'beginTransaction', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getCache', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'transactional', array('func' => $func), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->transactional($func);
    }

    public function commit()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'commit', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->commit();
    }

    public function rollback()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'rollback', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getClassMetadata', array('className' => $className), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'createQuery', array('dql' => $dql), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'createNamedQuery', array('name' => $name), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'createQueryBuilder', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'flush', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'clear', array('entityName' => $entityName), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->clear($entityName);
    }

    public function close()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'close', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->close();
    }

    public function persist($entity)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'persist', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'remove', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'refresh', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'detach', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'merge', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'contains', array('entity' => $entity), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getEventManager', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getConfiguration', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'isOpen', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getUnitOfWork', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getProxyFactory', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'initializeObject', array('obj' => $obj), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'getFilters', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'isFiltersStateClean', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'hasFilters', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return $this->valueHolder90b65->hasFilters();
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

        $instance->initializer00dab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder90b65) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder90b65 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder90b65->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, '__get', ['name' => $name], $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        if (isset(self::$publicPropertiescd6d7[$name])) {
            return $this->valueHolder90b65->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90b65;

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

        $targetObject = $this->valueHolder90b65;
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
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90b65;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder90b65;
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
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, '__isset', array('name' => $name), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90b65;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder90b65;
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
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, '__unset', array('name' => $name), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90b65;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder90b65;
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
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, '__clone', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        $this->valueHolder90b65 = clone $this->valueHolder90b65;
    }

    public function __sleep()
    {
        $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, '__sleep', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;

        return array('valueHolder90b65');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00dab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00dab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00dab && ($this->initializer00dab->__invoke($valueHolder90b65, $this, 'initializeProxy', array(), $this->initializer00dab) || 1) && $this->valueHolder90b65 = $valueHolder90b65;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder90b65;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder90b65;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
