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
                        <title><?php echo"salida salida"; exit();  echo CHtml::encode($this->pageTitle); ?></title>
                        <script>
                                function cambiar (flag,img) {
                                if (document.images) {
                                if (document.images[img].permitirloaded) {
                                if (flag==1) document.images[img].src = document.images[img].permitir.src
                                else document.images[img].src = document.images[img].permitir.oldsrc
                                }}}
                                function preloadcambiar (img,adresse) {
                                if (document.images) {
                                    img.onload = null;
                                    img.permitir = new Image ();
                                    img.permitir.oldsrc = img.src;
                                    img.permitir.src = adresse;
                                    img.permitirloaded = true;
                                    }
                                }
                        </script> 
                        </noscript>
                                    <?php  echo $content; ?>

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

