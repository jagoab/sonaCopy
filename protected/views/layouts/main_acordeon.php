<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link rel="icon" type="image/png" href="images/favicon.ico" /> 
        <link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico"/>
        <META NAME="AUTHOR" CONTENT="Guillermo Enrique,Daniel Ruiz">
            <META NAME="REPLY-TO" CONTENT="gsanchez1687@gmail.com, Daruizg@gmail.com">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
                        <meta name="language" content="en" />
                        <!--[if lt IE 8]>
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
                        <![endif]-->
                        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
                        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
                        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropdownHover.js"></script>
                        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaquery.js"></script>
                      
                        
                      
                            <div style="display:inline;">
                                <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001610015/?label=_sXQCLGl9gkQn7bN3QM&amp;guid=ON&amp;script=0"/>
                            </div>
                        </noscript>

                        <script>

                            $(function() {

                                $(document).ajaxStop(function() {
                                    $("#modal_cargando").hide();
                                });
                                $(document).ajaxStart(function() {
                                    $("#modal_cargando").show();
                                });

                                $('#xxf').affix({
                                    offset: {
                                        top: 20
                                        , bottom: function() {
                                            return (this.bottom = $('.footer').outerHeight(true))
                                        }
                                    }
                                })

                            })
                        </script>
                        </head>
                        <body> 
                            <?php include_once("analyticstracking.php") ?>
                            <?php if(Yii::app()->language == 'ch'): ?>
                                <?php header( 'Location: http://www.sonarayled.cn/'); ?>
                            <?php endif; ?>

                            <div id="modal_cargando" style="display: none; z-index: 1000000000000000;">                                       
                                <img class="load_grande"  src="<?php echo Yii::app()->request->baseURL; ?>/images/loader.gif"/>
                                <div id="fade" class="overlay" ></div>
                            </div> 


                            <div class="container" id="page">	


                                <?php
                                if (!isset(Yii::app()->session['flag']))
                                    Yii::app()->session['flag'] = 'us';
                                ?>
                                <div id="header">  

                                    <div class="logo-sonary" style="">
                                     <?php   if (@ strtolower(Yii::app()->session['flag']) == 'us') { 
                                                 ?> <div id="xxff"   style="color: #000;      ">

                                            <div style="  margin-right: 50px; position: fixed; margin-left: 55%; top:0px; z-index: 1001;" id="xxf"> 
                                                <a target="_new" href="http://www.dascomamericas-info.com/LED/promo/index.html "> <img alt="" src="<?php //echo Yii::app()->request->baseUrl . "/images/special_promotion_02.png" ?>"> </a>
                                                <?php //echo CHtml::image(Yii::app()->request->baseUrl . "/images/special_promotion_02.png", "", array('style' => 'margin-right: 2%; ',"id"=>"img_video")); ?></div>

                                     </div><?php } echo CHtml::image(Yii::app()->request->baseUrl . "/images/headers/" . Yii::app()->language . "/encabezado_web_sonaray.png", "", array('width' => '100%', 'style' => 'float:left;' )); ?></div>
                                    <div class="idioma">
                                        <div class="dropdown helvetica_condensed_lightRg">
                                            <img width="32px;" src="<?php echo Yii::app()->request->baseURL; ?>/images/flag/<?php echo Yii::app()->session['flag']; ?>.png"/>
                                            <?php echo CHtml::link(Yii::t('forms', 'Change Country'), array('site/selector')); ?> 
                                            <?php if (Yii::app()->session['flag'] == 'hk'): ?>                                            
                                                <li><a href="<?php echo Yii::app()->request->baseUrl . "/en/site/flagUrl?flag=hk&lang=en" ?>"><?php echo Yii::t('forms', 'English') ?></a></li> 
                                                <li><a href="<?php echo Yii::app()->request->baseUrl . "/en/site/flagUrl?flag=hk&lang=ch" ?>"><?php echo Yii::t('forms', '中国') ?></a></li>                                           
                                            <?php endif; ?>

                                            <?php if (Yii::app()->session['flag'] == 'sg'): ?>

                                                <li><a href="<?php echo Yii::app()->request->baseUrl . "/en/site/flagUrl?flag=sg&lang=en" ?>"><?php echo Yii::t('forms', 'English') ?></a></li> 
                                                <li><a href="<?php echo Yii::app()->request->baseUrl . "/ch/site/flagUrl?flag=sg&lang=ch" ?>"><?php echo Yii::t('forms', '中国') ?></a></li>                                           
                                            <?php endif; ?>


                                        </div><!--fin de dropdwn-->

                                    </div><!---fin de idioma-->



                                </div> 

                                <!-- fin del header -->
                                <!--------------------------------------------------------------------------------------->
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

                                <div>
                                    <div class=" helvetica_neueregular" style="position: relative; z-index: 50;">
                                        <!--------------------------------MENU RESPONSIVE----------------------------------------------->
                                        <nav class="navbar navbar-default" role="navigation">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuprincipal" >
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand visible-xs" href="#">Men&uacute;</a>
                                            </div>   
                                            <div class="navbar-collapse collapse in" id="menuprincipal">
                                                <ul class="nav navbar-nav">
                                                    <?php
                                                    foreach ($menus as $menu) {
                                                        if ($menu['parent'] == 0) {
                                                            $total_sub = count($menu['menu']);
                                                            if ($total_sub <= 0) { //para saber si tiene hijos
                                                                ?>
                                                                <li style="font-size:15px;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>              
                                                            <?php } else { ?>
                                                                <li class="dropdown">
                                                                    <a style="font-size:15px;"  href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['name'] ?></a>

                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <?php
                                                                        foreach ($menu['menu'] as $menu2) {
                                                                            $total_sub = count($menu2['menu']);
                                                                            // echo $total_sub;
                                                                            if ($total_sub <= 0) {
                                                                                ?>
                                                                                                         <!--<li><a href="<?php //echo $menu2['url'];   ?>"><?php //echo $menu2['name'];   ?></a></li>-->
                                                                                <li style="font-size:15px;" class=""><?php echo CHtml::link($menu2['name'], array($menu2['url'])); ?></li>

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
                                        </nav><!--fin de class="navbar navbar-default"-->

                                    </div><!--fin del container-->
                                </div><!-- mainmenu -->


                                <div>
                                    <!----------------------------------------------------------------------------------------->

                                    <div class="linea"></div>


                                    <?php echo $content; ?>

                                    <div class="clear"></div>

                                    <div id="footer">
                                        <p style="font-size: 11px;font-family: Helvetica-Condensed-Light;color: #9c9aa0;width: 100%" class="text-center">

                                            <?php if (@ strtolower(Yii::app()->session['flag']) != 'de') { ?>
                                                © 2012-2014 DASCOM Americas SBI LLC
                                                <?php
                                                if (Yii::app()->language == 'en')
                                                    echo utf8_decode("All rights reserved.");
                                                if (Yii::app()->language == 'es')
                                                    echo utf8_decode("Todos los derechos reservados.");
                                                if (Yii::app()->language == 'po')
                                                    echo utf8_decode("Todos os direitos reservados.");
                                            }else {
                                                // only for german  
                                                ?>                          

                                                <div style="color: #999; padding: 10px; border-top: solid 1px #ccc;border-bottom: solid 1px #ccc; margin-bottom: 15px; ">
                                                    <span style="padding: 10px; cursor: pointer;" id="impressum"> Impressum </span>  |                                          
                                                    <?php
                                                    foreach ($menus as $menu) {
                                                        if ($menu['parent'] == 0) {
                                                            $total_sub = count($menu['menu']);
                                                            //para saber si tiene hijos
                                                            ?>
                                                            <span style="padding: 10px;"><?php echo CHtml::link(ucfirst($menu['name']), array($menu['url']), array('role' => "menuitem", "style" => "color:#999")); ?></span> |
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <div style="display: none;">
                                                        <?php
                                                        /* ventana modal para impressum (solo para aleman) */
                                                        $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
                                                            'id' => 'Impressumdialog',
                                                            // additional javascript options for the dialog plugin
                                                            'options' => array(
                                                                'position' => 'center',
                                                                'title' => 'Impressum',
                                                                'autoOpen' => false,
                                                                'minWidth' => 600,
                                                                'modal' => true,
                                                            ),
                                                        ));
                                                        ?>


                                                        <div class="text-left" style="font-size: 12px; padding-left: 30px; line-height: 18px;">

                                                            DASCOM Europe GmbH<br/>
                                                            Heuweg 3<br/>
                                                            89079 Ulm<br/><br/>

                                                            Telefon: +49 (0) 731 - 20 75 - 0<br/>
                                                            Telefax: +49 (0) 731 - 20 75 - 100<br/>
                                                            email: info.de@dascom.com<br/>
                                                            Diese E-Mail-Adresse ist gegen Spambots geschützt! Sie müssen JavaScript aktivieren, damit Sie sie sehen können.<br/>
                                                            Internet: <a href="http://www.dascom.com">www.dascom.com</a> <br/><br/>

                                                            <b>Geschäftsführer:</b><br/>
                                                            Holger Benke<br/><br/>

                                                            Registergericht: Amtsgericht Ulm<br/>
                                                            Registernummer: HRB 723920<br/>
                                                            USt.-IdNr.: DE264947359<br/>
                                                            WEEE-Reg-Nr.: DE 39196009<br/><br/><br/>

                                                            <b>Haftungshinweis:</b><br/>
                                                            Trotz sorgfältiger inhaltlicher Kontrolle übernimmt DASCOM keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.
                                                            <br/><br/>
                                                        </div>
                                                        <?php
                                                        $this->endWidget('zii.widgets.jui.CJuiDialog');
                                                        ?>
                                                    </div>
                                                    <span style="padding: 10px;"> <a style="color:#999;" target="_blank" href="<?php echo Yii::app()->baseUrl ?>/downloads/AGB_Deutsch_2013-07.pdf"> AGB </a> </span>
                                                    <br/> </div>
                                                <div style="font-size: 11px;font-family: Helvetica-Condensed-Light;color: #9c9aa0;width: 100%" class="text-center">

                                                    Copyright © 2014 DASCOM Europe GmbH <br/> 

                                                    Alle Firmen- und Produktnamen sind Marken der jeweiligen Eigentümer. 
                                                </div>

                                                <?php
                                            }
                                            
                                            ?>
                                                  Powered by 
                                            <a href="http://www.thefactoryhka.com"" target="_blank" style="color: #666"><img src="http://www.dascomla.com/sonaray/images/thfka.png" width="14" height="11"  /> ThefactoryHKA C.A.</a>
                                        </p>
                                    </div>

                                    <!-- footer -->

                                </div>
                                <!-- page -->

                                <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
                                <script>
                            $('.carousel').carousel({
                                interval: 4500
                            })

                            $('.carousel').mouseover(function() {
                                $(this).carousel('pause');
                            }).mouseleave(function() {

                                // $(this).carousel('cycle')
                            });
                            $('.dropdown-toggle').dropdown();

                            $(function() {
                                $("#impressum").click(function() {
                                    $("#Impressumdialog").dialog("open");
                                })
                            })
                                </script>
                        </body>
                        </html>

