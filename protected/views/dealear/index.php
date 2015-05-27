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
       
<br/>
<br/> <br/> <br/> <br/> <br/>  <br/> 
     <div class="container">

    <?php $i = 0; ?>
    <?php foreach ($parrafos as $valor):?>
          <?php if ($bucler_head==1){ ?>
          <center>
             <div style="background:#F9F9F9; width:100%; height:20%">
                <br />
                <h2 align="left" class="head_title">&nbsp<?php  echo $valor[0]->name; ?></h2>
                <br />
            </div> </center>  
                <br />
                <br />
                <br />
        
       
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/head.png" class="img-responsive" /><br/><br/><br/>
         <?php
         $bucler_head=$bucler_head+1;
         } ?>
         <?php if ($bucler == 1){ 
          
              echo"<div class='block' data-move-y='200px' data-move-x='100px'>";
         } 

       ?>
          
        <br/><br/>
    <div style="font-size: 16px; color: #999;" ><?php  echo $valor[0]->text; ?></div>
    

<center>
 </div>      
</center>
    <?php $i++;?>  
        <?php if ($bucler == true){ 
             $bucler++;
         } 
       ?>
    <?php endforeach;?>

   
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
