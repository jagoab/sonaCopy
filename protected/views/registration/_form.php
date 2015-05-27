<?php
/* @var $this RegistrationController */
/* @var $model Registration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textField($model,'message',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departament'); ?>
		<?php echo $form->textField($model,'departament',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'departament'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_level_country'); ?>
		<?php echo $form->textField($model,'id_level_country',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'id_level_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_level_city'); ?>
		<?php echo $form->textField($model,'id_level_city',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'id_level_city'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->