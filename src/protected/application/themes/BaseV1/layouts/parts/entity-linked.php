<?php if($this->isEditable() && $entity->isLinkedAgentSpace()): ?>
    <p>
        <span class="label">
            <?php printf(
                \MapasCulturais\i::__("Este %s está vinculado a um <a href='%s'>%s</a>."),
                $this->dict('entities: ' . strtolower($entity->getEntityType()),false),
                $entity->entityLinked()->getSingleUrl(),
                $this->dict('entities: ' . strtolower($entity->entityLinked()->getEntityType()),false)
            );?>
        </span>

        <span class="js-editable" data-edit="linkedAgentSpace" id="linkedAgentSpace" data-value="Sim" style="display:none;"></span>
        <a href="#" class="btn btn-danger" id="unlinkedAgentSpace"><?php printf(\MapasCulturais\i::__('Desvincular de %s'), $this->dict('entities: ' . strtolower($entity->entityLinked()->getEntityType()),false));?></a>
    </p>
<?php endif; ?>