<?php

namespace MapasCulturais\DoctrineProxies\__CG__\MapasCulturais\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Notification extends \MapasCulturais\Entities\Notification implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'createTimestamp', 'actionTimestamp', 'message', 'status', 'user', 'request', '__metadata', '__permissionsCache', '_validationErrors', '__skipQueuingPCacheRecreation', '' . "\0" . 'MapasCulturais\\Entities\\Notification' . "\0" . '__enabled'];
        }

        return ['__isInitialized__', 'id', 'createTimestamp', 'actionTimestamp', 'message', 'status', 'user', 'request', '__metadata', '__permissionsCache', '_validationErrors', '__skipQueuingPCacheRecreation', '' . "\0" . 'MapasCulturais\\Entities\\Notification' . "\0" . '__enabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Notification $proxy) {
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
    public function getOwnerUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerUser', []);

        return parent::getOwnerUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getApproveUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApproveUrl', []);

        return parent::getApproveUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getRejectUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRejectUrl', []);

        return parent::getRejectUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRequest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRequest', []);

        return parent::getIsRequest();
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
    public function setStatus($status)
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
    public function getEntityTypeLabel($plural = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityTypeLabel', [$plural]);

        return parent::getEntityTypeLabel($plural);
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
    public function save()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', []);

        return parent::save();
    }

    /**
     * {@inheritDoc}
     */
    public function saveFlush($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveFlush', [$flush]);

        return parent::saveFlush($flush);
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
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
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

    /**
     * {@inheritDoc}
     */
    public function permissionCacheExists()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'permissionCacheExists', []);

        return parent::permissionCacheExists();
    }

    /**
     * {@inheritDoc}
     */
    public function _cachedCanUser($action, \MapasCulturais\UserInterface $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_cachedCanUser', [$action, $user]);

        return parent::_cachedCanUser($action, $user);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionsList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionsList', []);

        return parent::getPermissionsList();
    }

    /**
     * {@inheritDoc}
     */
    public function getPCacheObjectType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPCacheObjectType', []);

        return parent::getPCacheObjectType();
    }

    /**
     * {@inheritDoc}
     */
    public function createPermissionsCacheForUsers($users = NULL, $flush = false, $delete_old = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createPermissionsCacheForUsers', [$users, $flush, $delete_old]);

        return parent::createPermissionsCacheForUsers($users, $flush, $delete_old);
    }

    /**
     * {@inheritDoc}
     */
    public function deletePermissionsCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deletePermissionsCache', []);

        return parent::deletePermissionsCache();
    }

    /**
     * {@inheritDoc}
     */
    public function enqueueToPCacheRecreation($skip_extra = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enqueueToPCacheRecreation', [$skip_extra]);

        return parent::enqueueToPCacheRecreation($skip_extra);
    }

    /**
     * {@inheritDoc}
     */
    public function recreatePermissionCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recreatePermissionCache', []);

        return parent::recreatePermissionCache();
    }

}
