<?php
/* @var $this ApplicationImagesController */
/* @var $model ApplicationImages */
$this->breadcrumbs = array ('Application Images' => array ('index' ),$model->name );

$this->menu = array (array ('label' => 'List ApplicationImages','url' => array ('index' ) ),array ('label' => 'Create ApplicationImages','url' => array ('create' ) ),array ('label' => 'Update ApplicationImages','url' => array ('update','id' => $model->id ) ),array ('label' => 'Delete ApplicationImages','url' => '#','linkOptions' => array ('submit' => array ('delete','id' => $model->id ),'confirm' => 'Are you sure you want to delete this item?' ) ),array ('label' => 'Manage ApplicationImages','url' => array ('admin' ) ) );
?>

<h1>View ApplicationImages #<?php echo $model->id; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array ('data' => $model,'attributes' => array ('id','name','path','aplication_type_id','language','category_id','active' ) ));
?>
