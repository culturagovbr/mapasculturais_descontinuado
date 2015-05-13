<?php
namespace Ceara;

use MapasCulturais\App;

class AuthProvider extends \MapasCulturais\AuthProviders\OpauthOpenId{

    protected function _createUser($response) {
        $app = App::i();
        $app->disableAccessControl();
        
        $email = $response['auth']['info']['email'];
        
        if($user = $app->repo('User')->findOneBy(['email' => $email])){
            $user->authUid = $response['auth']['uid'];
            
            $name = '';
            
            if(isset($response['auth']['info']['name'])){
                $name = $response['auth']['info']['name'];
            }elseif(isset($response['auth']['info']['first_name']) && isset($response['auth']['info']['last_name'])){
                $name = $response['auth']['info']['first_name'] . ' ' . $response['auth']['info']['last_name'];
            }
            
            $profile = $user->profile;
            
            if(('1' !== (string) $profile->type) && strtolower(trim($profile->name)) != strtolower(trim($name)) && strtolower(trim($profile->nomeCompleto)) != strtolower(trim($name))){
                // cria um agente do tipo user profile para o usuário criado acima
                $agent = new Entities\Agent($user);

                $agent->name = $name;
                $agent->type = 1;

                $app->em->persist($agent);
                $app->em->flush();

                $user->profile = $agent;
            }
            $user->save(true);
            
        }else{
            $user = parent::_createUser($response);
        }
        
        return $user;
    }
}