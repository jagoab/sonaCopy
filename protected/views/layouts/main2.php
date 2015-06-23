<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Sonaray">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="icon" type="image/png" href="images/favicon.ico" />
<link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-3.3.4-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-3.3.4-dist/css/full-slider.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
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

$(document).ready(function ($) {
	var $window = $(window);
	var scrollTime = 1.2;
	var scrollDistance = 170;
	var _CaptionTransitions = [];
	 var $window = $(window);
		var scrollTime = 0.5;
		var scrollDistance = 170;
		$window.on("mousewheel DOMMouseScroll", function(event){

			event.preventDefault();	
			var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
			var scrollTop = $window.scrollTop();
			var finalScroll = scrollTop - parseInt(delta*scrollDistance);

			TweenMax.to($window, scrollTime, {
				scrollTo : { y: finalScroll, autoKill:true },
					ease: Power1.easeOut,
					overwrite: 5
				});
	});
});
</script>
<style type="text/css">
.carousel-indicators .active{
	background-color: grey !important;
}
.carousel-indicators li{
	border-color: none;
	background-color: black !important;
}
</style>
</head>
<body>
<?php  echo $content; ?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>