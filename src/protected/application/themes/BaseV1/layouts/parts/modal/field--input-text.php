<?php
$className = mb_strtolower($new_entity->getEntityTypeLabel());
$_placeholder = \MapasCulturais\i::esc_attr__('Título do novo') . ' ' . $className;
?>
<?php $this->part("modal/title", ['title' => $definition['label']]); ?>
<input type='text' name='<?php echo $field ?>' placeholder="<?php echo $_placeholder; ?>"
       value="<?php echo $new_entity->$field ?>" <?php if($definition['required']) echo 'required' ?> >