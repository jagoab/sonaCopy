<!DOCTYPE html>
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
                                                                        <li  style="font-weight: bold; background:#FFFFFF;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
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
    </nav>
	<div>
</td>
  </tr>
</table>
    </div>
<div class="container">
			
			<div style="clear:both;width: 100%; 
				       height: auto; 
				       float: left; 
				       margin-left: 0px; 
				       margin-top: 0px; 
				       background-color: #fff">
				       
			<?php foreach ($textos as $key => $valor):?>
				
				<?php if($key == 0):?>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<img class="img-responsive" src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[$key]->path);?>"
					 style="float: left; margin-top: 0px; margin-left: 0px;width: 100%" /> 
				<img class="img-responsive" src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
					 style="float: left; margin-left: 13%; margin-top: 30px" />
				
					 
				<div class="container">	 
				<div style="clear:both;width: 75%; height: 270px; margin-left: 13%; margin-top: 20px; float: left">
					<h1 style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light">
						<?php echo ($valor->text);?>
					</h1>
				</div>
				
				<?php else:?>
				
				<?php if($key == 1):?>
				<div style="clear:both;width: 842px; height: 150px; margin-left: 13%; margin-top: 5%; float: left">
				
					<img src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
						style="float: left; margin-left: 0px; margin-top: 1.5%;height: 130px" />
						
					<div style="width: 64%; height: 97px; float: left; margin-left: 20px; margin-top: -14px">
						<h1
							style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light">
							<?php echo ($valor->text);?>
						</h1>
					</div>
				</div>
				<?php endif;?>
				<?php if($key == 2):?>
				<div style="clear:both;width: 842px; height: 127px; margin-left: 13%; margin-top: 30px; float: left">
					<div style="width: 542px; height: 97px; float: left; margin-left: 0px; margin-top: -20px">
						<h1
							style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light	">
							<?php echo ($valor->text);?>
						</h1>
					</div>
					<img src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
						style="float: left; margin-top: 1%; margin-left: 20px" />
				</div>
				
				<?php endif;?>
				
				<?php endif;?>
				<?php endforeach;?>
				<div style="clear:both;width: 842px; height: 21px; float: left; background-color: #f5f5f5; float: left; margin-left: 8%; margin-top: 160px">
				</div>
				</div>
			</div>
			
	</div> 
    <p></p><p></p><p></p>
  <div class="container">
    <h2>in construction about</h2>
    <div class="row">
      <div class="col-md-6"><div class="block"></div></div>
      <div class="col-md-6"><div class="block"></div></div>
    </div>
    <h2>to the world of the  sonaray</h2>
    <div class="row">
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="-200px"></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="-100px"></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="100px"></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="200px"></div></div>
    </div>
    <h2>...in construction about</h2>
    <div class="row">
      <div class="col-md-3"><div class="block" data-move-x="-500px" data-rotate="90deg"></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg"></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="200px" data-rotate="-45deg"></div></div>
      <div class="col-md-3"><div class="block" data-move-x="500px" data-rotate="-90deg"></div></div>
    </div>
   
    <h2>to the world of the  sonaray</h2>
    <div class="row">
      <div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"></div></div>
      <div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"></div></div>
      <div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"></div></div>
    </div>
    <div class="row">
      <div class="col-md-3"><div class="block" data-rotate-y="180deg" data-move-z="-200px" data-move-x="-300px"></div></div>
      <div class="col-md-3"><div class="block" data-rotate-x="180deg" data-rotate-y="180deg" data-move-z="-700px"></div></div>
      <div class="col-md-3"><div class="block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px"></div></div>
      <div class="col-md-3"><div class="block" data-rotate-y="180deg" data-move-z="-100px" data-move-x="500px"></div></div>
    </div>
    <div class="row">
      <div class="col-md-6"><div class="block" data-rotate-y="270deg" data-move-x="-150%"></div></div>
      <div class="col-md-6"><div class="block" data-rotate-y="270deg" data-move-x="150%"></div></div>
    </div>
    <h2>in construction about...</h2>
    <div class="row">
      <div class="col-md-6"><div class="block" data-scale="5" ></div></div>
      <div class="col-md-6"><div class="block" data-scale="0.2" data-skew="90deg,90deg"></div></div>
    </div>
    
    <h2>to the world of the  sonaray
</h2>
  </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script src="bootstrap.min.js"></script>
    <script src="../dist/jquery.smoove.js"></script>
    <script>$('.block').smoove({offset:'40%'});</script>

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {

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
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false,                                  //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
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
</body>   
</html>