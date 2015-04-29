<?php
/* @var $this ProductsApplicationsController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array ('Products Applications' );

$this->menu = array (array ('label' => 'Create ProductsApplications','url' => array ('create' ) ),array ('label' => 'Manage ProductsApplications','url' => array ('admin' ) ) );
?>

<h1>Products Applications</h1>

<?php

$this->widget('zii.widgets.CListView', array ('dataProvider' => $dataProvider,'itemView' => '_view' ));
?>
