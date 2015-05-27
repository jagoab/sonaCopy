  <?php
     $bucler= 1;
    ?>
<html lang="en">
  <head>
    
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css"> -->
<!--    <link href="bootstrap.min.css" rel="stylesheet" />-->
<style>
        html, body, div{
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;

        }
        


        #ancho {
		background:#330066;
		text-align:center;
		/*To anchor to bottom of page uncomment the following lines:*/
		/*position:fixed;
		bottom:0;*/
	}
	
	#ancho a {
		color:#fff;
	}
 
</style>  
<title>SONARAY</title>
    <link rel="icon" type="image/png" href="http://dascomla.com/toolbox/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />
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
        
        <div id="navbarCollapse" class="collapse navbar-collapse"  class="block" data-move-x="-500px" data-rotate="90deg">
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
            
            
<br/>
<br/> <br/> <br/> <br/> <br/>  <br/> 
    
     <div class="container">
			
			<div style="clear:both;width: 100%; 
				       height: auto; 
				       float: left; 
				       margin-left: 0px; 
				       margin-top: 0px; 
				       background-color: #fff; ">
                            
				       
			
				
				<?php $key = 0; // if($key == 0):?>
                                 
<!--				<img class="img-responsive" src="<?php //echo (Yii::app()->request->baseUrl.$imagenesAboutUs[$key]->path);?>"
					 style="float: left; margin-top: 0px; margin-left: 0px;width: 100%" /> 
				<img class="img-responsive" src="<?php //echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
					 style="float: left; margin-left: 13%; margin-top: 30px" />-->
				<div class="container" >
                                    <img src="http://dascomla.com/sonaray-ensamble/images/News/en/news.png" width="1081" height="82" /><br/><br/>
                                    <img src="http://dascomla.com/sonaray-ensamble/images/head.png" width="1081" height="254" /><br/><br/><br/> 
                                 <div>
					  
                                     
                                     <h1 style="font-size: 30px; color: #999; ">
						<?php echo ($news->title);?>
					</h1>
                                     <h1 style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif;color: #666666;  " align='center'>
						<strong><?php  echo ($news->date_publication);?></strong>
					</h1>
                                     <center>
                                     <p align="justify"  style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #666666; width: 70%" >
						<?php echo ($news->description);?>
					 </p>
                                    </center>
				</div>   

				<?php// endif;?>

				
				<div style="clear:both;width: 842px; height: 21px; float: left; background-color: #f5f5f5; float: left; margin-left: 8%; margin-top: 160px">
				</div>
				</div>
			</div>
			
	</div> 
           
<br/>
<br/> 
 
   
  </div>

<div id="ancho">
  <div class="wrap">
          <p>&copy; 0000 - FOOTHER</p>
          <p>prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
          <p>prueba prueba </p>
  </div>
</div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smoove.js"></script>
    <script>$('.block').smoove({offset:'40%'});</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
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


