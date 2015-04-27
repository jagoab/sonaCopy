<?php
/* @var $this CountriesLanguagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Countries Languages',
);

$this->menu=array(
	array('label'=>'Create CountriesLanguages', 'url'=>array('create')),
	array('label'=>'Manage CountriesLanguages', 'url'=>array('admin')),
);
?>

<h1>Countries Languages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
