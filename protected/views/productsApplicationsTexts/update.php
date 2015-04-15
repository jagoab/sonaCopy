<?php
/* @var $this ProductsApplicationsTextsController */
/* @var $model ProductsApplicationsTexts */

$this->breadcrumbs=array(
	'Products Applications Texts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductsApplicationsTexts', 'url'=>array('index')),
	array('label'=>'Create ProductsApplicationsTexts', 'url'=>array('create')),
	array('label'=>'View ProductsApplicationsTexts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductsApplicationsTexts', 'url'=>array('admin')),
);
?>

<h1>Update ProductsApplicationsTexts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>