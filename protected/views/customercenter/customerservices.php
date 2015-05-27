<section class="sectionblock sectionfaqs container-fluid">

    <h1><?php echo Yii::t('lang','Customer Services'); ?></h1>
  <hr style="border-color: #04B404!important">
    <div class="row">

    <div id="emailcontact">


        <div class="row">
            <div class="col-md-6">
                
                        <?php
            $flashMessages = Yii::app()->user->getFlashes();

            if ($flashMessages) {
                foreach ($flashMessages as $key => $message) {

                    if ($key == 'success') {
                        $classlabel = 'alert-success';
                    } elseif ($key == 'warning') {
                        $classlabel = 'alert-warning';
                    } elseif ($key == 'info') {
                        $classlabel = 'alert-info';
                    } elseif ($key == 'danger') {
                        $classlabel = 'alert-danger';
                    }
                    ?>
                    <div class="flashmessage alert <?php echo $classlabel; ?> fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $message; ?>
                    </div>
                    <?php
                }
            }
            ?>
                
                
                <div class="well well-sm">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'contact-form',
                        'enableClientValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                    ));
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <div class="input-group" style="width: 100%!important;">
                                    <span class="input-group-addon" style="width: 100px!important;">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span style="width: 100px!important;"><?php echo Yii::t('lang','Name'); ?></span>
                                    </span>
                                    <?php echo $form->textField($contact, 'name', array('class' => 'form-control', 'placeholder' => '')); ?>
                                </div>

                                <?php echo $form->error($contact, 'name'); ?>
                            </div>


                            <div class="form-group">

                                <div class="input-group" style="width: 100%!important;">
                                    <span class="input-group-addon" style="width: 100px!important;">
                                        <span class="glyphicon glyphicon-envelope"></span>

                                        <span>Email</span>
                                    </span>
                                    <?php echo $form->textField($contact, 'email', array('class' => 'form-control', 'placeholder' => '')); ?>
                                </div>

                                <?php echo $form->error($contact, 'email'); ?>
                            </div>


                            <div class="form-group">                            
                                <div class="input-group" style="width: 100%!important;">
                                    <span class="input-group-addon" style="width: 100px!important;">
                                        <span class="glyphicon glyphicon-inbox"></span>
                                        <span><?php echo Yii::t('lang','Subject'); ?></span>
                                    </span>
                                    <?php echo $form->textField($contact, 'subject', array('class' => 'form-control', 'placeholder' => '')); ?>
                                </div>

                                <?php echo $form->error($contact, 'subject'); ?>
                            </div>

                            <div class="form-group">

                                <div class="input-group" style="width: 100%!important;">
                                    <span class="input-group-addon" style="width: 100px!important;">
                                        <span class="glyphicon glyphicon-globe"></span>
                                        <span><?php echo Yii::t('lang','Country'); ?></span>
                                    </span>
                                    <?php echo $form->textField($contact, 'country', array('class' => 'form-control', 'placeholder' => '')); ?>
                                </div>

                                <?php echo $form->error($contact, 'country'); ?>
                            </div>

                            <div class="form-group">
                                <label for="name"><?php echo Yii::t('lang','How can we help you?'); ?></label>

                                <?php echo $form->textArea($contact, 'body', array('class' => 'form-control','rows'=>'8', 'placeholder' => Yii::t('lang','Message'))); ?>

                            </div>
                            <?php echo $form->error($contact, 'body'); ?>
                        </div>
                        <div class="col-md-12" style="">
                            <?php if (CCaptcha::checkRequirements()): ?>
                                <div style="width: 100%; float: left;">
                                    <div style="float: left;"><?php $this->widget('CCaptcha'); ?></div>
                                    <div style="float: right;" class=""><?php echo $form->textField($contact, 'verifyCode', array('class' => 'form-control')); ?></div>
                                </div>
                                <div><?php echo Yii::t('lang','Please enter the letters as they are shown in the image above.'); ?>
                                    <br/><?php echo Yii::t('lang','Letters are not case-sensitive.'); ?></div>
                                <?php echo $form->error($contact, 'verifyCode'); ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-12">
                            <?php echo CHtml::submitButton(Yii::t('lang','Send Message'), array('class' => 'btn btn-default btn-lg btn-block')); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>

            <div class="col-md-6">
                <h4 style="line-height: 40px; text-align: justify; margin: 10px;">
                    <?php echo Yii::t('lang','Our Answer Desk is ready to help you with whatever you need just email us or call us and one of our friendly staff will be ready to help you.'); ?></h4>

                <br />
                <div style="width: 100%;">
                    <h3><?php echo Yii::t('lang','Need more help?'); ?></h3>
                    <p><?php echo Yii::t('lang','Find out the technical support phone number by country in the following list.'); ?></p>
                </div>
            </div>

        </div>

    </div>
        
    </div>
  
  <h4><?php echo Yii::t('lang','Customer Service Contacts'); ?></h4>
  <hr style="border-color: #04B404!important">
  
  <div class="row">
      
      <?php echo $this->renderPartial('../contact/contact_country'); ?>
      
  </div>
  
  
</section>
