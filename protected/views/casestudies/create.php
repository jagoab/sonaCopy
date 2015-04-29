<?php
/* @var $this CasestudiesController */
/* @var $model Casestudies */

$this->breadcrumbs=array(
	'Casestudies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Casestudies', 'url'=>array('index')),
	array('label'=>'Manage Casestudies', 'url'=>array('admin')),
);
?>

<h1>Create Casestudies</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>