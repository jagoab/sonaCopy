

    <style>

#img_video2{
display:inherit;
}
        @media (min-width: 1px)  {
            #video{
             height: 220px;   
            }

            #text_video{
                display: none;
            }
        }
        @media (min-width: 768px)  {
           #video{
             height: 320px;   
            }
            #text_video{
                 display:  initial;
            }
        }
        @media (min-width: 992px)  {
            #video{
            height: 320px;   
            } 
            #text_video{
                 display:  compact ;
            }
            #videodialog{
                height: 600px;
            }
        }
        @media (min-width: 1200px)  {
           #video{
            height: 420px;   
            }  
            #text_video{
                 display:  compact ;
            }
            #videodialog{
                height: 600px;
            }
        }
        #promotion{
            -webkit-animation: promoefect 5s infinite; /* Chrome, Safari, Opera */
        animation: promoefect 5s infinite;
        }
        .promotext{
           -webkit-animation: move 5s infinite; /* Chrome, Safari, Opera */
        animation: move 5s infinite; 
        font-weight: bold;
        font-size: 16px;
        }
        #textoa{
          float: left;
        }         
    .starpromo{
       font-size: 20px;
    }
    </style>

    <?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array('id' => 'videodialog',
        'options' => array('title' => 'Sonaray Special Promotion', 'autoOpen' => false, 'modal' => true, 'width' => "80%", 'min-height' => 400, 'position' => 'top',
            )));
    ?>

       <!--<iframe class="embed-responsive-item img-responsive text-center" id="video" width="85%"   style="margin: 0 auto;" src="//www.youtube.com/embed/eSjuBM268Yo" frameborder="0" allowfullscreen></iframe>-->

    <a href="<?php echo Yii::app()->baseUrl . "/products/index?idclick=123" ?>"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/banner-ep.jpg'); ?></a>
    <?php
    $this->endWidget();


    /* promocion usa */



  


    <!--------------------------------CAROUSEL------------------------------------------------------>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">              
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0"></li>
            <?php
            $j = 1;
            $i=0;
            $cantidad = count($imagenesSlider);
           foreach ($imagenesSlider as $banner):

                    ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>" <?php

                    ?>></li>
                        <?php
                    $j++;
                endforeach;
                ?>
        </ol>
        <div class="carousel-inner">
<?php if (@ strtolower(Yii::app()->session['flag']) == 'us') { ?>
            <div class="item active">
                       <div class="row" style="  ">   

    <div class="well well-lg text-center" style="  margin: 1px;">
        <div class="col-md-12 col-sm-12 col-lg-12  col-xs-12 text-center" style=""> 
    <!--        <span style="font-size: 35px; width: 100% " class="text-center">Discover How Sonaray is <b>Lighting Everyone's Dreams</b>  </span>
                <br/><br/>
            -->

            <div class="" id="img_videoxxx"  style=" ">
                     <a target="_blank" href="http://www.dascomamericas-info.com/LED/promo/index.html"> <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/banner-ep.jpg'); ?></a>

                  <!--<iframe class="embed-responsive-item img-responsive text-center" id="video" width="85%"   style="margin: 0 auto;" src="//www.youtube.com/embed/eSjuBM268Yo" frameborder="0" allowfullscreen></iframe>-->
    <!--              <div class=" carousel-caption " id="text_video" style="top:0;">
        <h3 style="background-color: rgba(80,80,80,.5)">Discover How Sonaray is <br/><b>Lighting Everyone's Dreams</b></h3>

      </div>-->

                </div>



            <!--<div style=""><span class="glyphicon glyphicon-facetime-video" style="font-size: 80px;"></span></div>-->

        </div>
        </div>

    </div>
                </div>
            <?php
            }
            foreach ($imagenesSlider as $banner) {
                if ($i == 0) {
                    $i++;
                    ?>
                    <div class="item ">
                        <a href="<?php echo $banner->link; ?>">	
                    <?php echo CHtml::image(Yii::app()->request->baseUrl . $banner->ruta, "", array('width' => '100%')); ?>
                        </a>
                    </div>
                        <?php } else { ?>
                    <div class="item">
                        <a href="<?php echo $banner->link; ?>">	
                    <?php echo CHtml::image(Yii::app()->request->baseUrl . $banner->ruta, "", array('width' => '100%')); ?>
                        </a>
                    </div>
        <?php }
    }
    ?>

        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a  class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!--fin del carousel--->

    <!-------------------------------------------------------------------------------------------------------------------------->
    <br />

    <div class="row">   
        <div class="col-md-4 col-sm-4 col-lg-4"> 
            <?php foreach ($casos as $caso): ?>       
                <?php echo CHtml::link($caso['text'], array($caso['path'])); ?>
            <?php endforeach; ?>
    <?php foreach ($imagenesCasos as $imagenesCaso): ?>
                <a href="<?php echo Yii::app()->request->baseUrl . "/" . $imagenesCaso['subPath'] ?>"><?php echo CHtml::image(Yii::app()->request->baseUrl . $imagenesCaso['path'], "", array('width' => '100%')); ?></a>
            <?php endforeach; ?>
        </div>

        <div class="col-md-4 col-sm-4 col-lg-4"> 
            <?php foreach ($descargas as $descarga): ?>       
                <?php echo CHtml::link($descarga['text'], array($descarga['path'])); ?>
            <?php endforeach; ?>
    <?php foreach ($imagenesDescargas as $imagenesDescarga): ?>
                <a href="<?php echo Yii::app()->request->baseUrl . "/" . $imagenesDescarga['subPath'] ?>"><?php echo CHtml::image(Yii::app()->request->baseUrl . $imagenesDescarga['path'], "", array('width' => '100%')); ?></a>
            <?php endforeach; ?>
        </div>

        <div class="col-md-4 col-sm-4 col-lg-4"> 
            <?php foreach ($destacados as $destacado): ?>       
                <?php echo CHtml::link($destacado['text'], array($destacado['path'])); ?>
            <?php endforeach; ?>
    <?php foreach ($featured_product as $imagenesCasosDescarga): ?>
                <a href="<?php echo Yii::app()->baseUrl . "/products/index?idclick=" . $imagenesCasosDescarga['id'] ?>"><?php echo CHtml::image(Yii::app()->request->baseUrl . $imagenesCasosDescarga['path'], "", array('width' => '80%', 'class' => 'img-thumbnail')); ?></a>
    <?php endforeach; ?>
        </div>


    </div>
    <script>
        $(function(){
            $('#video').click(function(){
                alert("aadssdasdasd");
            })

            $('#img_video').click(function(){
              $('#videodialog').dialog("open")
            })
        })
        </script>


