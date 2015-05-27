<?php
/* @var $this AplicationTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aplication Types',
);

$this->menu=array(
	array('label'=>'Create AplicationType', 'url'=>array('create')),
	array('label'=>'Manage AplicationType', 'url'=>array('admin')),
);
?>

<h1>Aplication Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
