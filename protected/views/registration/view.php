<?php
/* @var $this RegistrationController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
	array('label'=>'Update Registration', 'url'=>array('update', 'id'=>$model->id_registration)),
	array('label'=>'Delete Registration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_registration),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registration', 'url'=>array('admin')),
);
?>

<h1>View Registration #<?php echo $model->id_registration; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_registration',
		'name',
		'email',
		'phone',
		'message',
		'departament',
		'subject',
		'id_level_country',
		'id_level_city',
	),
)); ?>
