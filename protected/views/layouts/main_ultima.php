<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <title>SONARAY</title>
                        <link rel="icon" type="image/png" href="http://dascomla.com/toolbox/images/favicon.ico" />
<!--                        <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />-->
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
        background: #ffffff;
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
                        </head>
                        <body>  
                            <div class="navbar-wrapper">
                            <div class="container">
                                        <nav class="navbar navbar-inverse navbar-static-top"  >
					 <div class="flotar">
                                             <p align="center" class="Estilo5" style="font-size:38px; font-family: Impact; color: #003399;">Creating the future</p>
                                                <p align="center" class="Estilo6" style="font-size: 18px; font-family: Century Gothic; color: #CCCCCC;">Iluminando los sueños de todos!
                                            </div>
                                        </nav>
                                        </div>
                            </div>
                            <div style="min-height: 100px;">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;     z-index:0; ">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 1200%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                
                 <div>
                    <img u="image" src2="<?php echo Yii::app()->request->baseUrl; ?>/images/home/luz.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo Yii::app()->request->baseUrl; ?>/images/home/red.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo Yii::app()->request->baseUrl; ?>/images/home/purple.jpg" />
                </div>
                
                
<!--                 <div>
                    <img u="image" src2="../img/1920/red_23.jpg" />
                </div>-->
              
            </div>

            <!-- Bullet Navigator Skin Begin -->
            
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
                .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {
                    position: absolute;
                    cursor: pointer;
                    display: block;
                    background: url(../img/a21.png) center center no-repeat;
                    overflow: hidden;
                }

                .jssora21l {
                    background-position: -3px -33px;
                }

                .jssora21r {
                    background-position: -63px -33px;
                }

                .jssora21l:hover {
                    background-position: -123px -33px;
                }

                .jssora21r:hover {
                    background-position: -183px -33px;
                }

                .jssora21ldn {
                    background-position: -243px -33px;
                }

                .jssora21rdn {
                    background-position: -303px -33px;
                }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">bootstrap slider</a>
        </div>
        <!-- Jssor Slider End -->
    </div>
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
	
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  style="background:#FFFFFF"><a href="index.php" style="color: #000000; font-weight: bold;">HOME</a></li>
                <li class="dropdown">
				
				
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color: #666666; font-weight: bold;">PRODUCT <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#" style=" font-weight: bold;">HighBay</a></li>
                        <li><a href="#" style=" font-weight: bold;">Flood Ligth</a></li>
                        <li><a href="#" style=" font-weight: bold;">Flood Bar</a></li>
                        <li><a href="#" style=" font-weight: bold;"> tubes & Paneis</a></li>
                       <li><a href="#" style=" font-weight: bold;"> Downlight</a></li>
                          <li><a href="#" style=" font-weight: bold;"> StreetLight</a></li>
                    </ul>
                </li>
                <li class="dropdown">
				
				
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color: #666666; font-weight: bold;">SOLUTIONS <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#" style=" font-weight: bold;">Logistic</a></li>
                        <li><a href="#" style=" font-weight: bold;">Production</a></li>
                        <li><a href="#" style=" font-weight: bold;">Exhibition halls</a></li>
                        <li><a href="#" style=" font-weight: bold;"> Sporting areas</a></li>
                       <li><a href="#" style=" font-weight: bold;"> Parking lots</a></li>
                    </ul>
                </li>
               
               
               <li class="dropdown">
				
				
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color: #666666; font-weight: bold;">SERVICE <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#" style=" font-weight: bold;">Avantages</a></li>
                        <li><a href="#" style=" font-weight: bold;">FAQ</a></li>
                        <li><a href="roi.php" style=" font-weight: bold;">ROI Calcultor</a></li>
                        <li><a href="#" style=" font-weight: bold;">Retrofit</a></li>
                       <li><a href="DownloadCenter.html" target="_blank" style=" font-weight: bold;">Download Center</a></li>
                       <li><a href="#" style=" font-weight: bold;">Newsletter</a></li>
                    </ul>
                </li>
                     <li><a href="#" style="color: #666666; font-weight: bold;">WHERE TO BUY</a></li>
                        <li><a href="#" style="color: #666666; font-weight: bold;">DEALER AREA</a></li>
                      
                    
                         <li class="dropdown">
				
				
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color: #666666; font-weight: bold;">ABOUT US<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="about.php" style=" font-weight: bold;">Mission Statement</a></li>
                        <li><a href="about.php" style=" font-weight: bold;">Press Releases</a></li>
                        <li><a href="about.php" style=" font-weight: bold;">Contact</a></li>
                        <li><a href="about.php" style=" font-weight: bold;">Carrer</a></li>
						<li><a href="http://www.dascomla.com/sonaray-toolbox-test/site/login" target="_blank" style=" font-weight: bold;">Partner</a></li>
						
                    </ul>
                </li>
            </ul>
        
        </div>
    </nav>
	<div>
</td>
  </tr>
