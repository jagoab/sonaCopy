<?php
/* @var $this ApplicationImagesController */
/* @var $model ApplicationImages */

$this->breadcrumbs=array(
	'Application Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ApplicationImages', 'url'=>array('index')),
	array('label'=>'Manage ApplicationImages', 'url'=>array('admin')),
);
?>

<h1>Create ApplicationImages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>