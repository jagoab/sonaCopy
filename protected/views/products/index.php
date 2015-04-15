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
		background-color:#FFFFFF;
            position: absolute;
            
            left: 0;
            width: 100%;
            height: 51px;
			
        }
        .navbar-wrapper > .container {
            padding: 0;
        }

        @media all and (max-width: 768px ){
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
        height:300px;
        background: #666666;
        margin-bottom: 20px;
    }
    
     html, body, .banner, .container {
        height:100%;
        text-align: center;
    }
    
    .menu {
    background: #000000;
    color: #000000;
    z-index:1;
    padding:.5em;
    position:absolute;
    //top:400px;
    width:100%;
}
.fixed {
    position:fixed;
    top:0;
}
</style>

</head>

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
            prev: {button: "#foo2_prev",
                key: "left"},
            next: {button: "#foo2_next",
                key: "right"},
            pagination: "#foo2_pag",
        });

       
        $('span').css('width', '');

        /*var valores = $('.'+valorLista+'> span').each(function(key,value){
         
         valor = value;
         llave = key;
         
         });*/
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

          

            for(var i=0;i<respuesta.imagenMediana.length;i++){
                    if(i==0){
                    //rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
                    rutaImagenMediana = respuesta.rutaBase+respuesta.imagenMediana[i].path;
                    html = '<div><img id="'+i+'" src = "'+rutaImagenMediana+'" /></div>';
                    $(".imagenesMedianas").append(html);
                    }
            };

            if(respuesta.descripcion[0] != null)
                    $("#resumenProducto").append(respuesta.descripcion[0].text);

            for(var i=0;i<respuesta.imagenPequena.length;i++){
                    //rutaImagenZoom = respuesta.rutaBase+'/images/productos/categoria/'+respuesta.imagenZoom[i].path;
                    rutaImagenMediana = respuesta.rutaBase+respuesta.imagenMediana[i].path;
                    rutaImagenPequena = respuesta.rutaBase+respuesta.imagenPequena[i].path;						
                    html = '<div style="clear:both;float:left;height:auto;margin:0;padding:0;margin-top:7.1%"><img style="float:left;padding:0;margin:0;border:0" src = "'+rutaImagenPequena+'" ></div>';
                    $("#resumenProducto").append(html);
            };


            $(".tituloProducto").append(respuesta.nombreProducto.name);



            if(respuesta.pestanasDetalles.length == 0){
                    $("#barraTab").hide();
                    }
            else{
                    $("#barraTab").show();
                    }

            for(var i=0;i<respuesta.pestanasDetalles.length;i++){
                    /*if(idProducto != 10){*/
                    html = "<li class=\"enlaceBotontab"+i+"\" style=\"width: auto;text-align: center;background-color: "+ (i==0?'#e6e6e6;':'#a4a4a4;') + (i == (respuesta.pestanasDetalles.length - 1)? '': 'border-right: solid 1px #ffffff') +"; font-size:12px\" id='liEspec'>";
                    html += "<a class=\"enlaceBoton\" id=\"tab"+i+"\" style=\"color: "+ (i==0?'black;':'none;') +"text-decoration: none\" id=\"linkE\" href=\"javascript:cambio('"+respuesta.pestanasDetalles[i].name+"','tab"+i+"')\">"+(respuesta.pestanasDetalles[i].category == 5?respuesta.pestanasDetalles[i].text:respuesta.pestanasDetalles[i].name);
                    html += "</a>";
                    html += "</li>";
                    $("#menuDetalle").append(html);

                    if(respuesta.pestanasDetalles[i].category != 8 && respuesta.pestanasDetalles[i].category != 9){


                            html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"display: block;margin: auto; text-align:left;font-size:12px;clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':';display:none;')+"\">";

                            html += "<div style=\"clear:both;float:left;width:50%;\">"+respuesta.pestanasDetalles[i].text+"</div>";



                            for(var k = 0;k<respuesta.imagenesDetalles.length;k++){

                                            if(respuesta.imagenesDetalles[k].category == respuesta.pestanasDetalles[i].category){
                                                    html += "<div style=\""+(respuesta.imagenesDetalles[k].category == 5?'clear:both;':'')+"float:left;width:50%;margin-top:0%\"><img src=\""+respuesta.rutaBase+respuesta.imagenesDetalles[k].path+"\"></div>";
                                            }

                                    }
                            html += "</div>";


                    }else{
                            if(respuesta.pestanasDetalles[i].category == 8){
                            html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"font-size:12px;clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':';display:none;')+"\">";
if(respuesta.pathDescargas.length>0){                            
for(var j=0;j<respuesta.pathDescargas.length;j++){

                                    html += "<div style=\""+(j==0?'clear:both':'')+";float:left;margin-top:1%;margin-left:2%\"><a  href=\""+respuesta.rutaBase+respuesta.pathDescargas[j].path+"\"><img src=\""+respuesta.rutaBase+respuesta.pathDescargas[j].description+"\"><div style=\"float:left;padding-left:1%\">"+respuesta.pathDescargas[j].name+"</div></a></div>";

                            }
                            }else {
                            html+='<div>No downloads For this product</div>'
                            }
                            html += "</div>";
                            }

                            if(respuesta.pestanasDetalles[i].category == 9){
                                    html = "<div class=\"tab\" id=\""+respuesta.pestanasDetalles[i].name+"\" style=\"clear:both;float:left;border: 2px solid #b4b4b4;padding-bottom:2%;width: 100%;padding-top:2%;padding-left:2%;height: auto"+(i==0?'':';display:none;')+"\">";
                                    for(var j=0;j<respuesta.pathVideos.length;j++){

                                            html += "<div style=\""+(j==0?'clear:both':'')+";float:left;margin-top:1%;margin-left:2%\"><a href=\""+respuesta.pathVideos[j].path+"\"><img src=\""+respuesta.rutaBase+respuesta.pathVideos[j].pathTypeFile+"\"><div style=\"float:left;padding-left:9%\">"+respuesta.pathVideos[j].name+"</div></a></div>";

                                    }
                                    html += "</div>";
                                    }
                                    
                                   
                    }


                    $("#contieneDetallesMenu").append(html);
                    }



            //$("#espec").append(respuesta.caracteristica[0].text);

            $("#contenedorDetalle").fadeIn();
            $('html,body').animate({
            scrollTop: $("#contenedorDetalle").offset().top
        }, 1000);

    });


    //setTimeout('CloudZoom.quickStart();', 2000);

    if(idioma == 'es'){
            $('#barraTab').css('width','74.5%');
    }

    }


