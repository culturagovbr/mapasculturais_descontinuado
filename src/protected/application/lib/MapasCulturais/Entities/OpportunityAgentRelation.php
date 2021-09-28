<?php
namespace MapasCulturais\Entities;

use Doctrine\ORM\Mapping as ORM;
use MapasCulturais\App;

/**
 * @ORM\Entity
 * @ORM\entity(repositoryClass="MapasCulturais\Repository")
 */
class OpportunityAgentRelation extends AgentRelation {
    const STATUS_REGISTRATION = -5;
    const STATUS_REGISTRATION_REJECTED = -6;

    /**
     * @var \MapasCulturais\Entities\Opportunity
     *
     * @ORM\ManyToOne(targetEntity="MapasCulturais\Entities\Opportunity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    protected $owner;
    
    protected function canUserCreate($user){
        if($user->is('admin'))
            return true;
        
        if($user->is('guest'))
            return false;
        
        if($this->status === self::STATUS_REGISTRATION && $user->id === $this->agent->user->id)
            return true;
        else
            return parent::canUserCreate($user);
    }

    protected function canUserModify($user){
        $group = App::i()->opportunityRegistrationAgentRelationGroupName;

        if($this->group == $group && $this->status == self::STATUS_REGISTRATION && $this->agent->user->id == $user->id)
            return true;
        else
            return parent::genericPermissionVerification($user);
    }

    function delete($flush = false){
        $this->checkPermission('remove');

        if($this->group == App::i()->opportunityRegistrationAgentRelationGroupName){
            $this->status = self::STATUS_REGISTRATION;
            $this->save($flush);
        }else{
            parent::delete($flush);
        }
    }

    function getGroup(){
        if($this->group == 'registration')
            return \MapasCulturais\i::__('Aprovados');
        else
            return $this->group;

    }

    function jsonSerialize() {
        $result = parent::jsonSerialize();
        return $result;
    }
}
