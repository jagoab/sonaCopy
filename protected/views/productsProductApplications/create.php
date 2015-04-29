<?php
/* @var $this ProductsProductApplicationsController */
/* @var $model ProductsProductApplications */
$this->breadcrumbs = array ('Products Product Applications' => array ('index' ),'Create' );

$this->menu = array (array ('label' => 'List ProductsProductApplications','url' => array ('index' ) ),array ('label' => 'Manage ProductsProductApplications','url' => array ('admin' ) ) );
?>

<h1>Create ProductsProductApplications</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>