<!DOCTYPE html>
  <?php
     $bucler= 1;
     $bucler_head=1;
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
    
     <title>SONARAY</title>
    <link rel="icon" type="image/png" href="http://dascomla.com/toolbox/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />

      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />
<style>
.head_title {
	color: #999999;
	font-size: 36px;
	font-family:Arial, Helvetica, sans-serif;
        margin-left: 20px;
}
</style>
  </head>
<body>    
<div class="container">
			
			<div style="clear:both;width: 100%; 
				       height: auto; 
				       float: left; 
				       margin-left: 0px; 
				       margin-top: 0px; 
				       background-color: #fff">
				       
			<?php foreach ($textos as $key => $valor):?>
				
				<?php if($key == 0):?>
				<br/><br/><br/><br/><br/><br/>
                                      <?php if ($bucler_head==1){ ?>
                <div style="background:#F9F9F9; width:100%; height:20%">
                <br />
                <h2 align="left" class="head_title">&nbsp<?php  echo $valor->name; ?></h2>
                <br />
                </div>
      
         <?php
         $bucler_head=$bucler_head+1;
         } ?>
<!--				<img class="img-responsive" src="<?php //echo (Yii::app()->request->baseUrl.$imagenesAboutUs[$key]->path);?>"
					 style="float: left; margin-top: 0px; margin-left: 0px;width: 100%" /> -->
				<img class="img-responsive" src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
					 style="float: left; margin-left: 13%; margin-top: 30px" />
				
					 
				<div class="container" >	 
                                    
				<div class="block" data-move-y="200px" data-move-x="-200px" style="clear:both;width: 75%; height: 270px; margin-left: 13%; margin-top: 20px; float: left; border: 0; background-color: #ffffff;">
					<h1 style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light">
						<?php echo ($valor->text);?>
					</h1>
				</div>
				
				<?php else:?>
				
				<?php if($key == 1):?>
                                    <div  class="block" data-move-y="200px" data-move-x="200px" style="clear:both;width: 842px; height: 150px; margin-left: 13%; margin-top: 5%; float: left; border: 0; background-color: #ffffff;">
				
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
				<div class="block" data-move-y="200px" data-move-x="-200px" style="clear:both;width: 842px; height: 127px; margin-left: 13%; margin-top: 30px; float: left; border: 0; background-color: #ffffff;">
					<div style="width: 542px; height: 97px; float: left; margin-left: 0px; margin-top: -20px">
						<h1
							style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light	">
							<?php echo ($valor->text);?>
						</h1>
					</div>
					<img src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
                                             style="float: left; margin-top: 1%; margin-left: 40px" width="30%" />
				</div>
				
				<?php endif;?>
				
				<?php endif;?>
				<?php endforeach;?>
				<div style="clear:both;width: 842px; height: 21px; float: left; float: left; margin-left: 8%; margin-top: 160px">
				</div>
				</div>
			</div>
			
	</div> 
    <p></p><p></p><p></p>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smoove.js"></script>
    <script>$('.block').smoove({offset:'10%'});</script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>   
</html>