<?php
namespace MapasCulturais\Exceptions;

class PermissionDenied extends \Exception{
    use \MapasCulturais\Traits\MagicGetter;

    protected $user;

    protected $targetObject;

    protected $action;

    public function __construct($user, $targetObject, $action) {
        $this->user = $user;
        $this->targetObject = $targetObject;
        $this->action = $action;
        $this->user_id = is_object($user) ? $user->id : 'guest';

        $this->class = str_replace('MapasCulturais\Entities\\', '', get_class($targetObject));
        $message = "User with id {$this->user_id} is trying to $action the $this->class with the id $targetObject->id";

        parent::__construct($message);
    }
}