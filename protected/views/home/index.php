
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />
<style>
/*html, body, .banner, .container {
height:100%;
text-align: center;
}
.block {
height:300px;
background: #ffffff;
margin-bottom: 20px;
}*/
</style>
</head>
<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
<!-- it works the same with all jquery version from 1.x to 2.x -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
<!-- use jssor.slider.mini.js (40KB) instead for release -->
<!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.slider.js"></script>
<script>
jQuery(document).ready(function ($) {
var _CaptionTransitions = [];
_CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
_CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
_CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
_CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
_CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
_CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
_CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
_CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
_CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
_CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
_CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
var options = {
$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
$AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
$SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
 //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
 //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
$Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
 $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
},
 $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
$Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
},
$ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
$Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
 $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
}
};
var jssor_slider1 = new $JssorSlider$("slider1_container", options);
//responsive code begin
//you can remove responsive code if you don't want the slider scales while window resizes
function ScaleSlider() {
	var bodyWidth = document.body.clientWidth;
	if (bodyWidth)
		jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
	else
		window.setTimeout(ScaleSlider, 30);
}
ScaleSlider();
$(window).bind("load", ScaleSlider);
$(window).bind("resize", ScaleSlider);
$(window).bind("orientationchange", ScaleSlider);
//responsive code end
});
</script>
<!-- You can move inline styles to css file or css block. -->
<div id="slider1_container" style="position: relative; margin: 0 auto;top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
	<!-- Loading Screen -->
	<div u="loading" style="position: absolute; top: 0px; left: 0px;">
	<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
</div>
<div style="position: absolute; display: block; background: url(http://www.dascomla.com/sonaray/images/285.GIF) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"></div>
</div>
<!-- Slides Container -->
<?php
$j = 1;
$i=0;
$cantidad = count($imagenesSlider);
?>
<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;height: 500px; overflow: hidden;">  Loading ...
<?php
foreach ($imagenesSlider as $banner)
{
?>
<div><img u="image" src2="<?php echo Yii::app()->request->baseUrl.$banner->ruta;?>" /></div>
<?php 
}
?>
</div>
<!-- Bullet Navigator Skin Begin -->
<style>
/* jssor slider bullet navigator skin 21 css */
/*
.jssorb21 div           (normal)
.jssorb21 div:hover     (normal mouseover)
.jssorb21 .av           (active)
.jssorb21 .av:hover     (active mouseover)
.jssorb21 .dn           (mousedown)
*/
.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av
{
background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/home/b21.png) no-repeat;
overflow:hidden;
cursor: pointer;
}
.jssorb21 div { background-position: -5px -5px; }
.jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
.jssorb21 .av { background-position: -65px -5px; }
.jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
</style>
<!-- bullet navigator container -->
<div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
<!-- bullet navigator item prototype -->
<div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
</div>
<!-- Bullet Navigator Skin End -->
<!-- Arrow Navigator Skin Begin -->
<style>
/* jssor slider arrow navigator skin 21 css */
/*
.jssora21l              (normal)
.jssora21r              (normal)
.jssora21l:hover        (normal mouseover)
.jssora21r:hover        (normal mouseover)
.jssora21ldn            (mousedown)
.jssora21rdn            (mousedown)
*/
.jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn
{
position: absolute;
cursor: pointer;
display: block;
background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/home/a21.png) center center no-repeat;
overflow: hidden;
}
.jssora21l { background-position: -3px -33px; }
.jssora21r { background-position: -63px -33px; }
.jssora21l:hover { background-position: -123px -33px; }
.jssora21r:hover { background-position: -183px -33px; }
.jssora21ldn { background-position: -243px -33px; }
.jssora21rdn { background-position: -303px -33px; }
</style>
<!-- Arrow Left -->
<span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
</span>
<!-- Arrow Right -->
<span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
</span>
<!-- Arrow Navigator Skin End -->
<a style="display: none" href="http://www.jssor.com">jQuery Carousel</a>
</div>
<!-- Jssor Slider End -->
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
			<a href="#" class="navbar-brand" style=" font-family: Arial, Helvetica, sans-serif; font-size: 1px; "> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sonaray_small.png"/></a>
