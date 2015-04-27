<?php
/* @var $this AplicationTypeController */
/* @var $model AplicationType */

$this->breadcrumbs=array(
	'Aplication Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AplicationType', 'url'=>array('index')),
	array('label'=>'Create AplicationType', 'url'=>array('create')),
	array('label'=>'View AplicationType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AplicationType', 'url'=>array('admin')),
);
?>

<h1>Update AplicationType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>