<?php
$className = mb_strtolower('');
?>
<?php $this->part("modal/title", ['title' => $definition['label']]); ?>
<input type='text' name='<?php echo $field ?>' value="<?php //echo $entity->$field ?>" <?php if($definition['required']) echo 'required' ?>>