</div>
<?php
$sql = "SELECT * FROM mainmenu Mainmenu WHERE Mainmenu.active = 1 AND Mainmenu.language =  '" . Yii::app()->language . "' ORDER BY Mainmenu.weight ASC";
$MenuPadres = Yii::app()->db->createCommand($sql)->queryAll();
$menus = array();
$i = 0;
foreach ($MenuPadres as $MenuPadre) 
{//mostrar y comparar menu de primer nivel
	$MenuPadre['menu'] = array();
	$idpadre = $MenuPadre['id'];
	if ($MenuPadre['parent'] == 0) {
		foreach ($MenuPadres as $MenuPadre2)
		{//mostrar y comparar menu de segundo nivel
			$MenuPadre2['menu'] = array();
			if ($MenuPadre2['parent'] == $idpadre) 
			{
				foreach ($MenuPadres as $MenuPadre3)
				{//mostrar y comparar menu de tercer nivel
					if ($MenuPadre3['parent'] == $MenuPadre2['id'])
					{
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
foreach ($menus as $menu)
{
	if ($menu['parent'] == 0)
	{
		$total_sub = count($menu['menu']);
		if ($total_sub <= 0) { //para saber si tiene hijos
?>
<?php if ($contador ==1) { ?>
<li  style="font-weight: bold;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
<?php 
$contador++;
}
else
{
?> 
<li style=" font-weight: bold;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
<?php  } ?> 
<?php } else { ?>
<li class="dropdown" style="color: #000000; font-weight: bold;">
<a style="font-size:15px;"  href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['name'] ?> <b class="caret"></b>
</a>
<ul class="dropdown-menu" role="menu">
<?php
foreach ($menu['menu'] as $menu2) 
{
	$total_sub = count($menu2['menu']);
	// echo $total_sub;
	if ($total_sub <= 0) 
	{
?>
<!--<li><a href="<?php //echo $menu2['url'];   ?>"><?php //echo $menu2['name'];   ?></a></li>-->
<li style="font-size:15px;" class=""><a href="<?php echo $menu2['url']; ?>"><?php echo $menu2['name'];?></a></li>
<?php
}
else
{
?>
<li class="dropdown">
<a href="#"><?php echo $menu2['name']; ?></a> 
</li>
<?php
}
}//foreach
?>
</ul>
</li>
 <?php }}} ?>
 </ul>
</div>
 </nav>
<div>
</td>
</tr>
</table>
</div>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<div class="container">
<h1>Discover innovation </h1>
</div>
<div class="container">
<h2>in Sonaray we want you to be well, live well and enjoy life. By understanding their aspirations and needs you become what inspires us.</h2>
<br/>
<div class="row">
	<div class="col-md-6" ><div class="block" data-move-x="-600px" style="border: 6;" ><strong><p style="font-size: 28px; color: #003399; " align='left'> About us</p> </strong><p style="font-size: 28x; " align='left'>________________</p><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p><p style="font-size: 28x; " align='right'>VER MAS</p></div></div>
	<div class="col-md-6"><div class="block" data-move-x="600px" ><iframe width="560" height="315" src="//www.youtube.com/embed/eSjuBM268Yo" frameborder="0" allowfullscreen></iframe></div></div>
</div>
<h2>You can also move objects across the screen...</h2>
<div class="row">
<div class="col-md-6"><div class="block" data-move-x="-800px" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/img_2.jpg" alt="a cute kitten"></div></div>
<div class="col-md-6"><div class="block" data-move-x="800px" style="background: #ffffff "><br/><strong><p style="font-size: 48x; color: #003399;" align='left'>History</p></strong> <p style="font-size: 28x; " align='left'>________________</p><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p> <p style="font-size: 28x; " align='right'>VER MAS</p></div></div>
</div>
<div style="width:100%; height:400px;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/banner.png" class="img-responsive" /></div>
<h2>Portfolio</h2>
<br/>
<div class="row">
<div class="col-md-3"><div class="block" data-rotate-y="180deg" data-move-z="-200px" data-move-x="-300px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_1.jpg" alt="a cute kitten"><br/><p align="justify" style="font-family: Arial, Helvetica, sans-serif; color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg" /></p></div></div>
	<div class="col-md-3"><div class="block" data-rotate-x="180deg" data-rotate-y="180deg" data-move-z="-700px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_2.jpg" alt="a cute kitten"> <p align="justify" style="font-family: Arial, Helvetica, sans-serif; color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg"  /></p></div></div>
	<div class="col-md-3"><div class="block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_3.jpg" alt="a cute kitten"> <p align="justify" style="font-family: Arial, Helvetica, sans-serif; color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg" /></p></div></div>
	<div class="col-md-3"><div class="block" data-rotate-y="180deg" data-move-z="-100px" data-move-x="500px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_4.jpg" alt="a cute kitten"> <p align="justify" style="font-family: Arial, Helvetica, sans-serif; color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg" /></p></div></div>
</div>
<h2>News</h2>
<br/>
<div class="row">
	<div class="col-md-3"><div class="block" data-move-x="-500px" data-rotate="90deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
	<div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
	<div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="200px" data-rotate="-45deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
	<div class="col-md-3"><div class="block" data-move-x="500px" data-rotate="-90deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
</div>
<h2>Projects</h2><br/>
<div class="row">
	<div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"> <center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/portfolio_1.jpg" class="img-responsive" /></center><p></p><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
	<div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"><center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/portfolio_2.jpg" class="img-responsive" /></center><p></p> <p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;"> DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
	<div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"><center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/portfolio_3.jpg" class="img-responsive" /></center><p></p>  <p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>  
</div>
<br/> <br/>
<br/> <br/><br/>
</div>
<script type="text/javascript">
var num = 500; //number of pixels before modifying styles
$(window).bind('scroll', function () {
	if ($(window).scrollTop() > num) {
		$('.menu').addClass('fixed');
	} else {
		$('.menu').removeClass('fixed');
	}
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smoove.js"></script>
<script>$('.block').smoove({offset:'40%'});</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
