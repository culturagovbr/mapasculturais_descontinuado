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

        $admin = $app->repo('User')->find(1);

        foreach($data as $ed){
            echo "=====> importando {$ed->post_type} de id {$ed->ID} ({$ed->post_title}) \n";
            if($ed->post_type == 'instituicao'){
                $entity = new Agent;
                $entity->type = $app->getRegisteredEntityTypeById($entity, 2);

            }else{

            }

            $entity->owner = $admin;

            $entity->name = $ed->post_title;
            $entity->longDescription = $ed->post_content;

            if(is_object($ed->_mpv_location)){
                $entity->location = new MapasCulturais\Types\GeoPoint($ed->_mpv_location->lat, $ed->_mpv_location->lon);
            }

            print_r($ed);
            die;
        }

        return false;
    }
);
