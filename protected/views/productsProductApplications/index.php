<?php
/* @var $this ProductsProductApplicationsController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array ('Products Product Applications' );

$this->menu = array (array ('label' => 'Create ProductsProductApplications','url' => array ('create' ) ),array ('label' => 'Manage ProductsProductApplications','url' => array ('admin' ) ) );
?>

<h1>Products Product Applications</h1>

<?php

$this->widget('zii.widgets.CListView', array ('dataProvider' => $dataProvider,'itemView' => '_view' ));
?>
