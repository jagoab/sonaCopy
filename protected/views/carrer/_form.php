<?php
/* @var $this BannersController */
/* @var $model Banners */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banners-form',
	'enableAjaxValidation'=>false,
       'htmlOptions' => array('enctype' => 'multipart/form-data'),
       'enableClientValidation'=>true,
       'clientOptions'=>array(
       'validateOnSubmit'=>true,
            )
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
             <?php if(isset($model->ruta)) { 
                //echo CHtml::image('http://dascomla.com/dascom-test/'.$model->ruta,'',array('style'=>'width: 20%;'));
               echo CHtml::image(Yii::app()->params["pageUrl"].Yii::app()->params["folder"].$model->ruta," ",array("style"=>"width:20%;"));
                 echo "<br/>";
            } ?>
		<?php echo $form->labelEx($model,'ruta'); ?>
		<?php echo $form->fileField($model,'ruta'); ?>
                <?php echo $form->error($model,'ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden'); ?>
		<?php echo $form->textField($model,'orden',array('class'=>'form-control','style'=>'width: 50%;')); ?>
		<?php echo $form->error($model,'orden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('class'=>'form-control','style'=>'width: 50%;')); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>
        
         <!--<div class="row">
		<?php echo 'Lenguaje'; ?>
		<?php echo $form->dropDownList($model,'language',Chtml::listData(Languages::model()->findAll(), 'code', 'name'), array('empty' => Yii::t('pages', 'Select an item'),'class'=>'form-control','style'=>'width: 50%;')); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>-->
        
         <div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<div class="make-switch" style="z-index: 1;" data-on="success" data-off="default" data-on-label="<?php echo Yii::t('pages', 'YES'); ?>" data-off-label="NO">
                    <?php echo $form->checkBox($model, 'active'); ?>
                </div>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('pages', 'Create') : Yii::t('pages', 'Update')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->