<?php
/* @var $this ApplicationImagesController */
/* @var $model ApplicationImages */

$this->breadcrumbs=array(
	'Application Images'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ApplicationImages', 'url'=>array('index')),
	array('label'=>'Create ApplicationImages', 'url'=>array('create')),
	array('label'=>'View ApplicationImages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ApplicationImages', 'url'=>array('admin')),
);
?>

<h1>Update ApplicationImages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>