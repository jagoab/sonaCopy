<script type="text/javascript">
	$(document).ready(function() {
	// add the fancy box click handler here
	setTimeout(function() { $("#yw0_button").trigger('click');},1);
});
</script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css"> -->
<!-- <link href="bootstrap.min.css" rel="stylesheet" />-->
<link rel="icon" type="image/png" href="http://dascomla.com/toolbox/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
<style>
/* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */
.flotar {
	position: absolute;
	top: 50px;
	left: 0;
	width: 100%;
	height: 51px;
}

.navbar-wrapper {
	background-color: #FFFFFF;
	position: absolute;
	left: 0;
	width: 100%;
	height: 51px;
}

.navbar-wrapper>.container {
	padding: 0;
}

@media all and (max-width: 768px ) {
	.navbar-wrapper {
		position: relative;
		top: 0px;
	}
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estiloscarrusel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/awesomeIconFonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.accordion.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carrousel/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">
idclick=023190283109283091283;
activarCarosel = function(idContent, idCarousel, valorLista, pestana, idType) {
		$("#contenedorDetalle").hide();
		$("#accordion1 ul li div").css('width', '100%');
		$(".cloudzoom-ajax-loader").remove();
		$("#results").css({'display': 'none'});
		var idPestana = $("#accordion1 ul > li");
		var pestanaActiva;
		$('.contenedores').each(function() {
			//alert($(this).attr('id')+'-'+idContent)
			if ($(this).attr('type') == idContent) {
				$(this).fadeIn()
			} else {
				$(this).css({'display': 'none'});
			}
		})
		$('#' + idCarousel).carouFredSel({
			circular: false,
			infinite: false,
			auto: false,
			width: "100%",
			align: "left",
			prev: {button: "#foo2_prev", key: "left"},
			next: {button: "#foo2_next", key: "right"},
			pagination: "#foo2_pag",
		});
		$('span').css('width', '');
		$('.lista span').css({'width': ''});
		return;
	};
		
function cargaAjax(idProduct,idImagen) {
var idioma = <?php echo "'" . Yii::app()->language . "'"; ?>;
var idProducto = idProduct;
$("#contenedorDetalle").hide();
$(".imagenesMedianas").empty();
$(".textoTitulo").empty();
$("#resumenProducto").empty();
$(".tituloProducto").empty();
$("#caracteristicas").empty();
$("#detalle").empty();
$("#espec").empty();
$("#menuDetalle").empty();
$("#contieneDetallesMenu").empty();
	$.ajax({
			type: "POST",
			url : "<?php echo Yii::app()->baseurl; ?>/products/InfoProducto",
			cache : true,
			data: {idProducto : idProduct,idIdioma:idioma,YII_CSRF_TOKEN:'97715e584b04788d8d63c525bca203b366decd7a',infoProducto:''},
}).done(function(response) {
			$("#barraTab").show();
			var html = '';
			var respuesta = eval('(' + response + ')');
			for(var i=0;i<respuesta.imagenMediana.length;i++)
			{
					//rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
					rutaImagenMediana = respuesta.rutaBase+respuesta.imagenMediana[i].path;
					html = '<div><img id="'+i+'" src = "'+rutaImagenMediana+'" /></div>';
					$(".imagenesMedianas").append(html);
			};
			if(respuesta.descripcion[0] != null)
				$("#resumenProducto").append(respuesta.descripcion[0].text);
			for(var i=0;i<respuesta.imagenPequena.length;i++)
			{
				//rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
				rutaImagenMediana = respuesta.rutaBase+respuesta.imagenMediana[i].path;
				rutaImagenPequena = respuesta.rutaBase+respuesta.imagenPequena[i].path;						
				html = '<div style="clear:both;float:left;height:auto;margin:0;padding:0;margin-top:7.1%"><a href="' + rutaImagenMediana + '"><img style="float:left;padding:0;margin:0;border:0" src = "'+rutaImagenPequena+'" /></a></div>';
				$(".imagenesPequenas").append(html);
			};
			
			$(".tituloProducto").append(respuesta.nombreProducto.name);
			if(respuesta.pestanasDetalles.length == 0){ $("#barraTab").hide();}
			else { $("#barraTab").show(); }
			for(var i=0;i<respuesta.pestanasDetalles.length;i++)
			{
				/*if(idProducto != 10){*/
				html = "<li class=\"enlaceBotontab"+i+"\" style=\"width: auto;text-align: center;background-color: "+ (i==0?'#e6e6e6;':'#a4a4a4;') + (i == (respuesta.pestanasDetalles.length - 1)? '': 'border-right: solid 1px #ffffff') +"; font-size:12px\" id='liEspec'>";
				html += "<a class=\"enlaceBoton\" id=\"tab"+i+"\" style=\"color: "+ (i==0?'black;':'none;') +"text-decoration: none\" id=\"linkE\" href=\"javascript:cambio('"+respuesta.pestanasDetalles[i].name+"','tab"+i+"')\">"+(respuesta.pestanasDetalles[i].category == 5?respuesta.pestanasDetalles[i].text:respuesta.pestanasDetalles[i].name);
				html += "</a>";
				html += "</li>";
				$("#menuDetalle").append(html);
				if(respuesta.pestanasDetalles[i].category != 8 && respuesta.pestanasDetalles[i].category != 9)
				{
					html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"display: block;margin: auto; text-align:left;font-size:12px;clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':';display:none;')+"\">";
					html += "<div style=\"clear:both;float:left;width:50%;\">"+respuesta.pestanasDetalles[i].text+"</div>";
					for(var k = 0;k<respuesta.imagenesDetalles.length;k++)
					{
						if(respuesta.imagenesDetalles[k].category == respuesta.pestanasDetalles[i].category)
						{
							html += "<div style=\""+(respuesta.imagenesDetalles[k].category == 5?'clear:both;':'')+"float:left;width:50%;margin-top:0%\"><img style='width:100%' src=\""+respuesta.rutaBase+respuesta.imagenesDetalles[k].path+"\"></div>";
						}
					}
					html += "</div>";
				}
				else
				{
					if(respuesta.pestanasDetalles[i].category == 8)
					{
						html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"font-size:12px;clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':';display:none;')+"\">";
						if(respuesta.pathDescargas.length>0)
						{
							for(var j=0;j<respuesta.pathDescargas.length;j++)
							{
								html += "<div style=\""+(j==0?'clear:both':'')+";float:left;margin-top:1%;margin-left:2%\"><a  href=\""+respuesta.rutaBase+respuesta.pathDescargas[j].path+"\"><img src=\""+respuesta.rutaBase+respuesta.pathDescargas[j].description+"\"><div style=\"float:left;padding-left:1%\">"+respuesta.pathDescargas[j].name+"</div></a></div>";
							}
						}
						else
						{
							html+='<div>No downloads For this product</div>'
						}
						html += "</div>";
					}
					if(respuesta.pestanasDetalles[i].category == 9)
					{
						html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':';display:none;')+"\">";
						for(var j=0;j<respuesta.pathVideos.length;j++)
						{
							html += "<div style=\""+(j==0?'clear:both':'')+";float:left;margin-top:1%;margin-left:2%\"><a href=\""+respuesta.pathVideos[j].path+"\"><img style='width:100%' src=\""+respuesta.rutaBase+respuesta.pathVideos[j].pathTypeFile+"\"><div style=\"float:left;padding-left:9%\">"+respuesta.pathVideos[j].name+"</div></a></div>";
						}
						html += "</div>";
					}
				}
$("#contieneDetallesMenu").append(html);
}
$("#contenedorDetalle").fadeIn();
$('html,body').animate({ scrollTop: $("#contenedorDetalle").offset().top }, 1000);
});
	if(idioma == 'es')
	{
		$('#barraTab').css('width','74.5%');
	}
}

function cambio(res,id)
{
var contenedor = $("#contieneDetallesMenu > .tab");
for(var i=0;i<contenedor.length;i++)
{
	if((contenedor[i].attributes.id.value).replace(" ","").toString() == (res.replace(" ","")).toString())
	{
		$('#'+res).fadeIn();
	}
	else
	{
		$('#'+contenedor[i].attributes.id.value).hide();
	}
}
var enlaces = $('.enlaceBoton');
for(var i=0;i<enlaces.length;i++)
{
			if(enlaces[i].attributes.id.value == id)
			{
				$('.enlaceBoton'+id).css('background-color','#e6e6e6');
				$('#'+id).css('color','black');
			}
			else
			{
				$('.enlaceBoton'+enlaces[i].attributes.id.value).css('background-color','#a4a4a4');
				$('#'+enlaces[i].attributes.id.value).css('color','white');
			}
}
}
$(function () {
$('#pestana0').trigger('click');
$('.img_producto').click(function() {
	if($(this).attr('id_2')!=idclick)
	{
		idclick=$(this).attr('id_2');
		cargaAjax($(this).attr('id_2'), $(this).attr('idx'))
	}
})
<?php if ($idclick!=null) {?> cargaAjax(<?php echo $idclick; ?>,<?php echo $idclick; ?>)<?php  }?>});
</script>
<style>
.container {
	padding-right: 0px !important;
	padding-left: 0px !important;
}
</style>
<div style="clear:both;float:left;width: 100%">
	<div id="accordion1">
		<ul><?php $i = 0; $j = 1; ?>
			<?php 
			$categorias = array ();
			$pag = 1;
			foreach ($pt as $pt1):
				
				if (@ (strtolower(Yii::app()->session['flag']) == 'us' && $pt1['id'] != 8 && $pt1['id'] != 4) || strtolower(Yii::app()->session['flag']) != 'us')
				{
					if (@ (strtolower(Yii::app()->session['flag']) == 'al' && $pt1['id'] != 8 && $pt1['id'] != 4 && $pt1['id'] != 3) || strtolower(Yii::app()->session['flag']) != 'al')
					{
						$categorias[] = $pt1['id'];
						
						if (isset($_GET['id_cat']))
						{
							
							if ($_GET['id_cat'] == $pt1['id'])
							{
								$pag = $i + 1;
							}
						}
			?>
			<li class="pestaLed" id="pestana<?php echo $i ?>" onclick="activarCarosel('<?php echo $pt1['id']; ?>','foo<?php echo $pt1['id']; ?>','lista<?php echo $i; ?>','pestana<?php echo $i ?>',<?php echo $pt1['id']; ?>)">
				<h1 id="pestana<?php echo $i; ?>"><?php echo $pt1["name"]; ?></h1>
				<div class="lista<?php echo $i; ?>">
					<span style="padding: 0; height: auto;">
						<div class="imagenesCarrousel" style="clear: both; float: left; width: 100%; padding-left: 1.4%;"><?php  echo CHtml::image( Yii::app()->baseUrl.'/images/accordion/'. Yii::app()->language ."/".$pt1['id'].'_top.jpg', 'alt', array('style' => 'height:auto;width:94%;padding-right:1.5%;padding-top:1.5%')); ?></div>
						<div class="textoInterno" style="clear: both; float: left; height: auto; padding-left: 2%; padding-right: 6%; padding-top: 1%; margin-right: 2%; font-size: 14px; color: #9c9aa0; text-align: justify;">
						<?php
						foreach ($pt1["productsTypesTexts"] as $ptt):
							echo $ptt["description"];
						?>
						<?php endforeach;?>
						</div>
						<div style="width: 910px;" id="smImagenSlide"><?php  echo CHtml::image( Yii::app()->baseUrl.'/images/accordion/'.Yii::app()->language ."/".$pt1['id'].'_bottom.jpg', 'alt', array('style' => 'height:auto;width:94%;padding-right:20%;padding-top:1.5%')); ?></div>
					</span>
				</div>
			</li>
			<?php
						$i++ ;
						$j++ ;
					}
			}?>
		<?php  endforeach; ?>
		</ul>
	</div>
	<?php $i=0;?>
	<?php $j = 1; ?>
	<div>
	<?php
	foreach ($categorias as $cat)
	{
	?>
	<div class="contenedores" id="carouselContent<?php echo $cat; ?>" type="<?php echo $cat; ?>" style="clear: both; float: left; width: 100%; margin-top: 1%; margin-left: 0.5%;">
		<div class="image_carousel<?php echo $cat; ?>">
		<div id="foo<?php echo $cat; ?>" class="col-md-12">
	<?php $i = 0;
	foreach ($imgs as $img):
	// var_dump($SqlProductosPorAplicacion);
	if ($img['type_id'] == $cat)
	{
	?>
	<img class="img_producto" type="<?php echo $img['id_producto'] ?>" id_2='<?php echo $img['id_producto'] ?>' idx="<?php echo  $img['id_producto']; ?>" width="121" height="84" src="<?php echo Yii::app()->request->baseUrl . $img['path']; ?>" />		  	               	  		    
	<?php
	}
	$i++ ;
	endforeach;?>
	</div>
	</div>
	</div>
	<?php } ?>
	</div>
	<div style="clear: both; float: left; width: 100%; position: relative;">
		<div style="float: left">
			<a class="prev" style="float: left" id="foo2_prev" href="#"><span>prev</span></a>
		</div>
		<div style="width: 88%; float: left">
			<div class="pagination" id="foo2_pag"></div>
		</div>
		<div style="float: left">
			<a class="next" style="float: right" id="foo2_next" href="#"><span>next</span></a>
		</div>
	</div>
<div id="contenedorDetalle">
		<div class="tituloProducto"></div>
		<div class="border-superior">
			<div class="contenedor-superior" style="position:relative">
				<div class="imagenesMedianas"></div>
				<div class="imagenesPequenas" style="clear:both;float:left;"></div>
				<div style="width: 50%;position:absolute;left:20px;z-index:100"><h2 class="helvetica_neueregular"><strong id="resumenProducto" style="color:white !important;"></strong></h2></div>
				<div style="width: 90%;height: 425px;position:absolute;background-color: black; opacity:0.4">&nbsp;</div>
			</div>
			<div style="float:left; width: 64%">
				<div id="barraTab" style="float:left">
					<nav class="navbar navbar-default" role="navigation"
						style="background-color: #FFFFFF;">
						<div class="navbar-header">
							<!-- <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target=".botonDetalle" >
							<span class="fuentes"><?php //echo Yii::t('forms','Product details'); ?></span>
							</button>-->
						</div>
						<!--collapse navbar-collapse navbar-ex3-collapse botonDetalle-->
						<!-- style=" height: auto; background-color: #e6e6e6; float: left; padding: 0"-->
						<div>
							<ul id="menuDetalle" class="nav navbar-nav"></ul>
						</div>
					</nav>
				</div>
				<div class="helvetica_neueregular" id="contieneDetallesMenu"></div>
			</div>
		</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
 $('#foo0').carouFredSel({
			circular: false,
			infinite: false,
			auto    : false,
			width   : "100%",
			align   : "left",
			prev    : { button  : "#foo2_prev", key     : "left"},
			next    : { button  : "#foo2_next", key     : "right"},
			pagination  : "#foo2_pag", })
			$("#accordion1").awsAccordion({ type: "horizontal", cssAttrsHor: {
																				ulWidth: "responsive",
																				liHeight: 480,
																				liWidth: 30
																			},
																			startSlide: <?php echo $pag; ?>,
																			openCloseHelper: { openIcon: "plus", closeIcon: "minus" },
																			openOnebyOne: true,
																			classTab: "small",
																			slideOn: "click",
																			autoPlay: false,
//autoPlaySpeed:2
});
}
);
</script>