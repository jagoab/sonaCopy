<?php
/* @var $this AplicationTypeController */
/* @var $model AplicationType */

$this->breadcrumbs=array(
	'Aplication Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AplicationType', 'url'=>array('index')),
	array('label'=>'Manage AplicationType', 'url'=>array('admin')),
);
?>

<h1>Create AplicationType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>