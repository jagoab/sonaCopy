<?php
/* @var $this ProductsProductApplicationsController */
/* @var $model ProductsProductApplications */

$this->breadcrumbs=array(
	'Products Product Applications'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductsProductApplications', 'url'=>array('index')),
	array('label'=>'Create ProductsProductApplications', 'url'=>array('create')),
	array('label'=>'View ProductsProductApplications', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductsProductApplications', 'url'=>array('admin')),
);
?>

<h1>Update ProductsProductApplications <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>