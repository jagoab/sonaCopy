<?php
/* @var $this ProductsApplicationsTextsController */
/* @var $model ProductsApplicationsTexts */

$this->breadcrumbs=array(
	'Products Applications Texts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProductsApplicationsTexts', 'url'=>array('index')),
	array('label'=>'Create ProductsApplicationsTexts', 'url'=>array('create')),
	array('label'=>'Update ProductsApplicationsTexts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductsApplicationsTexts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductsApplicationsTexts', 'url'=>array('admin')),
);
?>

<h1>View ProductsApplicationsTexts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'active',
		'application_type_id',
		'language',
	),
)); ?>
