<?php
$app = \MapasCulturais\App::i();

function getParentWithAddress($child){
    if($child->parent){
        if($child->parent->endereco){
            return $child->parent;
        }else{
            return getParentWithAddress($child->parent);
        }
    }else{
        return $child;
    }
}

function updateAddressData($sourceSpace, $destinySpace) {
    $app = \MapasCulturais\App::i();
    $app->log->debug('--- UPDATING SPACE: '.$destinySpace);
    $destinySpace->endereco = $sourceSpace->endereco;
    $destinySpace->location = $sourceSpace->location;
    foreach ($app->getRegisteredGeoDivisions() as $d) {
        $metakey = $d->metakey;
        $destinySpace->$metakey = $sourceSpace->$metakey;
    }
    $app->log->debug('--- SPACE LOCATION '.$destinySpace->location);
}

$app->hook('entity(space).save:before', function($entity) use ($app) {

    $changedMetadata = $entity->getChangedMetadata();
    if( $changedMetadata && key_exists('endereco', $changedMetadata)){
        $oldEndereco = $changedMetadata['endereco']['oldValue'];
        $newEndereco = $changedMetadata['endereco']['newValue'];
    }

    //$oldLocation = get_class($args) === 'Doctrine\ORM\Event\PreUpdateEventArgs' ? $args->getOldValue('location') : null;

    //$app->log->debug('this: '.$entity->id.', parentWithAdd: '.getParentWithAddress($entity)->id);
    //$app->log->debug('-- OLD LOCATION: '.$oldLocation);

    if(( $entity->parent &&
            (!$entity->endereco ||
            $entity->endereco == $entity->parent->endereco ||
            (isset($oldEndereco) && $entity->endereco == $oldEndereco) ||
            !$entity->location)
    )){
        $app->log->debug('UPDATING SPACE:');
        updateAddressData(getParentWithAddress($entity), $entity);
    }

   foreach($entity->children as $child){
        if( !$child->endereco || $child->endereco == $entity->endereco || (isset($oldEndereco) && $child->endereco == $oldEndereco) ){
            $app->log->debug('UPDATING CHILDREN:');
            updateAddressData($entity, $child);
        }
    }

});