<?php
/* @var $this ProductsApplicationsController */
/* @var $model ProductsApplications */

$this->breadcrumbs=array(
	'Products Applications'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductsApplications', 'url'=>array('index')),
	array('label'=>'Create ProductsApplications', 'url'=>array('create')),
	array('label'=>'View ProductsApplications', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductsApplications', 'url'=>array('admin')),
);
?>

<h1>Update ProductsApplications <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>