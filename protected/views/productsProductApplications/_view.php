<?php
/* @var $this ProductsProductApplicationsController */
/* @var $data ProductsProductApplications */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('application_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->application_type_id); ?>
	<br />


</div>