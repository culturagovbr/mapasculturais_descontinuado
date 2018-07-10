<?php 
$_entity = $this->controller->id; 
$class = isset($disable_editable) ? '' : 'js-editable-typeSpaceLinked';

if($this->controller->id == 'agent' || $this->controller->id == 'space'){
    $entityRelated = ($this->controller->id == 'agent') ? 'space' : 'agent';
    $controllerRelated = $app::i()->getControllerByEntity("MapasCulturais\Entities\\".ucfirst($entityRelated));
    
    $entityTitle = ($entityRelated == 'agent') ? 'Agente' : 'Espaço';
    ?>


    <?php $this->applyTemplateHook('typeSpaceLinked','before'); ?>
    <div class="entity-type <?php echo $entityRelated; ?>-type" id="typeSpaceLinked">
        <div class="icon icon-<?php echo $entityRelated; ?>"></div>
        <a href="#" class='<?php echo $class ?> required'
            data-original-title="<?php \MapasCulturais\i::esc_attr_e("Tipo do $entityTitle");?>"
            data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione um tipo do $entityTitle");?>"
            data-entity='<?php echo $entityRelated; ?>'
            data-value='<?php echo $entity->typeSpaceLinked; ?>'>
                <?php echo $controllerRelated->type ? $controllerRelated->type->name : ''; ?>
        </a>
    </div>
    <!--.entity-type-->
    <?php $this->applyTemplateHook('typeSpaceLinked','after'); ?>
    
<?php } ?>