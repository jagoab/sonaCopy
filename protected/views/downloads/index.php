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
<script>
    showall=false;
    language='<?php echo Yii::app()->language; ?>';
    
$( document ).ready(function() {
     $('.todos').hide();
     
      $("#english_results").click(function (){
  showall=true;
  $(this).hide();
  filtro(); 
    })
});

    $(function() {
        $('#file_type_select').change(function() {
             $( ".todos" ).fadeIn(600);
            filtro();
         
        })
        $('#product_type_select').change(function() {
             $( ".todos" ).fadeIn(600);
          $('.product').hide()
            $('.filter'+$(this).val()).show();
             if($(this).val()==0){ $('.product').show();}
            filtro();
        })
        $('#product_select').change(function() {
             $( ".todos" ).fadeIn(600);
            
            filtro();
        })
    });
    function filtro() {
        $('#search_error').hide();
        $('.todos').hide();
        mostrar=0;
        fts=$('#file_type_select').val()
        pts=$('#product_type_select').val()
        ps=$('#product_select').val()
        
        $('.todos').each(function() {
            
            if($(this).attr('language')==language || showall ){
           x = 0;
            zero=0;        
        //alert(pts);
            if ((fts == 0) || ($(this).attr('filter')==fts)) {
                x++;
                if(fts == 0)zero++;
                
            }
             if ((pts == 0) || ($(this).attr('product_type')==pts)) {
                
                x++;
                if(pts == 0)zero++;
            }
      
             if ((ps == 0) || ( $(this).attr('product'+ps)=='1')) {
              
               x++;
                    if(ps == 0)zero++;
            }
               
            if(x>=3){
                $(this).show();
                 mostrar++;
            }
            

        }    
    })

 if(mostrar<=0){
     $('#select_filter').hide();
                 $('#search_error').show();
            }


      if(fts==0 && pts==0 && ps==0){ 
   
         $('.todos').hide();
          $('#select_filter').show();
      }else {
        $('#select_filter').hide();  
      }
    
    }
   
</script> 
<style>.todos{display: none;}</style>
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
                                                                                 <li style="font-size:15px;" class=""><a href="<?php echo Yii::app()->request->baseUrl . '/' . Yii::app()->language .'/'.$menu2['url']; ?>"><?php echo $menu2['name'];?></a></li>

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
<div class="panel panel-default"style="">
  <div class="panel-heading">
       <div class=" row helvetica_condensed_lightRg">            
        <?php 
        //nombres de los archivos
        $files_name=array('is'=>'LED LIGHTING FOR INDUSTRIAL USE','cs'=>'LED LIGHTING FOR COMMERCIAL USE','cp'=>'COMPANY PROFILE');
            foreach ($files_name as $filename):
                $eng=true;
                    foreach ($guias as $guia): 
                        if($filename==$guia['name'] && Yii::app()->language==$guia['language'])
                           { 
                             $eng=false;                         
                         ?>
                          <div class="col-md-4">
                            
                             <img class="img-responsive"  src="<?php echo Yii::app()->request->baseUrl . "/images/descargas/".str_replace(" ",'_',$guia['name']).".png"; ?>" >                              
                             <div class="estiloBrochureDownload" > <a href="<?php echo Yii::app()->request->baseUrl . $guia['path']; ?>"> <?php echo $guia['name']; ?></a></div>
                          </div> 
                     <?php }
                    endforeach;
                    foreach ($guias as $guia):
                          if($filename==$guia['name'] && $guia['language']=='en' && $eng) { ?>
                               <div class="col-md-4">
                            
                             <img  class="img-responsive" src="<?php echo Yii::app()->request->baseUrl . "/images/descargas/".str_replace(" ",'_',$guia['name']).".png"; ?>" >                              
                             <div class="estiloBrochureDownload" > <a href="<?php echo Yii::app()->request->baseUrl . $guia['path']; ?>"> <?php echo $guia['name']; ?></a></div>
                          </div> 
                   <?php  } ?>
                      
               <?php endforeach;
            endforeach;
                   ?>      
       </div>
  </div>
  <div class="panel-body">
    <div class="row helvetica_neueregular">
    <div class="col-md-4">
        <label><?php echo Yii::t('forms', 'Files Type'); ?></label>
        <select  id="file_type_select">
            <option  value="0" selected="selected"><?php echo Yii::t('forms', 'All'); ?></option> 
            <?php foreach ($tipoArchivos as $tipoArchivo): ?>
                <option  value="<?php echo $tipoArchivo['id']; ?>"><?php echo $tipoArchivo['FileTypeName']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-4">
        <label><?php echo Yii::t('forms', 'Product Type'); ?></label>
        <select id="product_type_select">  
            <option  value="0" selected="selected" ><?php echo Yii::t('forms', 'All'); ?></option> 
            <?php foreach ($filtros as $filtro) {
                ?>            
                <option  value="<?php echo $filtro['id']; ?>"><?php echo Yii::t('forms', $filtro['name']); ?></option>        
            <?php } ?>      
        </select>
        
    </div>
    <div class="col-md-4">
        
        <label><?php echo Yii::t('forms', 'Product'); ?></label>
        <select  id="product_select"> 
            <option  value="0" selected="selected"><?php echo Yii::t('forms', 'All'); ?></option> 
            <?php
            foreach ($filtros as $filtro) {
                foreach ($filtro->products as $prod) {
                    ?>              
                    <option  class="product filter<?php echo $filtro['id']; ?>" value="<?php echo $prod['id']; ?>" ><?php echo Yii::t('forms', $prod['name']); ?></option>       
                <?php
                }
            }
            ?> 
        </select>
        
    </div>
