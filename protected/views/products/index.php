<!-- <link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css"> -->
<!-- <link href="bootstrap.min.css" rel="stylesheet" />-->
<link rel="icon" type="image/png" href="http://dascomla.com/toolbox/images/favicon.ico" />
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
<script type="text/javascript">
	$(document).ready(function() {
	// add the fancy box click handler here
	setTimeout(function() { $("#yw0_button").trigger('click');},1);
});
</script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estiloscarrusel.css" /> 
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/awesomeIconFonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.accordion.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carrousel/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.slider.mini.js"></script>
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
				html = '<img style="width:100%" id="'+i+'" src = "'+rutaImagenMediana+'" />';
				$(".imagenesMedianas").append(html);
			};
			if(respuesta.descripcion[0] != null)
				$("#resumenProducto").append(respuesta.descripcion[0].text);
			for(var i=0;i<respuesta.imagenPequena.length;i++)
			{
				//rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
				rutaImagenMediana = respuesta.rutaBase+respuesta.imagenMediana[i].path;
				rutaImagenPequena = respuesta.rutaBase+respuesta.imagenPequena[i].path;
				html = '<div style="clear:both;float:left;height:auto;margin:0;padding:0;margin-top:7.1%"><a target="_blank" href="' + rutaImagenMediana + '"><img style="float:left;padding:0;margin:0;border:0;width: 100%" src = "'+rutaImagenPequena+'" /></a></div>';
				$(".imagenesPequenas").append(html);
			};
			
			$(".tituloProducto").append(respuesta.nombreProducto.name);
			if(respuesta.pestanasDetalles.length == 0){ $("#barraTab").hide();}
			else { $("#barraTab").show(); }
			//BUCLE PARA ARMAR EL BLOQUE DE DETALLES DE PRODUCTO
			for(var i=0;i < respuesta.pestanasDetalles.length;i++)
			{
				html = '';
				if(respuesta.pestanasDetalles[i].category != 8 && respuesta.pestanasDetalles[i].category != 9)
				{
					html = '<div class="sombra" style="padding-left: 1%;background-color: rgba(227, 227, 236, 0.75); text-align:left; width:99%; clear:both; float:left; margin-top: 3%">';
					html += (respuesta.pestanasDetalles[i].category == 5?respuesta.pestanasDetalles[i].text:respuesta.pestanasDetalles[i].name);
					html += "</div>";
					$("#contieneDetallesMenu").append(html);
					html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"display: block;margin: auto; text-align:left;font-size:12px;clear:both;float:left;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':'')+"\">";
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
						var html2 = '<div class="sombra" style="padding-left: 1%;line-height: 30px;font-size: 12px; height: 31px; background-color: rgba(227, 227, 236, 0.75); text-align:left; width:100%; clear:both; float:left; margin-top: 3%">';
						html2 += (respuesta.pestanasDetalles[i].category == 5 ? respuesta.pestanasDetalles[i].text : respuesta.pestanasDetalles[i].name);
						html2 += "</div>";
						if(respuesta.pathDescargas !== null && typeof respuesta.pathDescargas === 'object')
						{
							$.each( respuesta.pathDescargas, function( key, value ) {
								html2 += '<div class="sombra" style="padding-left: 1%;line-height: 30px;font-size: 12px; height: 31px; background-color: rgba(227, 227, 236, 0.75); text-align:left; width:100%; clear:both; float:left; margin-top: 3%">' + key + "</div>";
								var tmp = value.length;
								for(var k = 0; k < value.length; k++)
								{
									//html2 += '<div style="float:left;margin-top:1%;margin-left:2%"><a target="_blank" href=\"' + value[i].path + '"><img src="' + value[i].description + '"><div style="float:left;padding-left:1%">' + value[i].name + '</div></a></div>';
								}
							});
						}
						else
						{
							html2+='<div>No downloads For this product</div>'
						}
						$("#accordion").append(html2);
					}
					if(respuesta.pestanasDetalles[i].category == 9)
					{
						html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"clear:both;float:left;padding-bottom:2%;width: 50%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':'')+"\">";
						for(var j=0;j<respuesta.pathVideos.length;j++)
						{
							html += "<div style=\""+(j==0?'clear:both':'')+";float:left;margin-top:1%;margin-left:2%\"><a target='_blank' href=\""+respuesta.pathVideos[j].path+"\"><img style='width:100%' src=\""+respuesta.rutaBase+respuesta.pathVideos[j].pathTypeFile+"\"><div style=\"float:left;padding-left:9%\">"+respuesta.pathVideos[j].name+"</div></a></div>";
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
<div style="clear: both; float: left; width: 100%">
	<div id="accordion1">
		<ul><?php $i = 0; $j = 1; ?>
			<?php
			$categorias = array ();
			$pag = 1;
			foreach ( $pt as $pt1 ) :
				
				if (@ (strtolower ( Yii::app ()->session ['flag'] ) == 'us' && $pt1 ['id'] != 8 && $pt1 ['id'] != 4) || strtolower ( Yii::app ()->session ['flag'] ) != 'us') {
					if (@ (strtolower ( Yii::app ()->session ['flag'] ) == 'al' && $pt1 ['id'] != 8 && $pt1 ['id'] != 4 && $pt1 ['id'] != 3) || strtolower ( Yii::app ()->session ['flag'] ) != 'al') {
						$categorias [] = $pt1 ['id'];
						
						if (isset ( $_GET ['id_cat'] )) {
							
							if ($_GET ['id_cat'] == $pt1 ['id']) {
								$pag = $i + 1;
							}
						}
						?>
			<li class="pestaLed" id="pestana<?php echo $i ?>"
				onclick="activarCarosel('<?php echo $pt1['id']; ?>','foo<?php echo $pt1['id']; ?>','lista<?php echo $i; ?>','pestana<?php echo $i ?>',<?php echo $pt1['id']; ?>)">
				<h1 id="pestana<?php echo $i; ?>"><?php echo $pt1["name"]; ?></h1>
				<div class="lista<?php echo $i; ?>">
					<span style="padding: 0; height: auto;">
						<div class="imagenesCarrousel"
							style="clear: both; float: left; width: 100%; padding-left: 1.4%;"><?php  echo CHtml::image( Yii::app()->baseUrl.'/images/accordion/'. Yii::app()->language ."/".$pt1['id'].'_top.jpg', 'alt', array('style' => 'height:auto;width:94%;padding-right:1.5%;padding-top:1.5%')); ?></div>
						<div class="textoInterno"
							style="clear: both; float: left; height: auto; padding-left: 2%; padding-right: 6%; padding-top: 1%; margin-right: 2%; font-size: 14px; color: #9c9aa0; text-align: justify;">
						<?php
						foreach ( $pt1 ["productsTypesTexts"] as $ptt ) :
							echo $ptt ["description"];
							?>
						<?php endforeach;?>
						</div>
						<div style="width: 910px;" id="smImagenSlide"><?php  echo CHtml::image( Yii::app()->baseUrl.'/images/accordion/'.Yii::app()->language ."/".$pt1['id'].'_bottom.jpg', 'alt', array('style' => 'height:auto;width:94%;padding-right:20%;padding-top:1.5%')); ?></div>
					</span>
				</div>
			</li>
			<?php
						$i ++;
						$j ++;
					}
				}
				?>
		<?php  endforeach; ?>
		</ul>
	</div>
	<?php $i=0;?>
	<?php $j = 1; ?>
	<div>
	<?php
	foreach ( $categorias as $cat ) {
		?>
	<div class="contenedores" id="carouselContent<?php echo $cat; ?>"
			type="<?php echo $cat; ?>"
			style="clear: both; float: left; width: 100%; margin-top: 1%; margin-left: 0.5%;">
			<div class="image_carousel<?php echo $cat; ?>">
				<div id="foo<?php echo $cat; ?>" class="col-md-12">
	<?php
		
$i = 0;
		foreach ( $imgs as $img ) :
			// var_dump($SqlProductosPorAplicacion);
			if ($img ['type_id'] == $cat) {
				?>
	<img style="cursor: pointer" class="img_producto" type="<?php echo $img['id_producto'] ?>" id_2='<?php echo $img['id_producto'] ?>' idx="<?php echo  $img['id_producto']; ?>" width="121" height="84" src="<?php echo Yii::app()->request->baseUrl . $img['path']; ?>" />
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
<style>
.slide {
	float: left;
	width: 35%;
	height: 370px;
	border-radius: 1px;
	text-align: left;
	margin-top: 1%;
	margin-left: 2%;
	position:relative;
	text-align: center
}

.contieneResumen {
	clear: both;
	float: left;
	width: 60%;
	margin: 1%;
	padding: 1%;
	border-radius: 2px;
}

.sombra {
	-webkit-box-shadow: 0px 1px 4px 0px #B6AFB6;
	-moz-box-shadow: 0px 1px 4px 0px #B6AFB6;
	box-shadow: 0px 1px 4px 0px #B6AFB6;
}
</style>
<div id="contenedorDetalle">
		<div class="tituloProducto"></div>
		<div class="border-superior">
			<div class="contenedor-superior" style="position: relative; width: 100% !important; margin: 0">
				<div style="width: 100%; clear: both; float: left">
					<div class="contieneResumen sombra">
						<div style="clear: both; float: left; width: 50%">
							<div class="imagenesMedianas"></div>
							<div class="imagenesPequenas" style="clear: both; float: left; margin-left: 2%; border-top: 1px solid #B6AFB6"></div>
						</div>
						<div style="float: left; width: 30%; margin-left: 11%">
							<h2 class="helvetica_neueregular">
								<strong id="resumenProducto" style="color: black !important; margin-top: 3%"></strong>
							</h2>
						</div>
						<div style="clear: both; float: left; width: 100%">
							<!--<div id="barraTab" style="float: left">
							<nav class="navbar navbar-default" role="navigation"
								style="background-color: #FFFFFF;">
								<div class="navbar-header">
								</div>
								<div>
									<ul id="menuDetalle" class="nav navbar-nav"></ul>
								</div>
							</nav>
							</div> -->
							<div class="helvetica_neueregular" id="contieneDetallesMenu" style="clear:both;float:left; width: 100%"></div>
						</div>
					</div>
					<div class="slide sombra">
						<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 470px;height: 370px">
							 <!-- Loading Screen -->
							<div u="loading" style="position: absolute; top: 0px; left: 0px;">
							<!-- your loading screen content here -->
							</div>
							<!-- Slides Container -->
							<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 470px; height: 370px;">
								<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/productos/LB-1018/slider/imagen1.png"></div>
								<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/productos/LB-1018/slider/imagen2.png"></div>
								<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/productos/LB-1018/slider/imagen3.png"></div>
							</div>
							<!--#region Bullet Navigator Skin Begin -->
		<!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
		<style>
            /* jssor slider bullet navigator skin 09 css */
            /*
            .jssorb09 div           (normal)
            .jssorb09 div:hover     (normal mouseover)
            .jssorb09 .av           (active)
            .jssorb09 .av:hover     (active mouseover)
            .jssorb09 .dn           (mousedown)
            */
            .jssorb09 {
                position: absolute;
            }
            .jssorb09 div, .jssorb09 div:hover, .jssorb09 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #fff 1px solid;
            }
            .jssorb09 div { background-color: #d3d3d3; }
            .jssorb09 div:hover, .jssorb09 .av:hover { background-color: gray; }
            .jssorb09 .av { background-color: #000; }
            .jssorb09 .dn, .jssorb09 .dn:hover { background-color: #a9a9a9; }
            /* jssor slider arrow Navigator Skin 04 css */
            /*
            .jssora04l                  (normal)
            .jssora04r                  (normal)
            .jssora04l:hover            (normal mouseover)
            .jssora04r:hover            (normal mouseover)
            .jssora04l.jssora04ldn      (mousedown)
            .jssora04r.jssora04rdn      (mousedown)
            */
            .jssora04l, .jssora04r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 28px;
                height: 40px;
                cursor: pointer;
                background: url(<?php echo Yii :: app()->request->baseUrl; ?>/images/home/a04.png) no-repeat;
                overflow: hidden;
            }
            .jssora04l { background-position: -16px -39px; }
            .jssora04r { background-position: -76px -39px; }
            .jssora04l:hover { background-position: -136px -39px; }
            .jssora04r:hover { background-position: -196px -39px; }
            .jssora04l.jssora04ldn { background-position: -256px -39px; }
            .jssora04r.jssora04rdn { background-position: -316px -39px; }
        </style>
		<span u="arrowleft" class="jssora04l" style="top: 50% !important; left: 8px;"></span>
		<!-- Arrow Right -->
		<span u="arrowright" class="jssora04r" style="top: 50% !important; right: 8px;"></span>
		<!-- bullet navigator container -->
		<div u="navigator" class="jssorb09" style="top: 95%;left: 44%!important">
		<!-- bullet navigator item prototype -->
		<div u="prototype"></div>
	</div>
        <!--#endregion Bullet Navigator Skin End -->
						</div>
					<div style="clear:both;float:left;margin-top: 4.5%; color: #8c8c8c" id="accordion" class="helvetica_neueregular"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
$(document).ready(function(){
	 var options = {
             $AutoPlay: false,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
             $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
             $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                 $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                 $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                 $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                 $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                 $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                 $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                 $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                 $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
             },
             $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                 $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                 $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                 $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                 $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
             },
             $DragOrientation: 3,
         };
     var jssor_slider1 = new $JssorSlider$('slider1_container', options);
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