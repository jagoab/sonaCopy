<?php
$this->pageTitle = Yii::app()->name . ' - Contáctanos';
$this->breadcrumbs = array('Contáctanos');
      $bucler_head=1;
     
     // var_dump($parrafos);

?>

<!-- Google Code for TFHKA-PE Conversion Page -->


<script>
    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = [8, 37, 39, 46];

        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }
    var nav4 = window.Event ? true : false;
    function acceptNum(evt) {
        // NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57  
        var key = nav4 ? evt.which : evt.keyCode;
        return (key <= 13 || (key >= 48 && key <= 57 || key == 40 || key == 41 || key == 32));
    }
</script>
<head>
    
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css"> -->
<!--    <link href="bootstrap.min.css" rel="stylesheet" />-->
 
<title>SONARAY</title>
    <link rel="icon" type="image/png" href="http://dascomla.com/toolbox/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />
<style>
.head_title {
	color: #999999;
	font-size: 36px;
	font-family:Arial, Helvetica, sans-serif;
        margin-left: 20px;
}
</style>
  
  </head>
                <center>
                 <br />
                <br />
                <br />
                 <br />
                <br />
                <br />
                <?php 
                                                                 //  print_r($parrafos); exit();
                foreach ($parrafos as $valor):
                    //print_r($valor[0]->text);
                        
                        endforeach;
                ?>
                
             <?php if ($bucler_head==1){ ?>
             <div style="background:#F9F9F9; width:80%; height:20%">
                <br />
                <h3 align="left" class="head_title">&nbsp<?php  echo "Newsletter / Boletín de Noticias"; ?></h3>
                <br/>
            </div><br/>
            <br/>
                <div style=" width:80%; height:20%" align='right'>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/head_newsletter.jpg"  class="img-responsive"/>
            </div>
            <br/>
             <br/>
              <br/>
             
             <br/>
              <br/>
               <br/>
                <br/>
        </center>
         <?php
         
          
          
         $bucler_head=$bucler_head+1;
         } ?>
            <div style="width: 25%; margin-left: 55%;">
            <div>
                
         <?php if (Yii::app()->user->hasFlash('contact')): ?>

                   
                    <script type="text/javascript">
		    /* <![CDATA[ */
		    var google_conversion_id = 1001610015;
		    var google_conversion_language = "en";
		    var google_conversion_format = "2";
		    var google_conversion_color = "ffffff";
		    var google_conversion_label = "_sXQCLGl9gkQn7bN3QM";
		    var google_remarketing_only = false;
		    /* ]]> */
		    </script>
		    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
		    <noscript>
		    <div style="display:inline;">
		    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001610015/?label=_sXQCLGl9gkQn7bN3QM&amp;guid=ON&amp;script=0"/>
		    </div>
		    </noscript>
                    
                    <div class="flash-success">
                        <?php echo Yii::app()->user->getFlash('contact'); ?>
                    </div>
                    
                 <div class="form" style="right: 22px; width: 80% ">
                    
                <?php endif; ?>
                     
                    <br/>
          

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'registration-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
                ?>
                <?php echo $form->errorSummary($model); ?>

                <div class="row" align="left">
                    
                    <?php echo $form->labelEx($model, Yii::t('forms', 'Name*')); ?>
                    <?php echo $form->textField($model, 'name', 
					array(
					"class" => 'form-control', 
					'placeholder' => Yii::t('forms', 'Name / Nombre'),
					'onkeypress'=>'return soloLetras(event)'
					)); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>
                <br/>
                <div class="row" align="left">
                    <?php echo $form->labelEx($model, Yii::t('forms', 'email')); ?>
                    <?php echo $form->textField($model, 'email', array("class" => 'form-control', 'placeholder' => Yii::t('forms', 'Email / Correo'))); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>
                <br/>
                <div class="row">
                    </div>
     
                    <br/>
                <br/>
                 </div>
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
            <div>
        </div>
            
                   <script type="text/javascript">

var num = 50; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});
</script>
    </div>
