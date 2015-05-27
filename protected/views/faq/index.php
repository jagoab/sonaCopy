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
        <br/><br/> <br/> <br/> <br/> <br/>  <br/> 
     <div class="container">
         
    <?php $i = 0; ?>
    <?php foreach ($parrafos as $valor):?>
          <?php if ($bucler_head==1){ ?>
             <div style="background:#F9F9F9; width:100%; height:20%">
                <br />
                <h2 align="left" class="head_title">&nbsp<?php  echo $valor[0]->name; ?></h2>
                <br />
            </div>
                <br />
                <br />
                <br />
        
       
         <img src="http://dascomla.com/sonaray-ensamble/images/head.png" width="1081" height="254" /><br/><br/><br/>
         <?php
         $bucler_head=$bucler_head+1;
         } ?>
         <?php if ($bucler == 1){ 
          
              echo"<div class='block' data-move-y='200px' data-move-x='100px'>";
         } 
        if ($bucler == 2){
      
         
         echo"<div class='block' data-move-y='200px' data-move-x='-200px'>";
         
          }  
          if ($bucler == 3){
       
       //  echo"<div class='block'  data-rotate-y='180deg' data-move-z='-200px' data-move-x='-300px'>";
          echo"<div class='block' data-move-y='200px' data-move-x='100px'>";
          }  
          if ($bucler == 4){
           echo"<div class='block' data-move-x='-500px' data-rotate='90deg'>";
          } 
          if ($bucler == 5){
              
              echo'<div class="block" data-move-y="200px" data-move-x="200px" data-rotate="-45deg">';
           //echo"<div class='block' data-move-x='-500px' data-rotate='90deg'>";
          } 
       ?>
             
        <br/><br/>
    <div style="font-size: 40px; color: #999;" ><?php  echo $valor[0]->text; ?></div>
    
<hr color="#CCCCCC" size=3 width="80%" align="center">
<center>
<div style="">
 
<div style='width: 60%; border: 0px solid green; text-align: justify; font-family: Arial; font-size: 13px; color: #999'> 

<?php echo $valor[1]->text; ?><br/><br/>

<span style="text-align: justify; margin-left: 14px; margin-top: 5%;font-size: 13pt;  color:#999 "> 
<?php //echo $valor[2]->text; ?>
</span> </div>
</div>  
   </div>
           
<br/>
<br/> <br/> <br/>
 

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
