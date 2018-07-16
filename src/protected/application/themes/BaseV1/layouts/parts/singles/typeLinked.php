<?php 
if(($this->controller->id == 'agent' || $this->controller->id == 'space') && $entity->isLinkedAgentSpace()){
    
    $_entity = $this->controller->id; 
    $class = isset($disable_editable) ? '' : 'js-editable-typeLinked';

    $entityRelated = strtolower($entity->entityLinked()->getEntityType());
    $entityTitle = $this->dict('entities: ' . strtolower($entity->entityLinked()->getEntityType()),false);
    ?>


    <?php $this->applyTemplateHook('typeLinked','before'); ?>
    <div class="entity-type <?php echo $entityRelated; ?>-type" id="typeLinked">
        <div class="icon icon-<?php echo $entityRelated; ?>"></div>
        <a href="#" class='<?php echo $class ?> required'
            data-original-title="<?php \MapasCulturais\i::esc_attr_e("Tipo do $entityTitle");?>"
            data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione um tipo do $entityTitle");?>"
            data-entity='<?php echo $entityRelated; ?>'
            data-value='<?php echo $entity->typeLinked; ?>'>
                <?php echo $entity->typeLinked ? $entity->typeLinked->name : ''; ?>
        </a>
    </div>
    <!--.entity-type-->
    <?php $this->applyTemplateHook('typeLinked','after'); ?>
    
<?php } ?>