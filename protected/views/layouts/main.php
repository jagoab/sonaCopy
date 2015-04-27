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
<title>SONARAY</title>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropdownHover.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaquery.js"></script>  	
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<script>
function cambiar (flag,img)
{
	if (document.images)
	{
		if (document.images[img].permitirloaded)
		{
			if (flag==1)
				document.images[img].src = document.images[img].permitir.src
			else 
				document.images[img].src = document.images[img].permitir.oldsrc
	}
		}
}

function preloadcambiar (img,adresse) 
{
	if (document.images)
	{
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
<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
<table width="200" border="0">
	<tr>
		<td height="76">&nbsp;</td>
	</tr>
</table>
<table width="100%"  border='0' >
<tr>
<td bgcolor="#003399"><br/> <br/><br/> <br/>
	<span  style="font-family: Impact; font-size: 36px; color: #FFFFFF;" >Newsletter</span><br/><br/>
	<a onMouseOver="cambiar(1,'IMG2');" onMouseOut="cambiar(0,'IMG2');" target="_blank"  href="http://www.facebook.com/"><img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face_2.png');" name="IMG2"/></a>
	<a onMouseOver="cambiar(1,'IMG1');" onMouseOut="cambiar(0,'IMG1');" target="_blank" href="http://twitter.com/"><img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw_2.png');" name="IMG1"/></a>
	<a onMouseOver="cambiar(1,'IMG3');" onMouseOut="cambiar(0,'IMG3');" target="_blank"  href="http://www.youtube.com/"><img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt_2.png');" name="IMG3"/></a>
	<a onMouseOver="cambiar(1,'IMG4');" onMouseOut="cambiar(0,'IMG4');" target="_blank"  href="http://instagram.com/"><img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/in.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/in_2.png');" name="IMG4"/></a><br/><br/>
	<input name="" type="text" placeholder="Email"  size="40" height="6px" /><br/><br/>
	<input type="submit" name="Submit" value="sign up"/><br/><br/><br/>
	<div align="center" style="color: #ffffff;" >Sonarayled © 2014 | Privacy Policy</div>
&nbsp;</td>
</tr>
</table>
</body>
</html>

