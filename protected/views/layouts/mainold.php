<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>SONARAY</title>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" /> 
    
        <META NAME="AUTHOR" CONTENT="Guillermo Enrique,Daniel Ruiz">
            <META NAME="REPLY-TO" CONTENT="gsanchez1687@gmail.com, Daruizg@gmail.com">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
                        <meta name="language" content="en" />
                        <!--[if lt IE 8]>
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
<![endif]-->
			 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<!--                        <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />-->
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
                        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
                        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropdownHover.js"></script>
                        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaquery.js"></script>  	
                        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
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
                        <style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #00CCFF;
}
a:visited {
	text-decoration: none;
	color: #00CCFF;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo6 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color: #0099CC;
}
-->
</style>
                        </noscript>
                        
                                    <?php  echo $content; ?>
									
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
				  <table width="200" border="0">
  <tr>
    <td height="76"></td>
  </tr>
</table>
                             <table width="100%"  border='0' >
  <tr>
    <td bgcolor="#0e1b77">
                     
     <br/> <br/>
      <br/> <br/>

      
      <a  href="<?php echo Yii::app()->request->baseUrl; ?>/Registration/index" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt_2.png');">
      <span  style="font-family: Impact; font-size: 36px; color: #FFFFFF;" >Newsletter</span></a><br/><br/>
        <a onMouseOver="cambiar(1,'IMG2');" onMouseOut="cambiar(0,'IMG2');" target="_blank"  href="https://www.facebook.com/SonarayLED">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face_2.png');" name="IMG2"/></a>
     
       <a onMouseOver="cambiar(1,'IMG1');" onMouseOut="cambiar(0,'IMG1');" target="_blank" href="https://twitter.com/sonarayledusa">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw_2.png');" name="IMG1"/></a>

<a onMouseOver="cambiar(1,'IMG3');" onMouseOut="cambiar(0,'IMG3');" target="_blank"  href="https://www.youtube.com">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt_2.png');" name="IMG3"/></a>
      <br/>
        <br/> 
        <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #CCCCCC;">&copy; 2012-2015 DASCOM Americas SBI LLC Todos los derechos reservados. Powered by</span>&nbsp;<a href="http://www.thefactoryhka.com/" target="_blank"><img src="http://www.dascomla.com/sonaray/images/thfka.png" width="14" height="11" />&nbsp;<span class="Estilo6">ThefactoryHKA C.A.</span></a>
         <br/>
          <br/>

          <br/>
           <br/>

     <br/>
     
    &nbsp;</td>
  </tr>
</table>
</body>
</html>
 
