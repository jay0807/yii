<?php
/* @var $this DictionaryController */
/* @var $model Dictionary */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dictionary-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tablename'); ?>
		<?php echo $form->textField($model,'tablename',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tablename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'field'); ?>
		<?php echo $form->textField($model,'field',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'field'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'key'); ?>
		<?php echo $form->textField($model,'key'); ?>
		<?php echo $form->error($model,'key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multi'); ?>
		<?php echo $form->textField($model,'multi',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'multi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sphinx_isdel'); ?>
		<?php echo $form->textField($model,'sphinx_isdel',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sphinx_isdel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sphinx_updatetime'); ?>
		<?php echo $form->textField($model,'sphinx_updatetime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sphinx_updatetime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->