<?php
/* @var $this AplicationTypeController */
/* @var $model AplicationType */
$this->breadcrumbs = array ('Aplication Types' => array ('index' ),$model->name );

$this->menu = array (array ('label' => 'List AplicationType','url' => array ('index' ) ),array ('label' => 'Create AplicationType','url' => array ('create' ) ),array ('label' => 'Update AplicationType','url' => array ('update','id' => $model->id ) ),array ('label' => 'Delete AplicationType','url' => '#','linkOptions' => array ('submit' => array ('delete','id' => $model->id ),'confirm' => 'Are you sure you want to delete this item?' ) ),array ('label' => 'Manage AplicationType','url' => array ('admin' ) ) );
?>

<h1>View AplicationType #<?php echo $model->id; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array ('data' => $model,'attributes' => array ('id','name','visible','parent_id','score' ) ));
?>
