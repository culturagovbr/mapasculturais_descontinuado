<?php

namespace MapasCulturais\DoctrineProxies\__CG__\MapasCulturais\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SealFile extends \MapasCulturais\Entities\SealFile implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'owner', 'parent', 'id', 'md5', 'mimeType', 'group', 'name', '_path', 'description', 'private', 'createTimestamp', 'tmpFile', '_validationErrors'];
        }

        return ['__isInitialized__', 'owner', 'parent', 'id', 'md5', 'mimeType', 'group', 'name', '_path', 'description', 'private', 'createTimestamp', 'tmpFile', '_validationErrors'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SealFile $proxy) {
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
    public function save($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', [$flush]);

        return parent::save($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function makePrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'makePrivate', []);

        return parent::makePrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function makePublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'makePublic', []);

        return parent::makePublic();
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
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup($val)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$val]);

        return parent::setGroup($val);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativePath($get_from_storage = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelativePath', [$get_from_storage]);

        return parent::getRelativePath($get_from_storage);
    }

    /**
     * {@inheritDoc}
     */
    public function transform($transformation_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'transform', [$transformation_name]);

        return parent::transform($transformation_name);
    }

    /**
     * {@inheritDoc}
     */
    public function _prePersist($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_prePersist', [$args]);

        return parent::_prePersist($args);
    }

    /**
     * {@inheritDoc}
     */
    public function _postPersist($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_postPersist', [$args]);

        return parent::_postPersist($args);
    }

    /**
     * {@inheritDoc}
     */
    public function _preRemove($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_preRemove', [$args]);

        return parent::_preRemove($args);
    }

    /**
     * {@inheritDoc}
     */
    public function _postRemove($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_postRemove', [$args]);

        return parent::_postRemove($args);
    }

    /**
     * {@inheritDoc}
     */
    public function _preUpdate($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_preUpdate', [$args]);

        return parent::_preUpdate($args);
    }

    /**
     * {@inheritDoc}
     */
    public function _postUpdate($args = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_postUpdate', [$args]);

        return parent::_postUpdate($args);
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
    public function getFiles($group = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiles', [$group]);

        return parent::getFiles($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile($group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', [$group]);

        return parent::getFile($group);
    }

    /**
     * {@inheritDoc}
     */
    public function makeFilesPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'makeFilesPrivate', []);

        return parent::makeFilesPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function makeFilesPublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'makeFilesPublic', []);

        return parent::makeFilesPublic();
    }

}
