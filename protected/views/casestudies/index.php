<?php if(count($imagenesSlider)>0){ ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="clear: both; float: left; width: 100%;margin-top: 1%; margin-bottom: 1%">
	<ol class="carousel-indicators" style="margin-bottom: 30px;">
<?php
$i = 0;
foreach ($imagenesSlider as $banner):
	$cantidad = count($banner);
?>
<?php endforeach; ?>
	</ol>
<div class="carousel-inner">
<?php
foreach ($imagenesSlider as $banner):
	if ($i == 0):
		$i++ ;
?>
<div class="item active" style="min-height: 400px;">
	<a target="_blank" download="<?php $banner['subPath']?>" href="<?php echo Yii::app()->request->baseUrl.$banner['subPath']; ?>"><?php echo CHtml::image(Yii::app()->request->baseUrl.$banner['path'],"",array('width'=>'100%')); ?>
	<span style="padding: 1px; padding-right: 25px; padding-left: 25px; background-color: rgba(100, 100, 100, 0.2); position: absolute; top: 93%; right: 47%;">
	<span style="font-size: 20px; color: #FFF" class="glyphicon glyphicon-floppy-save"></span></span>
	</a>
</div>
	<?php else: ?>
<div class="item">
	<a target="_blank" download="<?php $banner['subPath']?>" href="<?php echo Yii::app()->request->baseUrl.$banner['subPath']; ?>">
	<?php echo CHtml::image(Yii::app()->request->baseUrl.$banner['path'],"",array('width'=>'100%')); ?>
    <span style="padding: 1px; padding-right: 25px; padding-left: 25px; background-color: rgba(100, 100, 100, 0.2); position: absolute; top: 93%; right: 47%;">
    <span style="font-size: 20px; color: #FFF" class="glyphicon glyphicon-floppy-save"></span></span></a>
</div>
	<?php endif; ?>
<?php endforeach; ?>
</div>
<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<?php
}
else
{
	echo '<div style="font-size:20px; height:250px;"><span class="glyphicon glyphicon-floppy-remove" style="font-size:25px; "></span> No results found for this language</div>';
}
?>
