<?php
/* @var $this CountriesLanguagesController */
/* @var $model CountriesLanguages */

$this->breadcrumbs=array(
	'Countries Languages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CountriesLanguages', 'url'=>array('index')),
	array('label'=>'Manage CountriesLanguages', 'url'=>array('admin')),
);
?>

<h1>Create CountriesLanguages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>