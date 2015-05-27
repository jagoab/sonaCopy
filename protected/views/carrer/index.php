<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
<style>
.head_title {
	color: #999999;
	font-size: 36px;
	font-family:Arial, Helvetica, sans-serif;
	margin-left: 20px;
}

</style>

<br/><br/><br/>
   
    <br/><br/>  
    <center>
     <div style="background:#F9F9F9; width:80%; height:20%">
                <br />
                <h3 align="left" class="head_title">&nbsp<?php  echo "Newsletter / Boletín de Noticias"; ?></h3>
                <br/>
            </div>
        </center>
        <br/>
            <br/>
             
    <div class="row" style="width:1200px; margin-left: 50%;">
            
        <div style='text-align: left;' class="col-md-4 helvetica_condensed_lightRg">
            <?php $form = $this->beginWidget('CActiveForm', array('id' => 'carrer-form', 'enableClientValidation' => true, 'htmlOptions' => array('enctype' => 'multipart/form-data'), 'clientOptions' => array('validateOnSubmit' => true))); ?> 
            <?php echo $form->errorSummary($model); ?>       
            <div style="text-align: left; color: #808080; ">
                <?php if (Yii::app()->user->hasFlash('contact')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('contact'); ?>
                </div>

            <?php endif; ?>
                <h2><?php echo Yii::t('forms', 'Carrer'); ?></h2>
                <?php echo Yii::t('forms', 'You can contact us through this simple form. We will gladly answer at the earliest opportunity:'); ?>
            </div>  
            <hr />
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'Name')); ?>
                <?php echo $form->textField($model, 'name', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Name'))); ?>
                <?php echo $form->error($model, 'name'); ?>
            </div>
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'Email')); ?>
                <?php echo $form->textField($model, 'email', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Email'))); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'Carrer')); ?>
                <?php echo $form->textField($model, 'carrer', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Carrer'))); ?>
                <?php echo $form->error($model, 'carrer'); ?>
            </div>
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'Phone')); ?>
                <?php echo $form->textField($model, 'phone', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Phone'))); ?>
            </div>
            </br>
            <div>
                <?php echo $form->fileField($model, 'path', array('class' => 'input-file')); ?>
                <?php echo $model->path; ?>
                <?php echo $form->error($model, 'path'); ?>
            </div>
            </br>
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'Message')); ?>
                <?php echo $form->textArea($model, 'menssage', array('rows' => 6, 'cols' => 50, 'style' => 'resize:none;', "class" => 'form-control', 'placeholder' => Yii::t('forms', 'Message'))); ?>
                <?php echo $form->error($model, 'menssage'); ?>
            </div>
            <div>
                <?php if (CCaptcha::checkRequirements()): ?>
                    <div style='margin-left: 10px;' class="row">
                        <?php echo $form->labelEx($model, Yii::t('forms', 'Verification Code')); ?>
                        <div style="position: relative; left: 10px;">
                            <?php $this->widget('CCaptcha'); ?>
                        </div>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                        <?php echo $form->error($model, 'verifyCode'); ?>
                    </div>
                <?php endif; ?>
            </div>
            </br>
            <div style='margin-left: 10px;' class="btn-group" >
                <?php echo CHtml::Button(Yii::t('forms', 'Go back'), array('class' => 'btn btn-primary', 'onclick' => 'history.back(-1)')); ?>    
                <?php echo CHtml::submitButton(Yii::t('forms', 'Submit'), array('class' => 'btn btn-primary')); ?>
            </div>


            <?php $this->endWidget(); ?>
        </div>
    </div>
</center>

