<?php
/* @var $this ProductsApplicationsController */
/* @var $model ProductsApplications */

$this->breadcrumbs=array(
	'Products Applications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductsApplications', 'url'=>array('index')),
	array('label'=>'Manage ProductsApplications', 'url'=>array('admin')),
);
?>

<h1>Create ProductsApplications</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>