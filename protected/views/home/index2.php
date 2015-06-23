<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<?php for ($j=0;$j<sizeof($imagenesSlider);$j++){?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $j;?>" <?php $j == 0 ? print 'class="active"' : ''; ?>></li>
	<?php }?>
	</ol>
<?php
$j = 1;
$i = 0;
$cantidad = count($imagenesSlider);
$contuer = 1;
?>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
	<?php
		foreach ($imagenesSlider as $banner)
		{
			?>
			<div class="<?php $i == 0 ? print 'item active' : print 'item'; ?>">
				<div class="fill" style="background-image: url('<?php echo Yii::app()->request->baseUrl.$banner->ruta;?>');"></div>
			</div>
		<?php $i++;
		}
		?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span></a>
</header>
<script>

$(document).ready(function() {
$("#myCarousel").swiperight(function() {
		$("#myCarousel").carousel('prev');
	});
	$("#myCarousel").swipeleft(function() {
		$("#myCarousel").carousel('next');
	});
	$('#myCarousel').carousel({ interval: 2000 });
});
</script>