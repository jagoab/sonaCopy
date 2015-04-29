<?php
$this->pageTitle = Yii::app()->name . ' - Contáctanos';
$this->breadcrumbs = array('Contáctanos');
?>

<!-- Google Code for Contacto TFHKA-MX Conversion Page -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 989228242;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "8WopCM7f1AcQ0tnZ1wM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmn?opqrstuvwxyz";
       especiales = [8,37,39,46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	var nav4 = window.Event ? true : false; 
	function acceptNum(evt){  
	// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57  
	var key = nav4 ? evt.which : evt.keyCode;  
	return (key <= 13 || (key >= 48 && key <= 57 || key==40 || key==41 || key==32)); 
	} 
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script><noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/989228242/?value=0&amp;label=8WopCM7f1AcQ0tnZ1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div class="row" style="width:104%;">
    <!-- MAPA GOOGLE MAPS -->
    <div class="panel panel-default col-md-11" style="margin-left: 14px; padding: 0; border: 0px!important;">
       <IMG src="http://dascomla.com/dascom-test/images/aboutus0.png" width="104%" height="100%" style="border-radius: 5px;">
   
    </div>
    <div  class="col-md-6 helvetica_neueregular">
           <!-- Corporación -->
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #EAEAEA;">
                    <h3 class="panel-title-default"><span class="icon-globe-4" style="position: relative; left: -5px;"></span><b>Corporación</b>: DASCOM</h3>
                </div>
                <div class="panel-body">
                    421 West Main Street, <br/>
                    Waynesboro,<br/>
                     Virginia 22980-3606,<br/>
                     USA, <br/>
                     Telefono: +1 954 644 8710<br/>
                </div>
            </div><!--fin de Corporación--> 
            <!-- Ventas Estados Unidos, Canada & Latinoamérica-->
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #EAEAEA;">
                <h3 class="panel-title-default"><span class="icon-globe-4" style="position: relative; left: -5px;"></span><b>Ventas</b>: Estados Unidos, Canada & Latinoamérica</h3>
            </div>
            <div class="panel-body">
              Telefono: +1 954 644 8710
            </div>
        </div><!--fin de Ventas Estados Unidos, Canada & Latinoamérica--> 
        <!-------------México------------------------------------------------------>
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #EAEAEA;">
                <h3 class="panel-title-default"><span class="icon-globe-4" style="position: relative; left: -5px;"></span><b>Ventas</b>: México</h3>
            </div>
            <div class="panel-body">
             Telefono: +1 954 644 8710
            </div>
        </div>
        <!--------------fin de México-------------------------------------------> 
        <!-- Venezuela -->
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #EAEAEA;">
                <h3 class="panel-title-default"><span class="icon-globe-4" style="position: relative; left: -5px;"></span><b>Soporte Técnico</b></h3>
            </div>
            <div class="panel-body">
                Teléfonos: +1 954 644 8710 
                <br /><br />
            </div>
        </div>
         <!--fin de VENEZUELA--> 
         <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #EAEAEA;">
                <h3 class="panel-title-default"><span class="icon-globe-4" style="position: relative; left: -5px;"></span><b>Reparaciones</b></h3>
            </div>
            <div class="panel-body">
                Teléfonos:+1 954 644 8710  
            </div>
        </div><!---fin de panel panel-primary-->
        <!-- MIAMI -->
     
    </div><!--fin del col-md-6 -->
    
    <div class="col-md-6 helvetica_neueregular" style="position: relative; left: -8px; width: 472px">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #EAEAEA;">
                <h3 class="panel-title-default">
                    <span class="glyphicon glyphicon-envelope" style="position: relative; left: -5px;"></span><b>Contactenos</b></h3>
            </div>
            <div class="panel-body">
                
        <?php if (Yii::app()->user->hasFlash('contact')): ?>

            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('contact'); ?>
            </div>

        <?php endif; ?>

            <p>
                Si tiene consultas comerciales u otras preguntas, por favor, rellene el siguiente formulario para contactar con nosotros. Gracias.
            </p>
            <div class="form" style="position: relative; right: -8px;">

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'registration-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
                ?>
                <p class="note">Fields with <span class="required">*</span> are required.</p>
                <?php echo $form->errorSummary($model); ?>

                <div class="row">
                    <?php echo $form->labelEx($model, Yii::t('forms', 'name')); ?>
                    <?php echo $form->textField($model, 'name', 
					array(
					"class" => 'form-control', 
					'placeholder' => Yii::t('forms', 'Tu Nombre Completo'),
					'onkeypress'=>'return soloLetras(event)'
					)); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>
                <br/>
                <div class="row">
                    <?php echo $form->labelEx($model, Yii::t('forms', 'email')); ?>
                    <?php echo $form->textField($model, 'email', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Email / Correo'))); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>
                <br/>
                <div class="row">
		<?php echo $form->labelEx($model,'id_level_country'); ?>
		<?php echo $form->dropDownlist($model,'id_level_country', 
                        CHtml::listData(LevelCountry::model()->findAll(),'id_level_country','name'),
                          array(
                            'class' => 'form-control',
                            'ajax'=>array(
                              
                              'type'=>'POST',
                              'url'=>CController::createUrl('Registration/Selectcity'),
                              'update'=>'#'.CHtml::activeId($model,'id_level_city'),
                              'beforeSend' => 'function(){
                               $("#Registro_id_level_city").find("option").remove();
                               }',  
                                            ),'prompt'=>'Seleccione'
                                )      
                        )
                        ?>
		<?php echo $form->error($model,'id_level_country'); ?>
                </div>
                <br/>
                <div class="row">  
                    <?php echo $form->labelEx($model,'id_level_city'); ?>
                    <?php echo $form->dropDownlist($model,'id_level_city',array(),array("class" => 'form-control','prompt'=>'Seleccione') ); ?>
                    <?php echo $form->error($model,'id_level_city'); ?>
                </div>
                <br/>
                   <div class="row">
                        <?php echo $form->labelEx($model, Yii::t('forms', 'phone')); ?>
                        <?php echo $form->textField($model, 'phone', array("class" => 'form-control',  'maxlength'=>'16', 'placeholder'=>'(555) 555 5555' , 'onkeypress'=>'return acceptNum(event)' )); ?>
                        <?php echo $form->error($model, 'phone'); ?>
                    </div>
                    <br/>

                <div class="row">
                    <?php echo $form->labelEx($model, Yii::t('forms', 'subject')); ?>
                    <?php echo $form->textField($model, 'subject', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Asunto '))); ?>
                    <?php echo $form->error($model, 'subject'); ?>
                </div>
                <br/>
                <div class="row">
                    <?php echo $form->labelEx($model, Yii::t('forms', 'message')); ?>
                    <?php echo $form->textArea($model, 'message', array('rows' => 6, 'cols' => 50, 'style' => 'resize:none;', "class" => 'form-control', 'placeholder' => Yii::t('forms', 'Mensaje'))); ?>
                    <?php echo $form->error($model, 'body'); ?>
                </div>
                <br/>
                <?php if (CCaptcha::checkRequirements()): ?>
                    <div class="row">

                        <?php 
                         
                        echo $form->labelEx($model, 'verifyCode'); 
                        
                        ?>
                        <div style="position: relative; left: 10px;">
                            <?php $this->widget('CCaptcha'); 
                                   
                            ?>
                        </div>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                        <?php echo $form->error($model, 'verifyCode'); ?>
                    </div>
                <?php endif; ?>
                <div class="btn-group" style="position: relative; left: 35%;">
                    <?php echo CHtml::Button(Yii::t('pages', 'Regresar'), array('class' => 'btn btn-primary', 'onclick' => 'history.back(-1)')); ?>    
                    <?php echo CHtml::submitButton(Yii::t('pages', 'Enviar'), array('class' => 'btn btn-primary')); ?>
                </div>


                <?php $this->endWidget(); ?>
            </div><!-- form -->
            </div>
        </div>
    </div>
</div>