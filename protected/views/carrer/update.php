<?php
/* @var $this BannersController */
/* @var $model Banners */
$this->pageTitle=Yii::app()->name;
?>
<div style="padding-left: 20px;">
    <h2 style="text-align: center;"><?php echo Yii::t('titles', 'Update Banner'); ?> Id # <?php echo $model->id; ?></h2>
    <hr style="width: 30%;"/>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
