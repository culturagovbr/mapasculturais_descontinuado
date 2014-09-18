<?php
namespace MapasCulturais\Repositories;

use MapasCulturais\Entities;

class User extends \MapasCulturais\Repository{

    protected $_isCreating = false;

    /**
     * Retorna um usuário pelo auth_uid e auth_provider
     * @param string $auth_uid
     * @param int $auth_provider
     * @return \MapasCulturais\Entities\User|null
     */
    public function getByAuth($auth_provider, $auth_uid){
        $user_query = $this->_em->createQuery('SELECT u FROM MapasCulturais\Entities\User u WHERE u.authProvider=:auth_provider AND u.authUid = :auth_uid');

        $user_query->setParameter('auth_provider', $auth_provider);
        $user_query->setParameter('auth_uid', $auth_uid);
        $user = $user_query->getOneOrNullResult();
        return $user;
    }

    public function createByAuthResponse($response){
        $this->_isCreating = true;
        $app = \MapasCulturais\App::i();
        
        $app->log->debug(print_r($response, true));

        $info = isset($response['auth']['info']) && !empty($response['auth']['info']) ? $response['auth']['info'] : $response['auth']['raw'];
        
         // cria o usuário
        $user = new Entities\User;
        $user->authProvider = $response['auth']['provider'];
        $user->authUid = $response['auth']['uid'];
        $user->email = $info['email'];
        $this->_em->persist($user);

        // cria um agente do tipo user profile para o usuário criado acima
        $agent = new Entities\Agent($user);
        $agent->isUserProfile = true;
        if(isset($info['name']))
            $agent->name = $info['name'];
        
        elseif(isset($info['full_name']))
            $agent->name = $info['full_name'];
        
        elseif(isset($info['first_name']) && isset($info['last_name']))
            $agent->name = $info['first_name'] . ' ' . $info['last_name'];
        
        elseif(isset($info['first_name']))
            $agent->name = $info['first_name'];
        else
            $agent->name = 'Sem nome';


        $app->em->persist($agent);

        $app->em->flush();
        $this->_isCreating = false;

        return $user;
    }

    public function isCreating(){
        return $this->_isCreating;
    }
}