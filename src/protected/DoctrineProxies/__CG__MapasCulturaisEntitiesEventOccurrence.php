<?php

namespace MapasCulturais\DoctrineProxies\__CG__\MapasCulturais\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EventOccurrence extends \MapasCulturais\Entities\EventOccurrence implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }



    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MapasCulturais\\Entities\\EventOccurrence' . "\0" . 'flag_day_on', 'id', '_startsOn', '_endsOn', '_startsAt', '_endsAt', 'frequency', 'separation', 'count', '_until', 'timezoneName', 'event', 'eventId', 'space', 'spaceId', 'rule', 'status', '_validationErrors', '__enableMagicGetterHook'];
        }

        return ['__isInitialized__', '' . "\0" . 'MapasCulturais\\Entities\\EventOccurrence' . "\0" . 'flag_day_on', 'id', '_startsOn', '_endsOn', '_startsAt', '_endsAt', 'frequency', 'separation', 'count', '_until', 'timezoneName', 'event', 'eventId', 'space', 'spaceId', 'rule', 'status', '_validationErrors', '__enableMagicGetterHook'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EventOccurrence $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function validateFrequency($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validateFrequency', [$value]);

        return parent::validateFrequency($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setStarts($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStarts', [$date]);

        return parent::setStarts($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setStartsOn($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartsOn', [$value]);

        return parent::setStartsOn($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartsOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartsOn', []);

        return parent::getStartsOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndsOn($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndsOn', [$value]);

        return parent::setEndsOn($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndsOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndsOn', []);

        return parent::getEndsOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartsAt($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartsAt', [$value]);

        return parent::setStartsAt($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartsAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartsAt', []);

        return parent::getStartsAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndsAt($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndsAt', [$value]);

        return parent::setEndsAt($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndsAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndsAt', []);

        return parent::getEndsAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuration', []);

        return parent::getDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setUntil($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUntil', [$value]);

        return parent::setUntil($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getUntil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUntil', []);

        return parent::getUntil();
    }

    /**
     * {@inheritDoc}
     */
    public function getRecurrences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecurrences', []);

        return parent::getRecurrences();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setRule($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRule', [$value]);

        return parent::setRule($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRule', []);

        return parent::getRule();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function save($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', [$flush]);

        return parent::save($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', [$flush]);

        return parent::delete($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function _removeRequests()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_removeRequests', []);

        return parent::_removeRequests();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', [$args]);

        return parent::prePersist($args);
    }

    /**
     * {@inheritDoc}
     */
    public function postPersist($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'postPersist', [$args]);

        return parent::postPersist($args);
    }

    /**
     * {@inheritDoc}
     */
    public function preRemove($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preRemove', [$args]);

        return parent::preRemove($args);
    }

    /**
     * {@inheritDoc}
     */
    public function postRemove($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'postRemove', [$args]);

        return parent::postRemove($args);
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', [$args]);

        return parent::preUpdate($args);
    }

    /**
     * {@inheritDoc}
     */
    public function postUpdate($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'postUpdate', [$args]);

        return parent::postUpdate($args);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function refresh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'refresh', []);

        return parent::refresh();
    }

    /**
     * {@inheritDoc}
     */
    public function equals($entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'equals', [$entity]);

        return parent::equals($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function isArchived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isArchived', []);

        return parent::isArchived();
    }

    /**
     * {@inheritDoc}
     */
    public function simplify($properties = 'id,name')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'simplify', [$properties]);

        return parent::simplify($properties);
    }

    /**
     * {@inheritDoc}
     */
    public function dump()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'dump', []);

        return parent::dump();
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnerUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerUser', []);

        return parent::getOwnerUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(int $status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function canUser($action, $userOrAgent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canUser', [$action, $userOrAgent]);

        return parent::canUser($action, $userOrAgent);
    }

    /**
     * {@inheritDoc}
     */
    public function isUserAdmin(\MapasCulturais\UserInterface $user, $role = 'admin')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUserAdmin', [$user, $role]);

        return parent::isUserAdmin($user, $role);
    }

    /**
     * {@inheritDoc}
     */
    public function checkPermission($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkPermission', [$action]);

        return parent::checkPermission($action);
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyRequired($entity, $property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyRequired', [$entity, $property]);

        return parent::isPropertyRequired($entity, $property);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', []);

        return parent::getEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getSingleUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSingleUrl', []);

        return parent::getSingleUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getEditUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditUrl', []);

        return parent::getEditUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleteUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleteUrl', []);

        return parent::getDeleteUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getController', []);

        return parent::getController();
    }

    /**
     * {@inheritDoc}
     */
    public function getControllerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControllerId', []);

        return parent::getControllerId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityType', []);

        return parent::getEntityType();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityState', []);

        return parent::getEntityState();
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationErrors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidationErrors', []);

        return parent::getValidationErrors();
    }

    /**
     * {@inheritDoc}
     */
    public function repo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'repo', []);

        return parent::repo();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

}
