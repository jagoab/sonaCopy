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
                        <div style="display:inline;">
                                <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001610015/?label=_sXQCLGl9gkQn7bN3QM&amp;guid=ON&amp;script=0"/>
                            </div>
                        
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
                        </noscript>
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
 <div class="menu" style="background: #CCCCCC; ">

<table width="100%" height="100px" border="0" >
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
                    src="<?php echo Yii::app()->request->baseUrl; ?>/images/sonaray_small.png"
    alt="a cute kitten"></a>
        </div>
	
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php" style="color: #666666; font-weight: bold;">HOME</a></li>
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
               <li><a href="about.php" style="color: #666666; font-weight: bold;">SOLUTIONS</a></li>
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
                     
					  <li style="background:#FFFFFF" class="dropdown">
				
				
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
   
	</div>
</td>
  </tr>
</table>
    
    </div>
                                    <?php echo $content; ?>

                                    <div style="width:100%; height:400px; background-color: #003399;" >
     <br/> <br/>
      <br/> <br/>
 <span class="Estilo6 Estilo6" style="font-family: Impact;
	font-size: 36px; color: #FFFFFF;" >Newsletter</span><br/><br/>
        <a onMouseOver="cambiar(1,'IMG2');" onMouseOut="cambiar(0,'IMG2');" target="_blank"  href="http://www.facebook.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/face_2.png');" name="IMG2"/></a>
     
       <a onMouseOver="cambiar(1,'IMG1');" onMouseOut="cambiar(0,'IMG1');" target="_blank" href="http://twitter.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/tw_2.png');" name="IMG1"/></a>

<a onMouseOver="cambiar(1,'IMG3');" onMouseOut="cambiar(0,'IMG3');" target="_blank"  href="http://www.youtube.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/yt_2.png');" name="IMG3"/></a>

<a onMouseOver="cambiar(1,'IMG4');" onMouseOut="cambiar(0,'IMG4');" target="_blank"  href="http://instagram.com/">
<img border="0" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/in.png" onload="preloadcambiar(this,'<?php echo Yii::app()->request->baseUrl; ?>/images/home/social/in_2.png');" name="IMG4"/></a>
      <br/>
        <br/> 
        <input name="" type="text" placeholder="Email"  size="40" height="6px" />
         <br/>
          <br/>
           <input type="submit" name="Submit" value="sign up"/>
          <br/>
           <br/>

     <br/>
     
     <p style="color: #ffffff;">Sonarayled © 2015 | Privacy Policy<p>
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

