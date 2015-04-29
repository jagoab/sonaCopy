<?php
/* @var $this ProductsApplicationsTextsController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array ('Products Applications Texts' );

$this->menu = array (array ('label' => 'Create ProductsApplicationsTexts','url' => array ('create' ) ),array ('label' => 'Manage ProductsApplicationsTexts','url' => array ('admin' ) ) );
?>

<h1>Products Applications Texts</h1>

<?php

$this->widget('zii.widgets.CListView', array ('dataProvider' => $dataProvider,'itemView' => '_view' ));
?>
