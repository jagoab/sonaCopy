<script type="text/javascript">
    $(document).ready(function() {
    // add the fancy box click handler here
    setTimeout(function() {
        $("#yw0_button").trigger('click');
    },1);
});
</script>

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
<link rel="icon" type="image/png"
	href="http://dascomla.com/toolbox/images/favicon.ico" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
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

.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
	background: url(../img/b21.png) no-repeat;
	overflow: hidden;
	cursor: pointer;
}

.jssorb21 div {
	background-position: -5px -5px;
}

.jssorb21 div:hover, .jssorb21 .av:hover {
	background-position: -35px -5px;
}

.jssorb21 .av {
	background-position: -65px -5px;
}

.jssorb21 .dn, .jssorb21 .dn:hover {
	background-position: -95px -5px;
}

.block {
	height: 300px;
	background: #666666;
	margin-bottom: 20px;
}
</style>

</head>

<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/estiloscarrusel.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.accordion.css" />
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.accordion.js"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/carrousel/jquery.carouFredSel-6.2.1-packed.js"></script>

<script type="text/javascript">
    $(function() {
        imagenclick = null;

        $('#pestana0').trigger('click')
        $('.img_producto').click(function() {

            if (imagenclick != $(this).attr('id')) {
                imagenclick = $(this).attr('id')
                cargaAjax($(this).attr('id_2'), $(this).attr('id'))
            }
        })

    })


    function cargaAjax(idProduct, idImagen) {


        var idioma = <?php echo "'" . Yii::app()->language . "'"; ?>;
        var idProducto = idProduct;
        //vaciar contenedores 
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

        //recueprar informacion de la el producto via ajax
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->request->baseUrl; ?>/products/InfoProducto",
            cache: true,
            data: {idProducto: idProduct, idIdioma: idioma, YII_CSRF_TOKEN: '<?php echo Yii::app()->request->csrfToken ?>', infoProducto: ''},
        }).done(function(response) {


            // $("#barraTab").show();
            var html = '';
            // pasar los datos de formato json a objetos javascript
            var respuesta = eval('(' + response + ')');
            for (var i = 0; i < respuesta.imagenMediana.length; i++) {
                if (i == 0) {
                    //rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
                    rutaImagenMediana = respuesta.rutaBase + respuesta.imagenMediana[i].path;
                    html = '<div><img id="' + i + '" src = "' + rutaImagenMediana + '" /></div>';
                    $(".imagenesMedianas").append(html);
                }
            }
            ;
            if (respuesta.descripcion[0] != null)
                $("#resumenProducto").append(respuesta.descripcion[0].text);
            for (var i = 0; i < respuesta.imagenPequena.length; i++) {
                //rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
                rutaImagenMediana = respuesta.rutaBase + respuesta.imagenMediana[i].path;
                rutaImagenPequena = respuesta.rutaBase + respuesta.imagenPequena[i].path;
                html = '<div style="clear:both;float:left;height:auto;margin:0;padding:0;margin-top:7.1%"><img style="float:left;padding:0;margin:0;border:0" src = "' + rutaImagenPequena + '" ></div>';
                $("#resumenProducto").append(html);
            }
            ;


            $(".tituloProducto").append(respuesta.nombreProducto.name);



            if (respuesta.pestanasDetalles.length == 0) {
                $("#barraTab").hide();
            }
            else {
                $("#barraTab").show();
            }

            for (var i = 0; i < respuesta.pestanasDetalles.length; i++) {
                /*if(idProducto != 10){*/

                html = "<li class=\"enlaceBotontab" + i + "\" style=\"width: auto;text-align: center;background-color: " + (i == 0 ? '#e6e6e6;' : '#a4a4a4;') + (i == (respuesta.pestanasDetalles.length - 1) ? '' : 'border-right: solid 1px #ffffff') + "; font-size:12px\" id='liEspec'>";
                html += "<a class=\"enlaceBoton\" id=\"tab" + i + "\" style=\"color: " + (i == 0 ? 'black;' : 'none;') + "text-decoration: none\" id=\"linkE\" href=\"javascript:cambio('" + respuesta.pestanasDetalles[i].name + "','tab" + i + "')\">" + (respuesta.pestanasDetalles[i].category == 5 ? respuesta.pestanasDetalles[i].text : respuesta.pestanasDetalles[i].name);
                html += "</a>";
                html += "</li>";
                $("#menuDetalle").append(html);

                if (respuesta.pestanasDetalles[i].category != 8 && respuesta.pestanasDetalles[i].category != 9) {


                    html = "<div class=\"tab\" id=\"" + respuesta.pestanasDetalles[i].name + "\" style=\"text-align:left;font-size:12px;clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto" + (i == 0 ? '' : ';display:none;') + "\">";

                    html += "<div style=\"clear:both;float:left;width:50%;\">" + respuesta.pestanasDetalles[i].text + "</div>";



                    for (var k = 0; k < respuesta.imagenesDetalles.length; k++) {

                        if (respuesta.imagenesDetalles[k].category == respuesta.pestanasDetalles[i].category) {
                            html += "<div style=\"" + (respuesta.imagenesDetalles[k].category == 5 ? 'clear:both;' : '') + "float:left;width:50%;margin-top:0%\"><img src=\"" + respuesta.rutaBase + respuesta.imagenesDetalles[k].path + "\"></div>";
                        }

                    }
                    html += "</div>";


                } else {
                    if (respuesta.pestanasDetalles[i].category == 8) {
                        html = "<div class=\"tab\" id=\"" + respuesta.pestanasDetalles[i].name + "\" style=\"font-size:12px;clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto" + (i == 0 ? '' : ';display:none;') + "\">";
                        for (var j = 0; j < respuesta.pathDescargas.length; j++) {

                            html += "<div style=\"" + (j == 0 ? 'clear:both' : '') + ";float:left;margin-top:1%;margin-left:2%\"><a  href=\"" + respuesta.rutaBase + respuesta.pathDescargas[j].path + "\"><img src=\"" + respuesta.rutaBase + respuesta.pathDescargas[j].description + "\"><div style=\"float:left;padding-left:1%\">" + respuesta.pathDescargas[j].name + "</div></a></div>";

                        }
                        html += "</div>";
                    }

                    if (respuesta.pestanasDetalles[i].category == 9) {
                        html = "<div class=\"tab\" id=\"" + respuesta.pestanasDetalles[i].name + "\" style=\"clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto" + (i == 0 ? '' : ';display:none;') + "\">";
                        for (var j = 0; j < respuesta.pathVideos.length; j++) {

                            html += "<div style=\"" + (j == 0 ? 'clear:both' : '') + ";float:left;margin-top:1%;margin-left:2%\"><a href=\"" + respuesta.pathVideos[j].path + "\"><img src=\"" + respuesta.rutaBase + respuesta.pathVideos[j].pathTypeFile + "\"><div style=\"float:left;padding-left:9%\">" + respuesta.pathVideos[j].name + "</div></a></div>";

                        }
                        html += "</div>";
                    }
                }


                $("#contieneDetallesMenu").append(html);
            }
            $("#contenedorDetalle").fadeIn();
            $('html,body').animate({
                scrollTop: $("#contenedorDetalle").offset().top
            }, 1000);

        });
        if (idioma == 'es') {
            $('#barraTab').css('width', '74.5%');
        }
    }
    activarCarosel = function(idContent, idCarousel, valorLista, pestana, idType) {

        $("#contenedorDetalle").hide();
        $("#accordion1 ul li div").css('width', '100%');
        $(".cloudzoom-ajax-loader").remove();


        $("#results").css({'display': 'none'});
        var idPestana = $("#accordion1 ul > li");
        var pestanaActiva;

        $('.contenedores').each(function() {
            //alert($(this).attr('aplicacion')+'-'+idContent)
            if ($(this).attr('aplicacion') == idContent) {
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
            prev: {button: "#foo2_prev",
                key: "left"},
            next: {button: "#foo2_next",
                key: "right"},
            pagination: "#foo2_pag",
        });

        setTimeout("$('#" + pestanaActiva + "').css({'width':'82.4%'})", 200);

        $('span').css('width', '');

        /*var valores = $('.'+valorLista+'> span').each(function(key,value){
         
         valor = value;
         llave = key;
         
         });*/
        $('.lista span').css({'width': ''});


        return;




    };
    function cambio(res, id)
    {
        var contenedor = $("#contieneDetallesMenu > .tab");
        for (var i = 0; i < contenedor.length; i++) {
            if ((contenedor[i].attributes.id.value).replace(" ", "").toString() == (res.replace(" ", "")).toString()) {
                $('#' + res).fadeIn();
            }
            else {

                $('#' + contenedor[i].attributes.id.value).hide();
            }
        }

        var enlaces = $('.enlaceBoton');
        for (var i = 0; i < enlaces.length; i++) {
            if (enlaces[i].attributes.id.value == id) {
                $('.enlaceBoton' + id).css('background-color', '#e6e6e6');
                $('#' + id).css('color', 'black');
            } else {
                $('.enlaceBoton' + enlaces[i].attributes.id.value).css('background-color', '#a4a4a4');
                $('#' + enlaces[i].attributes.id.value).css('color', 'white');
            }
        }


    }
</script>

                    <?php             
                    if (isset($_GET['id_cat'])){
                         $pag=$_GET['id_cat'];
                        // echo "entro"; exit();
                    }else{
                        $pag=1;
                        //echo "salio"; exit();
                    }
                    ?>

            <style>
.container {
	padding-right: 0px !important;
	padding-left: 0px !important;
}
</style>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div id="accordion1">
	<ul>
        <?php
        $i = 0;
        $categorias = array();
        foreach ($SqlAplicationTypes as $SqlAplicationType):
            $categorias[] = $SqlAplicationType['id'];
            ?>       
            <li class="pestaLed" id="pestana<?php echo $i ?>"
			onclick="activarCarosel('<?php echo $SqlAplicationType['id']; ?>', 'foo<?php echo $SqlAplicationType['id']; ?>', 'lista<?php echo $i; ?>', 'pestana<?php echo $i ?>', 'aa')">

			<h1><?php echo $SqlAplicationType['name']; ?></h1>
			<div>
                    <?php foreach ($SqlApplicationImages as $SqlApplicationImage): ?>   
                        <?php if ($SqlApplicationImage['aplication_type_id'] == $SqlAplicationType['id']): ?>

                            <?php if (strlen($SqlAplicationType['filepath']) > 0 || $SqlAplicationType['filepath'] != NULL) { ?>
                                <a
					href="<?php echo Yii::app()->request->baseUrl .$SqlAplicationType['filepath']; ?>">
                            <?php } ?>


                            <span> <?php echo CHtml::image(Yii::app()->request->baseUrl . "/images/applicationSonaray/en/" . $SqlApplicationImage['path'], " ", array('width' => '95%', 'height'=>'500px', 'class' => 'img')); ?>
                                  <?php if (strlen($SqlAplicationType['filepath'])>0 || $SqlAplicationType['filepath']!=NULL){ ?> </span>
					<span class="text-center"
					style="padding: 1px; padding-right: 25px; padding-left: 25px; background-color: rgba(150, 150, 150, 0.2); position: absolute; top: 93%; right: 47%;"><span
						style="font-size: 20px; color: #666"
						class="glyphicon glyphicon-floppy-save"></span> </span>

				</a>
                    <?php } ?>
                            </span>                
                        <?php endif; ?>                
                    <?php endforeach; ?>
                </div>
		</li>      
            <?php
            $i++;
        endforeach;
        ?>
    </ul>

</div>
<!--imagenes pequeñas-->
<?php foreach ($categorias as $cat) { ?>
    <div class="contenedores" id="carouselContent<?php echo $cat; ?>"
	aplicacion="<?php echo $cat; ?>"
	style="clear: both; float: left; width: 96%; margin-top: 1%; margin-left: 0.5%;">
	<div class="image_carousel<?php echo $cat; ?>">
		<div id="foo<?php echo $cat; ?>" class="col-md-12">
                <?php
                $i = 0;
                foreach ($SqlProductosPorAplicaciones as $SqlProductosPorAplicacion):
                    // var_dump($SqlProductosPorAplicacion);
                    if ($SqlProductosPorAplicacion['application_type_id'] == $cat) {
                        ?>    
                        <img class="img_producto imagenIndividual"
				aplicacion="<?php echo $SqlProductosPorAplicacion['application_type_id'] ?>"
				id_2='<?php echo $SqlProductosPorAplicacion['id_producto'] ?>'
				id="<?php echo 'prod' . $SqlProductosPorAplicacion['id_producto']; ?>"
				width="121" height="84" id=""
				src="<?php echo Yii::app()->request->baseUrl . $SqlProductosPorAplicacion['path']; ?>" />		  	               	  		    
                        <?php
                    }
                    $i++;
                endforeach;
                ?>
            </div>
	</div>
</div>
<?php } ?>

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

		<div class="contenedor-superior">
			<div class="imagenesMedianas"></div>
			<div class="textoTitulo"></div>
		</div>

		<div style="float: left; width: 50%; margin-left: 2%">
			<h2 id="resumenProducto" class="helvetica_neueregular"></h2>
		</div>

		<div id="barraTab">
			<nav class="navbar navbar-default" role="navigation"
				style="background-color: #e6e6e6; margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".botonDetalle"
						style="float: left; margin: 2%; width: 99%; background-color: grey">
						<span class="fuentes"><?php echo Yii::t('forms', 'Product details'); ?></span>
					</button>
				</div>
				<div
					class="collapse navbar-collapse navbar-ex3-collapse botonDetalle"
					style="width: 100%; height: auto; background-color: #e6e6e6; float: left; padding: 0">
					<ul id="menuDetalle" class="nav navbar-nav">

					</ul>

				</div>
			</nav>
		</div>

		<div id="contieneDetallesMenu"></div>

	</div>

</div>

<script>
      $(document).ready(function() {
        $('#foo0').carouFredSel({
            circular: false,
            infinite: false,
            auto: false,
            width: "100%",
            align: "left",
            prev: {button: "#foo2_prev",
                key: "left"},
            next: {button: "#foo2_next",
                key: "right"},
            pagination: "#foo2_pag",
        })
        $("#accordion1").awsAccordion({
        type: "horizontal",
        cssAttrsHor: {
            ulWidth: "responsive",
            liHeight: 480,
            liWidth: 30
        },
        startSlide:<?php echo $pag; ?>,
        openCloseHelper: {
            openIcon: "plus",
            closeIcon: "minus"
        },
        openOnebyOne: true,
        classTab: "small",
        slideOn: "click",
        autoPlay: false,
//      autoPlaySpeed:2
    })
    }
    );

    
  
</script>