</div>
  </div>
</div>



<br />
<table class="download helvetica_neueregular"  style="width: 100%;"><tr>
        <th class="tituloheaderDownload"><?php echo Yii::t('forms', '#'); ?></th>
        <th class="tituloheaderDownload"><?php echo Yii::t('forms', 'Files Type'); ?></th>
        <th class="tituloheaderDownload"><?php echo Yii::t('forms', 'Product Type'); ?></th>
        <th class="tituloheaderDownload"><?php echo Yii::t('forms', 'File'); ?></th>
        <th class="tituloheaderDownload"><?php echo Yii::t('forms', 'Language'); ?></th>
         <th class="tituloheaderDownload"><?php echo Yii::t('forms', 'Download'); ?></th>
         
        
<!--        <th class="tituloheaderDownload"><?php //echo Yii::t('forms', 'Model'); ?></th>-->
        <th class="tituloheaderDownload" colspan="1"></th>
    </tr>
    <?php
    $total = 1;
    foreach ($Files as $File):
        if($File['pathTypeFile']=='PDF'){
            $language=$File['language'];
            $image_file=Yii::app()->request->baseUrl . "/images/pdf-download.png";
        }elseif($File['pathTypeFile']=='IES') {
            $language=Yii::app()->language;
           $image_file=Yii::app()->request->baseUrl . "/images/ies.png"; 
        }
      
        ?>
    <?php $products= $lang = CHtml::listData(ProductFiles::model()->findAll('file='.$File['fileid']), 'id', 'product');
 
    /*Se hace un forech para cada producto relacionado con este archivo, el id del producto se guarda como un attributo del tr*/
    ?>
    <tr class="todos" fileid="<?php echo $File['fileid']; ?>" language="<?php echo $language ?>" filter='<?php echo $File['type']; ?>'<?php foreach ($products as $product){echo 'product'.$product.'="1"';} ?> product_type='<?php echo $File['Product_Type_id']; ?>'  style="border-bottom: 1px solid #c5c5c5; <?php if($language!=Yii::app()->language) echo 'background-color: #f0f0f0';?>">
            <td><?php echo $total; ?></td>           
            <td><?php echo $File['pathTypeFile']; ?></td>
            <td><?php echo $File['Product_Type']; ?></td>
           
            <td><?php echo $File['filename']; ?></td>
          
          <td><?php echo $File['language']; ?></td>                  
            <th style="width: 150px;" ><a href="<?php echo Yii::app()->request->baseUrl . $File['path']; ?>">
                    
                    <div style="margin-left: 60px; width: 32px;  height: 35px;"><img   src="<?php echo $image_file; ?>"  class="img-responsive" ></div></a>
                    </th>
                    

        </tr>        
    <?php $total = $total + 1; ?>
<?php endforeach; ?>




</table>

<div id="search_error" style="display: none;" class=" alert alert-danger text-center" ><?php echo Yii::t('forms','No results found for your search'); ?></div>
<div id="select_filter" class=" alert alert-success" style="background-color: " ><?php echo Yii::t('forms','Select a filter'); ?></div>
  <?php if(Yii::app()->language!='en'){?> <div class=" text-cnter "  style="margin-top: 50px;" ><span class="btn btn-primary" id="english_results">See English Results</span></div><?php }?>