</table>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/>
  <div class="container">

    <h2>Discover innovation <br/><br/>in Sonaray we want you to be well, live well and enjoy life. By understanding their aspirations and needs you become what inspires us.<br/><br/>

</h2><p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="row" >
    <div class="col-md-6" ><div class="block" data-move-x="-600px" style="border: 6;" ><strong><p style="font-size: 28px; color: #003399; " align='left'> About us</p> </strong><p style="font-size: 28x; " align='left'>________________</p><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p><p style="font-size: 28x; " align='right'>VER MAS</p></div></div>
        <div class="col-md-6"><div class="block" data-move-x="600px" ><iframe width="560" height="315" src="//www.youtube.com/embed/eSjuBM268Yo" frameborder="0" allowfullscreen></iframe></div></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="block" data-move-x="-800px" >
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/img_2.jpg">
        </div>
        </div>
      <div class="col-md-6"><div class="block" data-move-x="800px" style="background: #ffffff "><br/><strong>
                  <p style="font-size: 48x; color: #003399;" align='left'>History</p></strong> <p style="font-size: 28x; " align='left'>________________</p><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p> <p style="font-size: 28x; " align='right'>VER MAS</p></div></div>
        
    </div>


    <h2>Portfolio</h2>
    
    <div class="row">
      <div class="col-md-3"><div class="block" data-rotate-y="180deg" data-move-z="-200px" data-move-x="-300px"><img
                  src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_1.jpg"><br/><p align="justify" style="font-family: Arial, Helvetica, sans-serif;
	color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg" /></p></div></div>
      <div class="col-md-3"><div class="block" data-rotate-x="180deg" data-rotate-y="180deg" data-move-z="-700px"><img
                  src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_2.jpg"
    alt="a cute kitten"> <p align="justify" style="font-family: Arial, Helvetica, sans-serif;
	color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg"  /></p></div></div>
      <div class="col-md-3"><div class="block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px"><img
                  src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_3.jpg"
    alt="a cute kitten"> <p align="justify" style="font-family: Arial, Helvetica, sans-serif;
	color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg"  /></p></div></div>
      <div class="col-md-3"><div class="block" data-rotate-y="180deg" data-move-z="-100px" data-move-x="500px"><img
                  src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/cma_4.jpg"
    alt="a cute kitten"> <p align="justify" style="font-family: Arial, Helvetica, sans-serif;
	color: #666666;">This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras This is a sample content for foxcameras, the world of cameras <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/boton.jpg"  /></p></div></div>
    </div>
       <h2>News</h2>
    <div class="row">
      <div class="col-md-3"><div class="block" data-move-x="-500px" data-rotate="90deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
      <div class="col-md-3"><div class="block" data-move-y="200px" data-move-x="200px" data-rotate="-45deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
      <div class="col-md-3"><div class="block" data-move-x="500px" data-rotate="-90deg"><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
    </div>
     <h2>Projects</h2>
     <br/><br/>
    <div class="row">
        <div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"> <center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/portfolio_1.jpg" class="img-responsive" /></center><p></p><p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
      <div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"><center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/portfolio_2.jpg" class="img-responsive" /></center><p></p> <p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;"> DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
      <div class="col-md-4"><div class="block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"><center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/portfolio_3.jpg" class="img-responsive" /></center><p></p>  <p align="justify" style=" font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #666666;">DASCOM&rsquo;s LED Lighting business is at the forefront of lighting the world of tomorrow. With our Sonaray&trade; brand of LED lighting solutions, our mission is to provide the absolute best in energy efficient lighting. With a broad array of research, development, test and production capabilities and facilities, our experienced team is dedicated to producing only the highest quality LED lights.</p></div></div>
    </div>
  
      
     
    <div style="width:100%; height:400px; background-color: #003399;" >
     <br/> <br/>
      <br/> <br/>
          <br/> <br/>

<a onMouseOver="cambiar(1,'IMG2');" onMouseOut="cambiar(0,'IMG2');" target="_blank"  href="http://www.facebook.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face_2.png');" name="IMG2"/></a>
     
       <a onMouseOver="cambiar(1,'IMG1');" onMouseOut="cambiar(0,'IMG1');" target="_blank" href="http://twitter.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw_2.png');" name="IMG1"/></a>

<a onMouseOver="cambiar(1,'IMG3');" onMouseOut="cambiar(0,'IMG3');" target="_blank"  href="http://www.youtube.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt_2.png');" name="IMG3"/></a>

<a onMouseOver="cambiar(1,'IMG4');" onMouseOut="cambiar(0,'IMG4');" target="_blank"  href="http://instagram.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/in.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/in_2.png');" name="IMG4"/></a>
      
    
     <p style="color: #ffffff;">in construction Sonaray<p>
    </div>
  </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smoove.js"></script>
    <script>$('.block').smoove({offset:'50%'});</script>

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smoove.min.js"></script>
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

        var num = 500; //number of pixels before modifying styles

        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > num) {
                $('.menu').addClass('fixed');
                } else {
                $('.menu').removeClass('fixed');
                }
            });

</script>
</body>
