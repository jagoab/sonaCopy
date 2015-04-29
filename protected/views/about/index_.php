<style>
.container {
	padding-right: 0px !important;
	padding-left: 0px !important;
}
</style>

<div class="container">
			
			<div style="clear:both;width: 100%; 
				       height: auto; 
				       float: left; 
				       margin-left: 0px; 
				       margin-top: 0px; 
				       background-color: #fff">
				       
			<?php foreach ($textos as $key => $valor):?>
				
				<?php if($key == 0):?>
				
				<img class="img-responsive" src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[$key]->path);?>"
					 style="float: left; margin-top: 0px; margin-left: 0px;width: 100%" /> 
				<img class="img-responsive" src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
					 style="float: left; margin-left: 13%; margin-top: 30px" />
				
					 
				<div class="container">	 
				<div style="clear:both;width: 75%; height: 270px; margin-left: 13%; margin-top: 20px; float: left">
					<h1 style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light">
						<?php echo ($valor->text);?>
					</h1>
				</div>
				
				<?php else:?>
				
				<?php if($key == 1):?>
				<div style="clear:both;width: 842px; height: 150px; margin-left: 13%; margin-top: 5%; float: left">
				
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
				<div style="clear:both;width: 842px; height: 127px; margin-left: 13%; margin-top: 30px; float: left">
					<div style="width: 542px; height: 97px; float: left; margin-left: 0px; margin-top: -20px">
						<h1
							style="font-size: 15px; text-align: justify; line-height: 23px;font-family: Helvetica-Condensed-Light	">
							<?php echo ($valor->text);?>
						</h1>
					</div>
					<img src="<?php echo (Yii::app()->request->baseUrl.$imagenesAboutUs[($key+1)]->path);?>"
						style="float: left; margin-top: 1%; margin-left: 20px" />
				</div>
				
				<?php endif;?>
				
				<?php endif;?>
				<?php endforeach;?>
				<div style="clear:both;width: 842px; height: 21px; float: left; background-color: #f5f5f5; float: left; margin-left: 8%; margin-top: 160px">
				</div>
				</div>
			</div>
			
	</div>
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