function cambio(res,id)
{

	var contenedor = $("#contieneDetallesMenu > .tab");

	for(var i=0;i<contenedor.length;i++){
        if((contenedor[i].attributes.id.value).replace(" ","").toString() == (res.replace(" ","")).toString()){
        	$('#'+res).fadeIn();
            }
        else{
        	
        		$('#'+contenedor[i].attributes.id.value).hide();
            }
	}

	var enlaces = $('.enlaceBoton');
	for(var i=0;i<enlaces.length;i++){
			if(enlaces[i].attributes.id.value == id){
				$('.enlaceBoton'+id).css('background-color','#e6e6e6');
				$('#'+id).css('color','black');
			}else{
				$('.enlaceBoton'+enlaces[i].attributes.id.value).css('background-color','#a4a4a4');
				$('#'+enlaces[i].attributes.id.value).css('color','white');
			}
		}
	

}
$(function () {
$('#pestana0').trigger('click');    


 $('.img_producto').click(function() {
if($(this).attr('id_2')!=idclick){
    idclick=$(this).attr('id_2');
            cargaAjax($(this).attr('id_2'), $(this).attr('idx'))
}
        })
        
        <?php if ($idclick!=null) {?>
       
       
             cargaAjax(<?php echo $idclick; ?>,<?php echo $idclick; ?>)  
       <?php  }?>

})
</script>
<div class="menu" style="background: #CCCCCC; ">
    <table width="100%" height="100%" border="0" >
    <tr>
        <td  valign="middle">
	
        <div class="container">
    <nav role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header" >
            
    		 <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
            <a href="#" class="navbar-brand" style=" font-family: Arial, Helvetica, sans-serif; font-size: 1px; "> <img
                    src="<?php echo Yii::app()->request->baseUrl; ?>/images/sonaray_small.png"/></a>
        </div>
	
        <?php
                                $sql = "SELECT * FROM mainmenu Mainmenu WHERE Mainmenu.active = 1 AND Mainmenu.language =  '" . Yii::app()->language . "' ORDER BY Mainmenu.weight ASC";
                                $MenuPadres = Yii::app()->db->createCommand($sql)->queryAll();

                                $menus = array();
                                $i = 0;
                                foreach ($MenuPadres as $MenuPadre) {//mostrar y comparar menu de primer nivel
                                    $MenuPadre['menu'] = array();
                                    $idpadre = $MenuPadre['id'];
                                    if ($MenuPadre['parent'] == 0) {
                                        foreach ($MenuPadres as $MenuPadre2) {//mostrar y comparar menu de segundo nivel
                                            $MenuPadre2['menu'] = array();
                                            if ($MenuPadre2['parent'] == $idpadre) {
                                                foreach ($MenuPadres as $MenuPadre3) {//mostrar y comparar menu de tercer nivel
                                                    if ($MenuPadre3['parent'] == $MenuPadre2['id']) {
                                                        $MenuPadre2['menu'][] = $MenuPadre3;
                                                    }
                                                }
                                                $MenuPadre['menu'][] = $MenuPadre2;
                                            }
                                        }
                                        $i++;
                                    }
                                    //  var_dump($MenuPadre); echo '<br/><br/><br/><br/>';
                                    $menus[] = $MenuPadre;
                                }
                                $total = $i;
                                ?>
        
        
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                                                    <?php
                                                    $contador=1;
                                                    foreach ($menus as $menu) {
                                                        if ($menu['parent'] == 0) {
                                                            $total_sub = count($menu['menu']);
                                                            if ($total_sub <= 0) { //para saber si tiene hijos
                                                              
                                                                ?>
                                                                    <?php if ($contador ==1) { ?>
                                                                        <li  style="font-weight: bold; "><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
                                                                    <?php 
                                                                    $contador++;
                                                                    }else{ ?> 
                                                                        <li style=" font-weight: bold;"><?php echo CHtml::link($menu['name'], array($menu['url']), array('role' => "menuitem")); ?></li>
                                                                     <?php  } ?> 
                                                            <?php } else { ?>
                                                                <li class="dropdown" style="color: #000000; font-weight: bold;">
                                                                    <a style="font-size:15px;"  href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu['name'] ?> <b class="caret"></b>
                                                                    </a>

                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <?php
                                                                        foreach ($menu['menu'] as $menu2) {
                                                                            $total_sub = count($menu2['menu']);
                                                                            // echo $total_sub;
                                                                            if ($total_sub <= 0) {
                                                                                ?>
                                                                                                         <!--<li><a href="<?php //echo $menu2['url'];   ?>"><?php //echo $menu2['name'];   ?></a></li>-->
                                                                                <li style="font-size:15px;" class=""><?php echo CHtml::link($menu2['name'], array($menu2['url'])); ?></li>

                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                <li class="dropdown">
                                                                                    <a href="#"><?php echo $menu2['name']; ?></a>                                                             

                                                                                </li>                                                                 
                                                                                <?php
                                                                            }//if 
                                                                        }//foreach
                                                                        ?>
                                                                    </ul>
                                                                </li>
                                                                <?php
                                                            }// fin del if
                                                        }
                                                    }
                                                    ?>    
                                                </ul>
        
        </div>
    </nav>
	<div>
