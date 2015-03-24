<?php

use MapasCulturais\Entities\Agent;
use MapasCulturais\Entities\AgentFile;
use MapasCulturais\Entities\Space;
use MapasCulturais\Entities\SpaceFile;

$app = MapasCulturais\App::i();
$em = $app->em;
$conn = $em->getConnection();

return array(
    'import ceara data' => function() use( $conn, $app ) {
        $data = json_decode(file_get_contents('/tmp/ceara-data.json'));

        $admin_user = $app->repo('User')->find(1);
        $admin_profile = $app->repo('Agent')->find(1);

        $space_types = [
            'post' => $app->getRegisteredEntityTypeById ('MapasCulturais\Entities\Space', 299),
            'patrimonio-material' => $app->getRegisteredEntityTypeById ('MapasCulturais\Entities\Space', 200),
            'patrimonio-imaterial' => $app->getRegisteredEntityTypeById ('MapasCulturais\Entities\Space', 201),
            'equipamento' => $app->getRegisteredEntityTypeById ('MapasCulturais\Entities\Space', 199),
        ];

        $endereco = function($ed){
            if($ed->endereco){
                $result = $ed->endereco;
            }

            if($ed->numero && $ed->endereco){
                $result .= ' ' . $ed->numero;
            }

            if($ed->bairro){
                $result .= $ed->endereco ? ', ' . $ed->bairro : $ed->bairro;
            }

            if($ed->cep){
                $result .= $ed->cep ? ', CEP: ' . $ed->cep : ' CEP: ' . $ed->cep;
            }
        };

        $props = [];

        foreach ($data as $ed) {
            foreach($ed as $prop => $v)
                if(!in_array($prop, $props))
                    $props[] = $prop;


            continue;
            echo "=====> importando {$ed->post_type} de id {$ed->ID} ({$ed->post_title}) \n";

            if ($ed->post_type == 'instituicao') {
                $entity = new Agent;
                $entity->type = $app->getRegisteredEntityTypeById($entity, 2);
                $entity->user = $admin_user;
            } else {
                $entity = new Space;
                $entity->type = $space_types[$ed->post_type];
                $entity->owner = $admin_profile;

                if($ed->publico_amount){
                    $entity->capacidade = $ed->publico_amount;
                }

                if($ed->horario_visita){
                    $entity->horario = $ed->horario_visita;
                }
            }


            $entity->name = $ed->post_title;
            $entity->longDescription = $ed->post_content;

            if($ed->sinopse){
                $entity->shortDescription = $ed->sinopse;
            }

            $entity->endereco = $endereco($ed);

            if($ed->telefone){
                $entity->telefonePublico = $ed->telefone;
            }

            if($ed->site){
                if(!preg_match('#^http', $ed->site)){
                    $ed->site = 'http://' . $ed->site;
                }

                $entity->site = $ed->site;
            }



            //@TODO: data de criação

            try{
                if (isset($ed->_mpv_location) && is_object($ed->_mpv_location)) {
                    $entity->location = new MapasCulturais\Types\GeoPoint($ed->_mpv_location->lon, $ed->_mpv_location->lat);
                }
            }catch(Exception $e){
                print_r($ed);
            }
        }
        sort($props);
        print_r($props);

        return false;
    }
);
