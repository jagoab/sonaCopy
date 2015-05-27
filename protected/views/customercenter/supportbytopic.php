<?php
/* Include jQuery UI */
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl() . '/jui/css/base/jquery-ui.css');
?>

<style type="text/css" >

    .sectionfaqs .faqquestion {

        color: #0066A4;        
    }

    .sectionfaqs .faqanswer {

        color: #3e8f3e;        
    }

</style>
<style type="text/css" >

    .accordioncss3 section, .accordioncss3 .pointer, .accordioncss3 h1, .accordioncss3 .contenido {
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }
    .accordioncss3 {
        margin-bottom:30px;
        margin-top: 10px;
    }
    .accordioncss3 h1 {
        line-height:1.2;
        font-size:16px;
        background-color: #F4F4F4;
        margin:0;
        padding: 10px 10px 10px 30px;
        border-bottom: 1px #D0D0D0 solid;
        border-top: 1px #D0D0D0 solid;
        border-top-style: groove;
        border-bottom-style: groove;
        border-left: none;
        border-right: none;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
    }

    .accordioncss3 h1:hover{
        background-color: #A8CFF7;
        color: #000;
    }

    .accordioncss3 h1 a {
        color:black;
    }
    .accordioncss3 section {
        overflow:hidden;
    }
    .accordioncss3 p {
        padding: 0 10px;
        color:black;
    }

    .accordioncss3 .contenido {
        padding: 5px 30px 5px 30px;
        text-align: justify;
        font-size: 16px;
        max-height: 200px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .accordioncss3 .contenido p {
        padding: 10px 0px;
    }

    .accordioncss3 section.ac_hidden p:not(.pointer) {
        color: #333;
    }

    .accordioncss3 section.ac_hidden {
        height:44px;
    }
    .accordioncss3 .pointer {
        padding:0;
        margin:10px 0 0 20px;
        line-height:20px;
        width:13px;
        position:absolute;
    }
    .accordioncss3 section:not(.ac_hidden) h1 {
        background-color:#A8CFF7; 
    }

    .accordioncss3 section:not(.ac_hidden) .pointer {
        display:block;
        -webkit-transform:rotate(90deg);
        -moz-transform:rotate(90deg);
        -o-transform:rotate(90deg);
        transform:rotate(90deg);
        padding:0;
    }
    
</style>


<section class="sectionblock sectionfaqs container-fluid">

    <h1><?php echo @$text1->text; ?></h1>
         <hr style="border-color: #04B404!important">
     <h5><?php echo @$text2->text; ?></h5>
     
    <h3><?php echo @$text3->text; ?></h3>
    
    
    
        <br />

    <div id="faqsaccordion" class="accordioncss3">
        <?php

        foreach ($consulta as $row) {
            ?>
            <section id="item1" class="ac_hidden">
                <p class="pointer">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </p>
                <h1>
                    <p><?php echo @$row->name; ?></p>                        

                </h1>

                <div class="contenido">
                    <p><?php echo @$row->text; ?></p>

                </div>
            </section>
            <?php

        }
        ?>
    </div>
        
        
        
</section>


    <script type="text/javascript">

        $(document).ready(function() {
            $(".accordioncss3 section h1").click(function(e) {

                $(this).parents().siblings("section").addClass("ac_hidden");
                $(this).parents("section").removeClass("ac_hidden");

                e.preventDefault();
            });
        });

    </script>