</td>
  </tr>
</table>
    </div>
            <style>
.container {
	padding-right: 0px !important;
	padding-left: 0px !important;
}
</style>
<br/><br/><br/><br/>  
  <br/><br/><br/><br/>  
<div id="accordion1">

       <ul><?php $i = 0; $j = 1; ?>
        <?php // foreach ($TiposProductos as $tipo): 
//            $ruta1 = $tipo['rutaImagen'][0]->path;
//            $ruta2 = $tipo['rutaImagen'][1]->path;
//            $ruta1 = Yii::app()->baseUrl . $ruta1;
//            $ruta2 = Yii::app()->baseUrl . $ruta2;
            $categorias=array();
        foreach ($pt as $pt1): 

if (@ (strtolower(Yii::app()->session['flag']) == 'us' && $pt1['id']!=8 && $pt1['id']!=4) || strtolower(Yii::app()->session['flag']) != 'us') { 
           if (@ (strtolower(Yii::app()->session['flag']) == 'al' && $pt1['id']!=8 && $pt1['id']!=4 && $pt1['id']!=3) || strtolower(Yii::app()->session['flag']) != 'al') {
                 $categorias[]=$pt1['id'];?>

            <li class="pestaLed" id="pestana<?php echo $i ?>" onclick="activarCarosel('<?php echo $pt1['id']; ?>','foo<?php echo $pt1['id']; ?>','lista<?php echo $i; ?>','pestana<?php echo $i ?>',<?php echo $pt1['id']; ?>)" >
                <h1 id="pestana<?php echo $i ?>"><?php echo $pt1["name"]; ?></h1>
                <div class="lista<?php echo $i; ?>">

                    <span style="padding: 0;height: auto;">
                        <div class="imagenesCarrousel" style="clear:both;float:left;width:100%;padding-left: 1.4%;">
                            <?php  echo CHtml::image( Yii::app()->baseUrl.'/images/accordion/'. Yii::app()->language ."/".$pt1['id'].'_top.jpg', 'alt', array('style' => 'height:auto;width:94%;padding-right:1.5%;padding-top:1.5%')); ?>
                        </div>
                        <div class="textoInterno" style="clear:both;float:left;height: auto;padding-left: 2%; padding-right: 6%; padding-top: 1%;margin-right:2%;font-size: 14px;color:#9c9aa0; text-align: justify;">
                            <?php foreach ($pt1["productsTypesTexts"] as $ptt): 
                                echo $ptt["description"];
                             ?>
                               
                                <?php  endforeach;?>
                        </div>
                        <div style=" width: 910px;" id="smImagenSlide">
                             <?php  echo CHtml::image( Yii::app()->baseUrl.'/images/accordion/'.Yii::app()->language ."/".$pt1['id'].'_bottom.jpg', 'alt', array('style' => 'height:auto;width:94%;padding-right:20%;padding-top:1.5%')); ?>
                
                        </div>
                    </span>
                </div>
            </li>
            <?php $i++;
            $j++;
            
            }
            } ?>
