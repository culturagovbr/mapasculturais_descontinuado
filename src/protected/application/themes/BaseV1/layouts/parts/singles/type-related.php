<?php 
$_entity = $this->controller->id; 
$class = isset($disable_editable) ? '' : 'js-editable-type-related';

if($this->controller->id == 'agent' || $this->controller->id == 'space'){
    $entityRelated = ($this->controller->id == 'agent') ? 'space' : 'agent';
    $controllerRelated = $app::i()->getControllerByEntity("MapasCulturais\Entities\\".ucfirst($entityRelated));
    
    $entityTitle = ($entityRelated == 'agent') ? 'Agente' : 'Espaço';
    ?>


    <?php $this->applyTemplateHook('typeRelated','before'); ?>
    <div class="entity-type <?php echo $entityRelated; ?>-type">
        <div class="icon icon-<?php echo $entityRelated; ?>"></div>
        <a href="#" class='<?php echo $class ?> required'
            data-original-title="<?php \MapasCulturais\i::esc_attr_e("Tipo do $entityTitle");?>"
            data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione um tipo do $entityTitle");?>"
            data-entity='<?php echo $entityRelated ?>'
            data-value='<?php echo $controllerRelated->type ?>'>
                <?php echo $controllerRelated->type ? $controllerRelated->type->name : ''; ?>
        </a>
    </div>
    <!--.entity-type-->
    <?php $this->applyTemplateHook('typeRelated','after'); ?>
    
<?php } ?>