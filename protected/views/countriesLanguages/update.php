<?php
/* @var $this CountriesLanguagesController */
/* @var $model CountriesLanguages */

$this->breadcrumbs=array(
	'Countries Languages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CountriesLanguages', 'url'=>array('index')),
	array('label'=>'Create CountriesLanguages', 'url'=>array('create')),
	array('label'=>'View CountriesLanguages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CountriesLanguages', 'url'=>array('admin')),
);
?>

<h1>Update CountriesLanguages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>