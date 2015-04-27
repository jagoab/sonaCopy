<script type="text/javascript">
    $(document).ready(function() {
    // add the fancy box click handler here
    setTimeout(function() {
        $("#yw0_button").trigger('click');
    },1);
});
</script>

<html lang="en">
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
<style>
    

 /* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */

        .flotar {
		
            position: absolute;
           top: 50px;
            left: 0;
            width: 100%;
            height: 51px;
			
        }
        .navbar-wrapper {
		background-color:#FFFFFF;
            position: absolute;
            
            left: 0;
            width: 100%;
            height: 51px;
			
        }
        .navbar-wrapper > .container {
            padding: 0;
        }

        @media all and (max-width: 768px ){
            .navbar-wrapper {
                position: relative;
                top: 0px;
            }
	


        }
        
         /* jssor slider bullet navigator skin 21 css */
                /*
                .jssorb21 div           (normal)
                .jssorb21 div:hover     (normal mouseover)
                .jssorb21 .av           (active)
                .jssorb21 .av:hover     (active mouseover)
                .jssorb21 .dn           (mousedown)
                */
                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                    background: url(../img/b21.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }

                .jssorb21 div {
                    background-position: -5px -5px;
                }

                    .jssorb21 div:hover, .jssorb21 .av:hover {
                        background-position: -35px -5px;
                    }

                .jssorb21 .av {
                    background-position: -65px -5px;
                }

                .jssorb21 .dn, .jssorb21 .dn:hover {
                    background-position: -95px -5px;
                }

                    .block {
        height:300px;
        background: #666666;
        margin-bottom: 20px;
    }
    
     html, body, .banner, .container {
        height:100%;
        text-align: center;
    }
    
    .menu {
    background: #000000;
    color: #000000;
    z-index:1;
    padding:.5em;
    position:absolute;
    //top:400px;
    width:100%;
}
.fixed {
    position:fixed;
    top:0;
}
</style>

</head>
<body>    

<div class="menu" style="background: #CCCCCC; ">
    <table width="100%" height="100%" border="0" >
    <tr>
        <td  valign="middle">
	
        <div class="container">
    <nav role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header" >
            
    		 <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
            <a href="#" class="navbar-brand" style=" font-family: Arial, Helvetica, sans-serif; font-size: 1px; "> <img
                    src="<?php echo Yii::app()->request->baseUrl; ?>/images/sonaray_small.png"/></a>
        </div>
	
        <?php
                                $sql = "SELECT * FROM mainmenu Mainmenu WHERE Mainmenu.active = 1 AND Mainmenu.language =  '" . Yii::app()->language . "' ORDER BY Mainmenu.weight ASC";
                                $MenuPadres = Yii::app()->db->createCommand($sql)->queryAll();

                                $menus = array();
                                $i = 0;
                                foreach ($MenuPadres as $MenuPadre) {//mostrar y comparar menu de primer nivel
                                    $MenuPadre['menu'] = array();
                                    $idpadre = $MenuPadre['id'];
                                    if ($MenuPadre['parent'] == 0) {
                                        foreach ($MenuPadres as $MenuPadre2) {//mostrar y comparar menu de segundo nivel
                                            $MenuPadre2['menu'] = array();
                                            if ($MenuPadre2['parent'] == $idpadre) {
                                                foreach ($MenuPadres as $MenuPadre3) {//mostrar y comparar menu de tercer nivel
                                                    if ($MenuPadre3['parent'] == $MenuPadre2['id']) {
                                                        $MenuPadre2['menu'][] = $MenuPadre3;
                                                    }
                                                }
                                                $MenuPadre['menu'][] = $MenuPadre2;
                                            }
                                        }
                                        $i++;
                                    }
                                    //  var_dump($MenuPadre); echo '<br/><br/><br/><br/>';
                                    $menus[] = $MenuPadre;
                                }
                                $total = $i;
                                ?>
        
        
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                                                    <?php
                                                    $contador=1;
                                                    foreach ($menus as $menu) {
                                                        if ($menu['parent'] == 0) {
                                                            $total_sub = count($menu['menu']);
                                                            if ($total_sub <= 0) { //para saber si tiene hijos
                                                              
                                                                ?>
                                                                    <?php if ($contador ==1) { ?>
                                                                        <li  style="font-weight: bold;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
                                                                    <?php 
                                                                    $contador++;
                                                                    }else{ ?> 
                                                                        <li style=" font-weight: bold;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
                                                                     <?php  } ?> 
                                                            <?php } else { ?>
                                                                <li class="dropdown" style="color: #000000; font-weight: bold;">
                                                                    <a style="font-size:15px;"  href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['name'] ?> <b class="caret"></b>
                                                                    </a>

                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <?php
                                                                        foreach ($menu['menu'] as $menu2) {
                                                                            $total_sub = count($menu2['menu']);
                                                                            // echo $total_sub;
                                                                            if ($total_sub <= 0) {
                                                                                ?>
                                                                                                         <!--<li><a href="<?php //echo $menu2['url'];   ?>"><?php //echo $menu2['name'];   ?></a></li>-->
                                                                                <li style="font-size:15px;" class=""><a href="<?php echo $menu2['url']; ?>"><?php echo $menu2['name'];?></a></li>

                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                <li class="dropdown">
                                                                                    <a href="#"><?php echo $menu2['name']; ?></a>                                                             

                                                                                </li>                                                                 
                                                                                <?php
                                                                            }//if 
                                                                        }//foreach
                                                                        ?>
                                                                    </ul>
                                                                </li>
                                                                <?php
                                                            }// fin del if
                                                        }
                                                    }
                                                    ?>    
                                                </ul>
        
        </div>
    </nav>
	<div>
