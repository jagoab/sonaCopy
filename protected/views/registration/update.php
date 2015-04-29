<?php
/* @var $this RegistrationController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->name=>array('view','id'=>$model->id_registration),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
	array('label'=>'View Registration', 'url'=>array('view', 'id'=>$model->id_registration)),
	array('label'=>'Manage Registration', 'url'=>array('admin')),
);
?>

<h1>Update Registration <?php echo $model->id_registration; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>