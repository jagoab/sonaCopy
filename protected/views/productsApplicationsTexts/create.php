<?php
/* @var $this ProductsApplicationsTextsController */
/* @var $model ProductsApplicationsTexts */
$this->breadcrumbs = array ('Products Applications Texts' => array ('index' ),'Create' );

$this->menu = array (array ('label' => 'List ProductsApplicationsTexts','url' => array ('index' ) ),array ('label' => 'Manage ProductsApplicationsTexts','url' => array ('admin' ) ) );
?>

<h1>Create ProductsApplicationsTexts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>