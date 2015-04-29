<?php
/* @var $this CasestudiesController */
/* @var $model Casestudies */
$this->breadcrumbs = array ('Casestudies' => array ('index' ),$model->id => array ('view','id' => $model->id ),'Update' );

$this->menu = array (array ('label' => 'List Casestudies','url' => array ('index' ) ),array ('label' => 'Create Casestudies','url' => array ('create' ) ),array ('label' => 'View Casestudies','url' => array ('view','id' => $model->id ) ),array ('label' => 'Manage Casestudies','url' => array ('admin' ) ) );
?>

<h1>Update Casestudies <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>