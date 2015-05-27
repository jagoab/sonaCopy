<?php
	$bucler= 1;
	$bucler_head=1;
?>
<div class="container">
<?php $i = 0; ?>
<?php foreach ($parrafos as $valor):?>
	<?php if ($bucler_head==1){?>
             <div style="background:#F9F9F9; width:100%; height:20%">
                <br />
                <h2 align="left" class="head_title">&nbsp<?php echo $valor['name']; ?></h2>
                <br />
            </div>
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
    <div style="font-size: 40px; color: #999;" ><?php echo $valor['text']; ?></div>
    

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
<script>$('.block').smoove({offset:'40%'});</script>
</body>
</html>
