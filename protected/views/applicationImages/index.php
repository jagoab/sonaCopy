<?php
/* @var $this ApplicationImagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Application Images',
);

$this->menu=array(
	array('label'=>'Create ApplicationImages', 'url'=>array('create')),
	array('label'=>'Manage ApplicationImages', 'url'=>array('admin')),
);
?>

<h1>Application Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
