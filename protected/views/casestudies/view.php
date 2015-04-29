<?php
/* @var $this CasestudiesController */
/* @var $model Casestudies */
$this->breadcrumbs = array ('Casestudies' => array ('index' ),$model->id );

$this->menu = array (array ('label' => 'List Casestudies','url' => array ('index' ) ),array ('label' => 'Create Casestudies','url' => array ('create' ) ),array ('label' => 'Update Casestudies','url' => array ('update','id' => $model->id ) ),array ('label' => 'Delete Casestudies','url' => '#','linkOptions' => array ('submit' => array ('delete','id' => $model->id ),'confirm' => 'Are you sure you want to delete this item?' ) ),array ('label' => 'Manage Casestudies','url' => array ('admin' ) ) );
?>

<h1>View Casestudies #<?php echo $model->id; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array ('data' => $model,'attributes' => array ('id','path','subPath','order','active','created','modified' ) ));
?>
