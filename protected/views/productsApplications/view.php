<?php
/* @var $this ProductsApplicationsController */
/* @var $model ProductsApplications */
$this->breadcrumbs = array ('Products Applications' => array ('index' ),$model->name );

$this->menu = array (array ('label' => 'List ProductsApplications','url' => array ('index' ) ),array ('label' => 'Create ProductsApplications','url' => array ('create' ) ),array ('label' => 'Update ProductsApplications','url' => array ('update','id' => $model->id ) ),array ('label' => 'Delete ProductsApplications','url' => '#','linkOptions' => array ('submit' => array ('delete','id' => $model->id ),'confirm' => 'Are you sure you want to delete this item?' ) ),array ('label' => 'Manage ProductsApplications','url' => array ('admin' ) ) );
?>

<h1>View ProductsApplications #<?php echo $model->id; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array ('data' => $model,'attributes' => array ('id','name','visible','parent_id','score' ) ));
?>
