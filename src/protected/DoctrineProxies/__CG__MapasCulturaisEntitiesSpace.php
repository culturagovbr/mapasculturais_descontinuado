<?php

namespace MapasCulturais\DoctrineProxies\__CG__\MapasCulturais\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Space extends \MapasCulturais\Entities\Space implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '__enableMagicGetterHook', 'id', 'location', '_geoLocation', 'name', 'public', 'shortDescription', 'longDescription', 'createTimestamp', 'status', '_type', 'eventOccurrences', 'parent', '_children', 'owner', '_ownerId', '_relatedOpportunities', '__metadata', '__files', '__agentRelations', '__termRelations', '__sealRelations', '__permissionsCache', 'updateTimestamp', '_subsiteId', 'subsite', '_validationErrors', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '_newOwner', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '__changedMetadata', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '__createdMetadata', '_avatar', 'terms', '_newParent', '__skipQueuingPCacheRecreation', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '__enabled'];
        }

        return ['__isInitialized__', '__enableMagicGetterHook', 'id', 'location', '_geoLocation', 'name', 'public', 'shortDescription', 'longDescription', 'createTimestamp', 'status', '_type', 'eventOccurrences', 'parent', '_children', 'owner', '_ownerId', '_relatedOpportunities', '__metadata', '__files', '__agentRelations', '__termRelations', '__sealRelations', '__permissionsCache', 'updateTimestamp', '_subsiteId', 'subsite', '_validationErrors', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '_newOwner', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '__changedMetadata', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '__createdMetadata', '_avatar', 'terms', '_newParent', '__skipQueuingPCacheRecreation', '' . "\0" . 'MapasCulturais\\Entities\\Space' . "\0" . '__enabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Space $proxy) {
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
    public function save($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', [$flush]);

        return parent::save($flush);
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
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnerId($owner_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnerId', [$owner_id]);

        return parent::setOwnerId($owner_id);
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\MapasCulturais\Entities\Agent $owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeGroup', []);

        return parent::getTypeGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function validateType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validateType', []);

        return parent::validateType();
    }

    /**
     * {@inheritDoc}
     */
    public function __metadata__get($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__metadata__get', [$name]);

        return parent::__metadata__get($name);
    }

    /**
     * {@inheritDoc}
     */
    public function __metadata__set($name, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__metadata__set', [$name, $value]);

        return parent::__metadata__set($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegisteredMetadata($meta_key = NULL, $include_private = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegisteredMetadata', [$meta_key, $include_private]);

        return parent::getRegisteredMetadata($meta_key, $include_private);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadata($meta_key = NULL, $return_metadata_object = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadata', [$meta_key, $return_metadata_object]);

        return parent::getMetadata($meta_key, $return_metadata_object);
    }

    /**
     * {@inheritDoc}
     */
    public function getChangedMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangedMetadata', []);

        return parent::getChangedMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadata($meta_key, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadata', [$meta_key, $value]);

        return parent::setMetadata($meta_key, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataValidationErrors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadataValidationErrors', []);

        return parent::getMetadataValidationErrors();
    }

    /**
     * {@inheritDoc}
     */
    public function saveMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveMetadata', []);

        return parent::saveMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function getInstagramUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstagramUrl', []);

        return parent::getInstagramUrl();
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

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaLists($group = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaLists', [$group]);

        return parent::getMetaLists($group);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function locationEquals($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'locationEquals', [$location]);

        return parent::locationEquals($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getTerms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTerms', []);

        return parent::getTerms();
    }

    /**
     * {@inheritDoc}
     */
    public function setTerms(array $taxonomy_terms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTerms', [$taxonomy_terms]);

        return parent::setTerms($taxonomy_terms);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxonomiesValidationErrors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxonomiesValidationErrors', []);

        return parent::getTaxonomiesValidationErrors();
    }

    /**
     * {@inheritDoc}
     */
    public function saveTerms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveTerms', []);

        return parent::saveTerms();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxonomyTerms($taxonomy_slug = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxonomyTerms', [$taxonomy_slug]);

        return parent::getTaxonomyTerms($taxonomy_slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgentRelations($has_control = NULL, $include_pending_relations = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgentRelations', [$has_control, $include_pending_relations]);

        return parent::getAgentRelations($has_control, $include_pending_relations);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedAgents($group = NULL, $return_relations = false, $include_pending_relations = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedAgents', [$group, $return_relations, $include_pending_relations]);

        return parent::getRelatedAgents($group, $return_relations, $include_pending_relations);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupRelationsAgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupRelationsAgent', []);

        return parent::getGroupRelationsAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function getAgentRelationsGrouped($group = NULL, $include_pending_relations = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgentRelationsGrouped', [$group, $include_pending_relations]);

        return parent::getAgentRelationsGrouped($group, $include_pending_relations);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdsOfUsersWithControl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdsOfUsersWithControl', []);

        return parent::getIdsOfUsersWithControl();
    }

    /**
     * {@inheritDoc}
     */
    public function deleteUsersWithControlCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteUsersWithControlCache', []);

        return parent::deleteUsersWithControlCache();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsersWithControl(array &$object_stack = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsersWithControl', [$object_stack]);

        return parent::getUsersWithControl($object_stack);
    }

    /**
     * {@inheritDoc}
     */
    public function userHasControl($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'userHasControl', [$user]);

        return parent::userHasControl($user);
    }

    /**
     * {@inheritDoc}
     */
    public function createAgentRelation(\MapasCulturais\Entities\Agent $agent, $group, $has_control = false, $save = true, $flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createAgentRelation', [$agent, $group, $has_control, $save, $flush]);

        return parent::createAgentRelation($agent, $group, $has_control, $save, $flush);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAgentRelation(\MapasCulturais\Entities\Agent $agent, $group, $flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAgentRelation', [$agent, $group, $flush]);

        return parent::removeAgentRelation($agent, $group, $flush);
    }

    /**
     * {@inheritDoc}
     */
    public function setRelatedAgentControl($agent, $control)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelatedAgentControl', [$agent, $control]);

        return parent::setRelatedAgentControl($agent, $control);
    }

    /**
     * {@inheritDoc}
     */
    public function canUserRemoveAgentRelation($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canUserRemoveAgentRelation', [$user]);

        return parent::canUserRemoveAgentRelation($user);
    }

    /**
     * {@inheritDoc}
     */
    public function canUserRemoveAgentRelationWithControl($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canUserRemoveAgentRelationWithControl', [$user]);

        return parent::canUserRemoveAgentRelationWithControl($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getSealRelations($include_pending_relations = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSealRelations', [$include_pending_relations]);

        return parent::getSealRelations($include_pending_relations);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedSeals($return_relations = false, $include_pending_relations = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedSeals', [$return_relations, $include_pending_relations]);

        return parent::getRelatedSeals($return_relations, $include_pending_relations);
    }

    /**
     * {@inheritDoc}
     */
    public function createSealRelation(\MapasCulturais\Entities\Seal $seal, $save = true, $flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createSealRelation', [$seal, $save, $flush]);

        return parent::createSealRelation($seal, $save, $flush);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSealRelation(\MapasCulturais\Entities\Seal $seal, $flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSealRelation', [$seal, $flush]);

        return parent::removeSealRelation($seal, $flush);
    }

    /**
     * {@inheritDoc}
     */
    public function canUserRemoveSealRelation($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canUserRemoveSealRelation', [$user]);

        return parent::canUserRemoveSealRelation($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestSealRelationUrl($idRelation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequestSealRelationUrl', [$idRelation]);

        return parent::getRequestSealRelationUrl($idRelation);
    }

    /**
     * {@inheritDoc}
     */
    public function getRenewSealRelationUrl($idRelation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRenewSealRelationUrl', [$idRelation]);

        return parent::getRenewSealRelationUrl($idRelation);
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
    public function setParentId($parent_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentId', [$parent_id]);

        return parent::setParentId($parent_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\MapasCulturais\Entity $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildrenIds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildrenIds', []);

        return parent::getChildrenIds();
    }

    /**
     * {@inheritDoc}
     */
    public function undelete($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'undelete', [$flush]);

        return parent::undelete($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function destroy($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'destroy', [$flush]);

        return parent::destroy($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function getUndeleteUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUndeleteUrl', []);

        return parent::getUndeleteUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getDestroyUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestroyUrl', []);

        return parent::getDestroyUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUrl', []);

        return parent::getPublishUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnpublishUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnpublishUrl', []);

        return parent::getUnpublishUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function publish($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publish', [$flush]);

        return parent::publish($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function unpublish($flush = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unpublish', [$flush]);

        return parent::unpublish($flush);
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

    /**
     * {@inheritDoc}
     */
    public function authorizedInThisSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'authorizedInThisSite', []);

        return parent::authorizedInThisSite();
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginSiteUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginSiteUrl', []);

        return parent::getOriginSiteUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubsite(\MapasCulturais\Entities\Subsite $subsite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubsite', [$subsite]);

        return parent::setSubsite($subsite);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubsiteId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubsiteId', []);

        return parent::getSubsiteId();
    }

    /**
     * {@inheritDoc}
     */
    public function getArchiveUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchiveUrl', []);

        return parent::getArchiveUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnarchiveUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnarchiveUrl', []);

        return parent::getUnarchiveUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function archive($flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'archive', [$flush]);

        return parent::archive($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function unarchive($flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unarchive', [$flush]);

        return parent::unarchive($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function _getRevisionData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getRevisionData', []);

        return parent::_getRevisionData();
    }

    /**
     * {@inheritDoc}
     */
    public function _newCreatedRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_newCreatedRevision', []);

        return parent::_newCreatedRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function _newModifiedRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_newModifiedRevision', []);

        return parent::_newModifiedRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function _newDeletedRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_newDeletedRevision', []);

        return parent::_newDeletedRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastRevision', []);

        return parent::getLastRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function getRevisions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevisions', []);

        return parent::getRevisions();
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunities($status = 1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunities', [$status]);

        return parent::getOpportunities($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveOpportunities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiveOpportunities', []);

        return parent::getActiveOpportunities();
    }

}