</td>
  </tr>
</table>
    </div>
                
<br/><br/><br/><br/>    
<br/><br/><br/><br/>  
  
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>

<style>
    .errorMessage{
        font-weight: bold;
        color: #c82a2a;
    }
    </style>
    <center>     
    <a href="#" style=" font-family: Arial, Helvetica, sans-serif; font-size: 1px; "> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/map.png"/></a>
      <br/><br/><br/><br/>    
<br/><br/><br/><br/>    
    <div class="row" style="width:1200px;">
    
    <div style='text-align: left;' class="col-md-4 helvetica_condensed_lightRg">
        <?php  $form = $this->beginWidget('CActiveForm', array('id' => 'contact-form','enableClientValidation' => true,'clientOptions' => array('validateOnSubmit' => true))); ?> 
            <div style="text-align: left; color: #808080; ">
                  <h2><?php echo Yii::t('forms', 'Send'); ?></h2>
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
                <?php echo $form->labelEx($model, Yii::t('forms', 'Phone')); ?>
                <?php echo $form->textField($model, 'phone', array("class" => 'form-control', 'placeholder' =>Yii::t('forms', 'Phone'))); ?>
                <?php echo $form->error($model, 'phone'); ?>
            </div>
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'City')); ?>
                <?php echo $form->textField($model, 'city', array("class" => 'form-control', 'placeholder' =>  Yii::t('forms', 'City'))); ?>
                <?php echo $form->error($model, 'city'); ?>
            </div>
            <div>
                <?php echo $form->labelEx($model, Yii::t('forms', 'Message')); ?>
                <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50, 'style' => 'resize:none;', "class" => 'form-control', 'placeholder' => Yii::t('forms', 'Message'))); ?>
                <?php echo $form->error($model, 'body'); ?>
            </div>
            <div>
                <?php if (CCaptcha::checkRequirements()): ?>
                    <div style='margin-left: 10px;' class="row">
                        <?php echo $form->labelEx($model,Yii::t('forms', 'Verification Code')); ?>
                        <div style="position: relative; left: 10px;">
                            <?php $this->widget('CCaptcha'); ?>
                        </div>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                        <?php echo $form->error($model, 'verifyCode'); ?>
                    </div>
                <?php endif; ?>
            </div>
             <div style='margin-left: 10px;' class="btn-group" >
                <?php echo CHtml::Button(Yii::t('forms', 'Go back'), array('class' => 'btn btn-primary', 'onclick' => 'history.back(-1)')); ?>    
                <?php echo CHtml::submitButton(Yii::t('forms', 'Submit'), array('class' => 'btn btn-primary')); ?>
            </div>

         <?php $this->endWidget(); ?>
    </div><!---fin-de col md 4---->
 
    <div class="col-md-8 helvetica_neueregular">           
          <?php  foreach ($contactos_list as $contacto2):
              
             if(Yii::app()->session['flag'] == $contacto2['language'] ||
                     ((Yii::app()->session['flag']=='co'|| Yii::app()->session['flag']=='ve' || Yii::app()->session['flag']=='pe'
                      || Yii::app()->session['flag']=='pa'|| Yii::app()->session['flag']=='cl') &&  $contacto2['language']=='us')  ){?>
                                      
             <div class="panel panel-sonaray"> 
                 <div class="panel-heading"><?php echo $contacto2['name']; ?> </div>
                <div class="panel-body">                   
                    <div style="color: #000;"><?php echo $contacto2['text']; ?></div>
                                        
               </div>
              </div>      
            
                 
             <?php  } endforeach; ?>        
    </div>
     <div class="col-md-8 helvetica_neueregular">           
          <?php  foreach ($contactos_list as $contacto2):
              
             if(Yii::app()->session['flag'] != $contacto2['language'] ){
              
              ?>  
             <div class="panel panel-default">              
                <div class="panel-body">
                    <div style="font-weight: bold;"><?php echo $contacto2['name']; ?> </div>
                    <?php echo $contacto2['text']; ?>
               </div>
              </div>
            <?php } endforeach; ?>        
    </div>
    
</div>
</center>
<!-- Google Code for Contactos para Sonaray Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001610015;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "GWVCCJjru1kQn7bN3QM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001610015/?label=GWVCCJjru1kQn7bN3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
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