  <?php
     $bucler= 1;
     $bucler_head=1;
    ?>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newcss.css" />
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
	}
	
	#ancho a {
		color:#fff;
	}
        .head_title {
	color: #999999;
	font-size: 36px;
	font-family:Arial, Helvetica, sans-serif;
        margin-left: 20px;
}
</style>  

<body>         
 <br/> 
     <div class="container">
    <?php $i = 0; ?>
   <?php foreach ($textos as $key => $valor):?>
           <?php if ($bucler_head==1){ ?>
            <br/>
             <div style="background:#F9F9F9; width:100%; height:20%">
                <br/>
                <h2 align="left" class="head_title">&nbsp<?php  echo $valor->name; ?></h2>
                <br />
            </div>
                <br/>
         <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/head.png" class="img-responsive"/><br/><br/><br/>
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
             if ($bucler > 3){
       
           echo"<div class='block' data-move-x='-500px' data-rotate='90deg'>";
      
         
        
          } 
       ?>
             
        <br/><br/>
    <div style="font-size: 30px; color: #999; "  ><?php echo ($valor->title); ?></div>
  <span style="text-align: justify; margin-left: 14px; margin-top: 5%;font-size: 13pt;  color:#999 "> 
<?php echo ($valor->date_publication); ?>
</span> 
<hr color="#CCCCCC" size=3 width="80%" align="center">

<div style="">
 
<div style=''> 
    <a style="font-size: 18px;" href="<?php echo Yii::app()->request->baseUrl; ?>/news/cases?id=<?php echo $valor->id;?>" >
                                                    <?php Yii::app()->language != 'es' ? print 'details.' : print 'ver' ;?>
                                                    </a>

</div>
</div>  
   </div>
           
<br/>
<br/> 
 

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
