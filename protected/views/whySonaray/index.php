  <?php
     $bucler= 1;
     $bucler_head=1;
    ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />
<style>
.head_title {
	color: #999999;
	font-size: 36px;
	font-family:Arial, Helvetica, sans-serif;
	margin-left: 20px;
}
</style>
<br/>
<br/> <br/> <br/> <br/> <br/>  <br/> 
<center>
<div class="container">  
    <?php $i = 0; ?>
    <?php foreach ($parrafos as $valor):
     
    //echo $valor[0]->name;
        ?>
    
<?php if ($bucler_head==1){ ?>
<div style="background:#F9F9F9 !important; width:100%;clear:both;float:left;">
<h2 align="left" class="head_title">&nbsp<?php  echo $valor[0]->name; ?></h2>
</div>
<div style="width:100%;clear:both;float:left;margin-top: 1%;margin-bottom: 2%">
</div>
         <?php
         $bucler_head=$bucler_head+1;
         } ?>
    

         <?php if ($bucler == 1){ 
          
         echo '<div style="clear:both;float:left;" class="block" data-move-y="200px" data-move-x="100px">';
         } 
        if ($bucler == 2){
      
         
         echo '<div style="clear:both;float:left" class="block" data-move-y="200px" data-move-x="-200px">';
         
          }  
          if ($bucler == 3){
       
       //  echo"<div class='block'  data-rotate-y='180deg' data-move-z='-200px' data-move-x='-300px'>";
          echo '<div style="clear:both;float:left" class="block" data-move-y="200px" data-move-x="100px">';
          }  
             if ($bucler > 3){
       
           echo '<div style="clear:both;float:left" class="block" data-move-x="-500px" data-rotate="90deg">';
      
         
        
          } 
       ?>
             
        <br/><br/>
        
<div style="font-size: 40px; color: #999" ><?php  echo $valor[0]->text; ?></div>
<center>
<div style="">
<div style='width: 18%;'>
<img src="<?php echo Yii::app()->request->baseUrl.$imagenesAboutUs[$i]->path; ?>" style="width: 100%; " />
</div>
<div style='width: 60%; border: 0px solid green; text-align: justify; font-family: Arial; font-size: 14px;'> 
<strong><?php echo $valor[1]->text; ?></strong><br/><br/>
<span style="text-align: justify; margin-left: 14px; margin-top: 5%;font-size: 13pt;  color:#999 "> 
<?php echo $valor[2]->text; ?>
</span>
</div>
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
<script>$('.block').smoove({offset:'30%'});</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
var num = 0; //number of pixels before modifying styles
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});
</script>