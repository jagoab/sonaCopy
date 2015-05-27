<?php
/* @var $this RegistrationController */
/* @var $data Registration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registration')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_registration), array('view', 'id'=>$data->id_registration)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departament')); ?>:</b>
	<?php echo CHtml::encode($data->departament); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_level_country')); ?>:</b>
	<?php echo CHtml::encode($data->id_level_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_level_city')); ?>:</b>
	<?php echo CHtml::encode($data->id_level_city); ?>
	<br />

	*/ ?>

</div>