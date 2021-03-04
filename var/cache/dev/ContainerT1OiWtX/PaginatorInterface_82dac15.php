<?php

namespace ContainerT1OiWtX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        if ($this->valueHolderde8c0 === $returnValue = $this->valueHolderde8c0->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer37f1c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderde8c0) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderde8c0 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer37f1c && ($this->initializer37f1c->__invoke($valueHolderde8c0, $this, '__get', ['name' => $name], $this->initializer37f1c) || 1) && $this->valueHolderde8c0 = $valueHolderde8c0;

        if (isset(self::$publicPropertiese1dd8[$name])) {
            return $this->valueHolderde8c0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