<?php  endforeach; ?>
    </ul>
</div>

        <?php $i=0;?>
        <?php $j=1;


?>

        <div>
        <?php foreach ($categorias as $cat){ 
                       ?>
            <div class="contenedores"  id="carouselContent<?php echo $cat; ?>" type="<?php echo $cat; ?>" style="clear:both;float:left; width: 100%; margin-top:1%;margin-left:0.5%;">
                <div class="image_carousel<?php echo $cat; ?>">
                    <div id="foo<?php echo $cat; ?>" class="col-md-12" >
                        <?php  
                        $i = 0;
                        foreach ($imgs as $img):
                           // var_dump($SqlProductosPorAplicacion);
                            if($img['type_id']==$cat){
                            ?>    
                            <img class="img_producto" type="<?php echo $img['id_producto'] ?>" id_2='<?php echo $img['id_producto'] ?>' idx="<?php echo  $img['id_producto']; ?>"   width="121" height="84"  src="<?php echo Yii::app()->request->baseUrl . $img['path']; ?>" />		  	               	  		    
                            <?php    }
                            $i++;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

									
					
					
        <div style="clear:both;float:left;width: 100%;position:relative;">
            <div style="float:left">
                <a class="prev" style="float: left" id="foo2_prev" href="#"><span>prev</span></a>
            </div>
            <div style="width: 88%;float:left">
                <div class="pagination" id="foo2_pag"></div>
            </div>
            <div style="float:left">
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

        <div style="float:left;width: 50%;margin-left: 2%">
            <h2 class="helvetica_neueregular" id="resumenProducto"</h2>
        </div>

        <div id="barraTab">
            <nav class="navbar navbar-default" role="navigation" style="background-color: #FFFFFF;">     
                <div class="navbar-header">
<!--                    <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target=".botonDetalle" >
                        <span class="fuentes"><?php //echo Yii::t('forms','Product details'); ?></span>
                    </button>-->
                </div>
                <!--collapse navbar-collapse navbar-ex3-collapse botonDetalle-->
<!--                style=" height: auto; background-color: #e6e6e6; float: left; padding: 0"-->
                <div>
                    <ul id="menuDetalle" class="nav navbar-nav"></ul>

                </div>
            </nav>
        </div>

        <div class="helvetica_neueregular" id="contieneDetallesMenu"></div>

    </div>

</div>

<script>
    $("#accordion1").awsAccordion({
        type: "horizontal",
        cssAttrsHor: {
            ulWidth: "responsive",
            liHeight: 480,
            liWidth: 30
        },
        startSlide: 1,
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
 </script>

<script type="text/javascript">
$(document).ready(function(){
 $('#foo0').carouFredSel({
			circular: false,
			infinite: false,
        		auto    : false,
			width   : "100%",
			align   : "left",
			prev    : { button  : "#foo2_prev",
	   			  key     : "left"},
			next    : { button  : "#foo2_next",
			 	  key     : "right"},
				  pagination  : "#foo2_pag",
  			})}
);

</script>




