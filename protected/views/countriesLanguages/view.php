<?php
/* @var $this CountriesLanguagesController */
/* @var $model CountriesLanguages */
$this->breadcrumbs = array ('Countries Languages' => array ('index' ),$model->id );

$this->menu = array (array ('label' => 'List CountriesLanguages','url' => array ('index' ) ),array ('label' => 'Create CountriesLanguages','url' => array ('create' ) ),array ('label' => 'Update CountriesLanguages','url' => array ('update','id' => $model->id ) ),array ('label' => 'Delete CountriesLanguages','url' => '#','linkOptions' => array ('submit' => array ('delete','id' => $model->id ),'confirm' => 'Are you sure you want to delete this item?' ) ),array ('label' => 'Manage CountriesLanguages','url' => array ('admin' ) ) );
?>

<h1>View CountriesLanguages #<?php echo $model->id; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array ('data' => $model,'attributes' => array ('id','country_id','language_id','active' ) ));
?>
