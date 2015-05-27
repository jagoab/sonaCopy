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
                                       <div style="background:#F9F9F9; width:100%; height:20%">
                                                <br />
                                                <h2 align="left" class="head_title" style="color: #999999;">&nbsp<?php  echo ($news->name);; ?></h2>
                                                <br />
                                       </div>
                                    <br />
                                    <img src="http://dascomla.com/sonaray-ensamble/images/head.png" width="1081" height="254" /><br/><br/><br/> 
                                 <div>
					  
                                     <center>
                                     <h1 style="font-size: 30px; color: #999; margin-left: 15%; ">
						<?php echo ($news->title);?>
					</h1> 
                                     <h1 style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif;color: #666666; margin-left: 15%; ">
						<strong><?php  echo ($news->date_publication);?></strong>
					</h1>
                                       </center>
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


