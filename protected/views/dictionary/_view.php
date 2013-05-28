<?php
/* @var $this DictionaryController */
/* @var $data Dictionary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tablename')); ?>:</b>
	<?php echo CHtml::encode($data->tablename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field')); ?>:</b>
	<?php echo CHtml::encode($data->field); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('key')); ?>:</b>
	<?php echo CHtml::encode($data->key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('multi')); ?>:</b>
	<?php echo CHtml::encode($data->multi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remark')); ?>:</b>
	<?php echo CHtml::encode($data->remark); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sphinx_isdel')); ?>:</b>
	<?php echo CHtml::encode($data->sphinx_isdel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sphinx_updatetime')); ?>:</b>
	<?php echo CHtml::encode($data->sphinx_updatetime); ?>
	<br />

	*/ ?>

</div>