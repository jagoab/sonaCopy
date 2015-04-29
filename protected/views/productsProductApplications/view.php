<?php
/* @var $this ProductsProductApplicationsController */
/* @var $model ProductsProductApplications */

$this->breadcrumbs=array(
	'Products Product Applications'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductsProductApplications', 'url'=>array('index')),
	array('label'=>'Create ProductsProductApplications', 'url'=>array('create')),
	array('label'=>'Update ProductsProductApplications', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductsProductApplications', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductsProductApplications', 'url'=>array('admin')),
);
?>

<h1>View ProductsProductApplications #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'application_type_id',
	),
)); ?>
