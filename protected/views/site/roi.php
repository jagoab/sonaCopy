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
        
         /* jssor slider bullet navigator skin 21 css */
                /*
                .jssorb21 div           (normal)
                .jssorb21 div:hover     (normal mouseover)
                .jssorb21 .av           (active)
                .jssorb21 .av:hover     (active mouseover)
                .jssorb21 .dn           (mousedown)
                */
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

.head_title {
	color: #999999;
	font-size: 36px;
	font-family:Arial, Helvetica, sans-serif;
        margin-left: 20px;
}
</style>

</head>
<body>    

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
                                                                                <li style="font-size:15px;" class=""><a href="<?php echo $menu2['url']; ?>"><?php echo $menu2['name'];?></a></li>

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
 <center>
  
      <title> ROI  Calculator</title>
	
    
<script language="JavaScript">
<!--
function SymError()
{
  return true;
}
window.onerror = SymError;
var SymRealWinOpen = window.open;
function SymWinOpen(url, name, attributes)
{
  return (new Object());
}
window.open = SymWinOpen;
//-->
</script>
<script type="text/JavaScript">
function page_load() {
	if (window.My_PageLoad != null) {
	    window.My_PageLoad()
	}
}
</script><script src="./roi_files/gsrs" d="1"></script></head>

<body bgcolor="#FFFFFF">

																												
										
<script language="javascript">
    function Calculate()
    {
        if (isValid(document.getElementById("txtHIDWatts").value) && isValid(document.getElementById("txtLEDWatts").value))
        {
            document.getElementById("lblPowerSaved").innerText = document.getElementById("txtHIDWatts").value - document.getElementById("txtLEDWatts").value
            
            //row 1 note added ChngdFixtures3 and 4
            if (isValid(document.getElementById("txtNmbrFixtures").value))
            {
                document.getElementById("lblTotalPowerSaved").innerText = document.getElementById("lblPowerSaved").innerText * document.getElementById("txtNmbrFixtures").value;
                document.getElementById("lblTotalKPowerSaved").innerText = document.getElementById("lblTotalPowerSaved").innerText / 1000;
                document.getElementById("lblTotalKPowerSaved2").innerText = document.getElementById("lblTotalKPowerSaved").innerText;
				document.getElementById("lblChngdFixtures").innerText = document.getElementById("txtNmbrFixtures").value;
				document.getElementById("lblChngdFixtures2").innerText = document.getElementById("lblChngdFixtures").innerText;
				document.getElementById("lblChngdFixtures3").innerText = document.getElementById("lblChngdFixtures").innerText;
				//document.getElementById("lblChngdFixtures4").innerText = document.getElementById("lblChngdFixtures").innerText;
            }

            //row 2
            if (isValid(document.getElementById("lblTotalKPowerSaved2").innerText))
            {
               if (isValid(document.getElementById("txtHours").value) && isValid(document.getElementById("txtDays").value) && isValid(document.getElementById("txtWeeks").value))
               {
                    var temp3 = document.getElementById("lblTotalKPowerSaved2").innerText * document.getElementById("txtHours").value * document.getElementById("txtDays").value * document.getElementById("txtWeeks").value;
                    document.getElementById("lblTotalYearlyKPowerSaved").innerText = temp3.toFixed(2);
                    document.getElementById("lblTotalYearlyKPowerSaved2").innerText = document.getElementById("lblTotalYearlyKPowerSaved").innerText;
                    var temp4 = document.getElementById("txtHours").value * document.getElementById("txtDays").value * document.getElementById("txtWeeks").value;
                    document.getElementById("lblTtlHrsUse").innerText = temp4.toFixed(2);
					var temp12 = document.getElementById("lblTotalYearlyKPowerSaved").innerText * 1.7 / 2000;
					document.getElementById("lblco2").innerText = temp12.toFixed(2);
                    if (temp4 != 0) 
                    {
                        document.getElementById("lblLifeOfLEDs").innerText = temp4
                    }
               }
            }
            
            //row 3
            if (isValid(document.getElementById("txtCostPerKWh").value))
            {
               var temp5 = document.getElementById("lblTotalYearlyKPowerSaved2").innerText * document.getElementById("txtCostPerKWh").value;
               document.getElementById("lblTotalYearlySavedCost").innerText = temp5.toFixed(2);
               document.getElementById("lblTotalYearlySavedCost2").innerText = document.getElementById("lblTotalYearlySavedCost").innerText;
               document.getElementById("lblTotalYearlySavedCost3").innerText = document.getElementById("lblTotalYearlySavedCost").innerText;
            }            
            
            //row 4
            if (isValid(document.getElementById("txtReplacedLEDLife").value))
            {
              var temp6 = document.getElementById("txtReplacedLEDLife").value / document.getElementById("lblTtlHrsUse").innerText * document.getElementById("lblTotalYearlySavedCost2").innerText 
              document.getElementById("lblReplacedLEDLife").innerText = document.getElementById("txtReplacedLEDLife").value; 
              document.getElementById("lblLifetimeSaving").innerText = temp6.toFixed(2);
              
              var temp8 = document.getElementById("txtReplacedLEDLife").value / document.getElementById("lblLifeOfLEDs").innerText 
              document.getElementById("lblLifeOfLEDs").innerText = temp8.toFixed(2);
			  document.getElementById("lblLifeOfLEDs2").innerText = temp8.toFixed(2);
              var temp12 = document.getElementById("lblco2").innerText * document.getElementById("lblLifeOfLEDs").innerText;
			  document.getElementById("lblLifeco2").innerText = temp12.toFixed(2);
            }
            
            //row 4.5
            if (isValid(document.getElementById("txtLEDPrice").value))
            {
                document.getElementById("lblLEDPrice").innerText = document.getElementById("txtLEDPrice").value
            	if (document.getElementById("lblTotalYearlySavedCost3").innerText != 0 )
            	{              		
              		var temp1 = document.getElementById("txtLEDPrice").value * document.getElementById("lblChngdFixtures").innerText / document.getElementById("lblTotalYearlySavedCost3").innerText;
              		document.getElementById("lblTotalYearlySimplePayback").innerText = temp1.toFixed(2);
            	}
            	else
            	{
            		document.getElementById("lblTotalYearlySimplePayback").innerText = 0;
            	}
            	//document.getElementById("lblTotalYearlySimplePayback2").innerText = document.getElementById("lblTotalYearlySimplePayback").innerText;
            	//document.getElementById("lblReplacedLEDLife").innerText = document.getElementById("txtReplacedLEDLife").value;
            	//if (document.getElementById("lblTotalYearlySimplePayback2").innerText != 0)
            	//{
            	//	var temp2 = 100 / document.getElementById("lblTotalYearlySimplePayback2").innerText;
            	//	document.getElementById("lblTotalYearlyROI").innerText = temp2.toFixed(2);
            	//}
            }
            
            //row 5 NOTE - corrected calculation error with quantity of LEDs costed
            if (isValid(document.getElementById("txtOrigFixtureLife").value) && (document.getElementById("txtOrigFixtureLife").value != 0)  && isValid(document.getElementById("txtOriLabor").value) && isValid(document.getElementById("txtOriPrice").value))
			// && isValid(document.getElementById("txtLEDLabor").value))
            {
            //alert(document.getElementById("lblReplacedLEDLife").innerText / document.getElementById("txtOrigFixtureLife").value )
            //alert(eval(document.getElementById("txtOriLabor").value) + eval(document.getElementById("txtOriPrice").value))
            //alert(document.getElementById("lblChngdFixtures").innerText)
            //alert(document.getElementById("lblReplacedLEDLife").innerText / document.getElementById("txtOrigFixtureLife").value * (document.getElementById("txtOriLabor").value + document.getElementById("txtOriPrice").value) * document.getElementById("lblChngdFixtures").innerText)
                var temp7 = (document.getElementById("lblReplacedLEDLife").innerText / document.getElementById("txtOrigFixtureLife").value * document.getElementById("lblChngdFixtures").innerText) * (eval(document.getElementById("txtOriLabor").value) + eval(document.getElementById("txtOriPrice").value));
				// - (document.getElementById("txtLEDLabor").value) * document.getElementById("lblChngdFixtures").innerText);
                document.getElementById("lblLifeTimeChangeoutSavings").innerText = temp7.toFixed(2);
                document.getElementById("lblLifeTimeChangeoutSavings2").innerText = document.getElementById("lblLifeTimeChangeoutSavings").innerText;
            }
            
            //row 6
            var temp9 = document.getElementById("lblLifeTimeChangeoutSavings2").innerText / document.getElementById("lblLifeOfLEDs").innerText;
            document.getElementById("lblTotalAmortizedReplacement").innerText = temp9.toFixed(2);
            //corrected temp10 by multiplying by bulbs replaced
            temp9 = eval(document.getElementById("lblTotalYearlySavedCost").innerText) + eval(document.getElementById("lblTotalAmortizedReplacement").innerText);
            document.getElementById("lblEnergyPlusReplacementCost").innerText = temp9.toFixed(2);
			var temp10 = document.getElementById("lblLEDPrice").innerText * document.getElementById("lblChngdFixtures").innerText / document.getElementById("lblEnergyPlusReplacementCost").innerText;
            document.getElementById("lblPaybackYears").innerText = temp10.toFixed(2);
			
            //row 6.5
            document.getElementById("lblPaybackYears2").innerText = temp10.toFixed(4);
            var temp11 = 100 / document.getElementById("lblPaybackYears2").innerText;
            document.getElementById("lblROI").innerText = temp11.toFixed(2);
                    }        
    }
    function Other_Calculate()
    {
        if (isValid(document.getElementById("txtHIDWatts").value) && isValid(document.getElementById("txtLEDWatts").value))
        {
            document.getElementById("lblPowerSaved").textContent = document.getElementById("txtHIDWatts").value - document.getElementById("txtLEDWatts").value
            //row 1 note added ChngdFixtures3 and 4
            if (isValid(document.getElementById("txtNmbrFixtures").value))
            {
                document.getElementById("lblTotalPowerSaved").textContent = document.getElementById("lblPowerSaved").textContent * document.getElementById("txtNmbrFixtures").value;
                document.getElementById("lblTotalKPowerSaved").textContent = document.getElementById("lblTotalPowerSaved").textContent / 1000;
                document.getElementById("lblTotalKPowerSaved2").textContent = document.getElementById("lblTotalKPowerSaved").textContent;
				document.getElementById("lblChngdFixtures").textContent = document.getElementById("txtNmbrFixtures").value;
				document.getElementById("lblChngdFixtures2").textContent = document.getElementById("lblChngdFixtures").textContent;
				document.getElementById("lblChngdFixtures3").textContent = document.getElementById("lblChngdFixtures").textContent;
			 	//document.getElementById("lblChngdFixtures4").textContent = document.getElementById("lblChngdFixtures").textContent;
            }
            //row 2
            if (isValid(document.getElementById("lblTotalKPowerSaved2").textContent))
            {
               if (isValid(document.getElementById("txtHours").value) && isValid(document.getElementById("txtDays").value) && isValid(document.getElementById("txtWeeks").value))
               {
                    var temp3 = document.getElementById("lblTotalKPowerSaved2").textContent * document.getElementById("txtHours").value * document.getElementById("txtDays").value * document.getElementById("txtWeeks").value;
                    document.getElementById("lblTotalYearlyKPowerSaved").textContent = temp3.toFixed(2);
                    document.getElementById("lblTotalYearlyKPowerSaved2").textContent = document.getElementById("lblTotalYearlyKPowerSaved").textContent;
                    var temp4 = document.getElementById("txtHours").value * document.getElementById("txtDays").value * document.getElementById("txtWeeks").value;
                    document.getElementById("lblTtlHrsUse").textContent = temp4.toFixed(2);
					var temp12 = document.getElementById("lblTotalYearlyKPowerSaved").textContent * 1.7 / 2000;
					document.getElementById("lblco2").textContent = temp12.toFixed(2);
                    if (temp4 != 0) 
                    {
                        document.getElementById("lblLifeOfLEDs").textContent = temp4
                    }
               }
            }
            //row 3
            if (isValid(document.getElementById("txtCostPerKWh").value))
            {
               var temp5 = document.getElementById("lblTotalYearlyKPowerSaved2").textContent * document.getElementById("txtCostPerKWh").value;
               document.getElementById("lblTotalYearlySavedCost").textContent = temp5.toFixed(2);
               document.getElementById("lblTotalYearlySavedCost2").textContent = document.getElementById("lblTotalYearlySavedCost").textContent;
               document.getElementById("lblTotalYearlySavedCost3").textContent = document.getElementById("lblTotalYearlySavedCost").textContent;
            }            
            //row 4
            if (isValid(document.getElementById("txtReplacedLEDLife").value))
            {
              var temp6 = document.getElementById("txtReplacedLEDLife").value / document.getElementById("lblTtlHrsUse").textContent * document.getElementById("lblTotalYearlySavedCost2").textContent 
              document.getElementById("lblReplacedLEDLife").textContent = document.getElementById("txtReplacedLEDLife").value; 
              document.getElementById("lblLifetimeSaving").textContent = temp6.toFixed(2);
              
              var temp8 = document.getElementById("txtReplacedLEDLife").value / document.getElementById("lblLifeOfLEDs").textContent 
              document.getElementById("lblLifeOfLEDs").textContent = temp8.toFixed(2);
			  document.getElementById("lblLifeOfLEDs2").textContent = temp8.toFixed(2);
			  var temp12 = document.getElementById("lblco2").textContent * document.getElementById("lblLifeOfLEDs").textContent;
			  document.getElementById("lblLifeco2").textContent = temp12.toFixed(2);
            }
            //row 4.5
            if (isValid(document.getElementById("txtLEDPrice").value))
            {
                document.getElementById("lblLEDPrice").textContent = document.getElementById("txtLEDPrice").value
            	if (document.getElementById("lblTotalYearlySavedCost3").textContent != 0 )
            	{              		
              		var temp1 = document.getElementById("txtLEDPrice").value * document.getElementById("lblChngdFixtures").textContent / document.getElementById("lblTotalYearlySavedCost3").textContent;
              		document.getElementById("lblTotalYearlySimplePayback").textContent = temp1.toFixed(2);
            	}
            	else
            	{
            		document.getElementById("lblTotalYearlySimplePayback").textContent = 0;
            	}
            	//document.getElementById("lblTotalYearlySimplePayback2").textContent = document.getElementById("lblTotalYearlySimplePayback").textContent;
            	//document.getElementById("lblReplacedLEDLife").textContent = document.getElementById("txtReplacedLEDLife").value;
            	//if (document.getElementById("lblTotalYearlySimplePayback2").textContent != 0)
            	//{
            	//	var temp2 = 100 / document.getElementById("lblTotalYearlySimplePayback2").textContent;
            	//	document.getElementById("lblTotalYearlyROI").textContent = temp2.toFixed(2);
            	//}
            }
            //row 5 NOTE - corrected calculation error with quantity of LEDs costed
            if (isValid(document.getElementById("txtOrigFixtureLife").value) && (document.getElementById("txtOrigFixtureLife").value != 0)  && isValid(document.getElementById("txtOriLabor").value) && isValid(document.getElementById("txtOriPrice").value))
			// && isValid(document.getElementById("txtLEDLabor").value))
            {
            //alert(document.getElementById("lblReplacedLEDLife").textContent / document.getElementById("txtOrigFixtureLife").value )
            //alert(eval(document.getElementById("txtOriLabor").value) + eval(document.getElementById("txtOriPrice").value))
            //alert(document.getElementById("lblChngdFixtures").textContent)
            //alert(document.getElementById("lblReplacedLEDLife").textContent / document.getElementById("txtOrigFixtureLife").value * (document.getElementById("txtOriLabor").value + document.getElementById("txtOriPrice").value) * document.getElementById("lblChngdFixtures").textContent)
                var temp7 = (document.getElementById("lblReplacedLEDLife").textContent / document.getElementById("txtOrigFixtureLife").value * document.getElementById("lblChngdFixtures").textContent) * (eval(document.getElementById("txtOriLabor").value) + eval(document.getElementById("txtOriPrice").value));
				// - (document.getElementById("txtLEDLabor").value) * document.getElementById("lblChngdFixtures").textContent);
                document.getElementById("lblLifeTimeChangeoutSavings").textContent = temp7.toFixed(2);
                document.getElementById("lblLifeTimeChangeoutSavings2").textContent = document.getElementById("lblLifeTimeChangeoutSavings").textContent;
            }
            //row 6
            var temp9 = document.getElementById("lblLifeTimeChangeoutSavings2").textContent / document.getElementById("lblLifeOfLEDs").textContent;
            document.getElementById("lblTotalAmortizedReplacement").textContent = temp9.toFixed(2);
            //corrected temp10 with multiplier of replaced bulbs
            temp9 = eval(document.getElementById("lblTotalYearlySavedCost").textContent) + eval(document.getElementById("lblTotalAmortizedReplacement").textContent);
            document.getElementById("lblEnergyPlusReplacementCost").textContent = temp9.toFixed(2);
			var temp10 = document.getElementById("lblLEDPrice").textContent * document.getElementById("lblChngdFixtures").textContent / document.getElementById("lblEnergyPlusReplacementCost").textContent;
            document.getElementById("lblPaybackYears").textContent = temp10.toFixed(2);
			 
            //row 6.5
            document.getElementById("lblPaybackYears2").textContent = temp10.toFixed(4);
            var temp11 = 100 / document.getElementById("lblPaybackYears2").textContent;
            document.getElementById("lblROI").textContent = temp11.toFixed(2);
            
        }        
    }
    
    function isValid(nInput)
    {
        if (nInput == "" || nInput < 0)
        {
            return false;
        }
        else 
        {
            return isNumeric(nInput);
        }
    }
    
    function isNumeric(sText)
    {
       var ValidChars = "0123456789.";
       var IsNumber=true;
       var Char;

       for (i = 0; i < sText.length && IsNumber == true; i++) 
          { 
          Char = sText.charAt(i); 
          if (ValidChars.indexOf(Char) == -1) 
             {
             IsNumber = false;
             }
          }
       return IsNumber;
    }
    
    function UpdateChanges()
{
    if (navigator.appName == "Netscape" || navigator.appName == "Safari")
    {
        Other_Calculate();
    }
    else
    {
        Calculate();
    }
}
</script>
        <div style="background:#F9F9F9; width:90%; height:20%">
            <br />
  <h2 align="left" class="head_title">ROI Calculator</h2>
  <br />
</div>
      <table bgcolor="#ffffff" border="0" width="960" align="center" cellpadding="0" cellspacing="0">
	<tbody><tr>
		<td align="center" class="main">
		
		<table width="94%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td height="110" width="4" align="left">&nbsp;
		</td>
		<td width="38%" valign="middle" align="center" class="bold">
	<table cellpadding="0" cellspacing="0" width="978" height="102">
		<!-- MSTableType="layout" -->
		<tbody><tr>
	<td valign="top" height="102" width="978">
	<p align="center">
		
		</tr>
	</tbody></table>

			<font face="Arial">
			<small>An Estimating Tool to Compare Payback of LED Lighting</small></font><p>
		<font face="Arial" size="1"><span style="font-weight: 400"><strong>Please read:</strong> This program requires Javascript on your computer. This calculator gives payback time, the annual and life-time power, CO<sub>2</sub> AND maintenance savings when you upgrade your lighting to LEDs.&nbsp; 
			Enter the wattage and life for both the old and new fixture and the billing rate per kilowatt-hour.&nbsp;  
			Be sure to include all costs, i.e. labor, parts, inventory, travel, fuel, equipment, etc.&nbsp; Light levels are NOT calculated or suggested.</span></font></p></td>
		<td class="main" align="left"><div align="justify"><br>
			<br>
			</div></td>
		</tr>
		</tbody></table>
		<br> 

		<table border="0" width="96%" align="center" cellpadding="0" cellspacing="0">
	 <tbody><tr><td class="main" align="center">
		<strong>Start</strong> with the <strong><em>Tab</em></strong> key, fill in shaded cells and/or step forward with 
			<strong><em>Tab</em></strong>; step backward with <strong><em>Shift Tab</em></strong>.
			<br><br>
    <table cellpadding="0" cellspacing="0" border="0" bordercolor="#404040">
		<tbody><tr>
			<td height="24" colspan="9" class="main" align="left"><strong>
1. Compute kilowatts (kW) saved by upgrading to LED technology.</strong></td>
		</tr>
		<tr align="center">
			<td class="main">Original Fixture<br>Wattage + Ballast</td>
			<td class="main">&nbsp;</td>
			<td class="main">LED<br>Wattage</td>
			<td class="main">&nbsp;</td>
			<td class="main">Watts Saved<br>per Fixture</td>
			<td class="main">&nbsp;</td>
			<td class="main"># of Fixtures<br>to Replace</td>
			<td class="main">&nbsp;</td>
			<td class="main">Watts Saved</td>
		</tr>
		<tr align="center">
			<td class="main">
			<input name="txtHIDWatts" type="text" value="280" id="txtHIDWatts" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:40px;">
			Watts</td>
			<td class="large" align="center">-</td>
			<td class="main">
			<input name="txtLEDWatts" type="text" value="120" id="txtLEDWatts" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:40px;">&nbsp;Watts</td>
			<td class="large" align="center">=</td>
			<td class="main"><span id="lblPowerSaved" class="out">-22</span>&nbsp;Watts</td>
			<td class="large" align="center">×</td>
			<td class="main">
			<input name="txtNmbrFixtures" type="text" value="50" id="txtNmbrFixtures" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:40px;">
			</td>
			<td class="large" align="center">=</td>
			<td valign="top" rowspan="2">
			<table width="90" align="center" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td align="center" class="main"><span id="lblTotalPowerSaved" class="out">-1100</span>&nbsp;W <br>
			<span id="lblTotalKPowerSaved" class="out">-1.1</span>&nbsp; kW
		</td></tr>
			</tbody></table>
			</td>
		</tr>
		<tr><td align="center" colspan="8" class="main">&nbsp;</td>
		</tr>
		<tr>
		<td height="24" colspan="9" class="main" valign="middle" align="left">
			<strong>
2. Compute kilowatt hours (kWh) saved and tons of CO<sub>2</sub> production saved annually.</strong></td>
		</tr>
		<tr>
			<td class="main" align="center">Kilowatts<br>Saved</td>
			<td class="main">&nbsp;</td>
			<td class="main" align="center">Hours of Use<br>per Day</td>
			<td class="main">&nbsp;</td>
			<td class="main" align="center">Days of Use<br>per Week</td>
			<td class="main">&nbsp;</td>
			<td class="main" align="center">Weeks of Use<br>per Year</td>
			<td class="main">&nbsp;</td>
			<td class="main" align="center">Annual savings:</td>
		</tr>
		<tr>
			<td class="main" align="center">
			<span id="lblTotalKPowerSaved2" class="out">-1.1</span>&nbsp;kW</td>
			<td class="large" align="center">×</td>
			<td class="main" align="center">
			<input name="txtHours" type="text" value="10" id="txtHours" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88; width:28px;"></td>
			<td class="large" align="center">×</td>
			<td class="main" align="center">
			<input name="txtDays" type="text" value="7" id="txtDays" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88; width:18px;"></td>
			<td class="large" align="center">×</td>
			<td class="main" align="center">
			<input name="txtWeeks" type="text" value="52" id="txtWeeks" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88; width:24px;"></td>
			<td class="large" align="center">=</td>
			<td class="main" align="center"><span id="lblTotalYearlyKPowerSaved" class="out">29120.00</span>&nbsp;kWh</td>
		</tr><tr>
		<td height="20" colspan="7" align="right" class="main">&nbsp;</td>
		<td class="large" align="center">=</td>
		<td class="main" align="center"><span id="lblco2" class="out">24.75</span>&nbsp;Tons</td>
		</tr>
		<tr>
			<td height="24" colspan="7" class="main" align="left">
			<strong>
3. Compute power cost savings per year.</strong></td>
				<td colspan="2" rowspan="5" class="main" align="center" valign="top">
		of CO<sub>2</sub> production *<br>
		
		</td>
		</tr>
		<tr align="center">
			<td class="main">kWh<br>Saved per Year</td>
			<td class="main">&nbsp;</td>
			<td class="main">Cost Per kWh <br>(typically $0.10)</td>
			<td class="main">&nbsp;</td>
			<td class="main" align="left">&nbsp;&nbsp;&nbsp;Annual<br>&nbsp;&nbsp;&nbsp;Savings</td>
			<td colspan="2" class="main">&nbsp;</td>
					</tr>
		<tr align="center">
			<td class="main"><span id="lblTotalYearlyKPowerSaved2" class="out">29120.00</span></td>
			<td class="large" align="center">×</td>
			<td class="main"><big>$</big><input name="txtCostPerKWh" type="text" value="0.10" id="txtCostPerKWh" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:40px;">
			</td>
			<td class="large" align="center">=</td>
			<td class="main" align="left">$<span id="lblTotalYearlySavedCost" class="out">2912.00</span>&nbsp;</td>
			<td colspan="2" class="main">&nbsp;</td>
		</tr>
		<tr>
		<td height="20" colspan="7" class="main">&nbsp;</td></tr>
		<tr>
			<td height="24" colspan="7" class="main" align="left">
			<strong>
4. Compute power cost savings and saved CO<sub>2</sub> production over life of the LEDs.</strong></td>
		</tr>
		<tr align="center">
			<td class="main">Replacement<br>LED Life (hours)</td>
			<td class="main">&nbsp;</td>
			<td class="main">Hours per Year<br>Usage</td>
			<td class="main">&nbsp;</td>
			<td class="main" valign="bottom">LED Est. Life</td>
			<td class="main">&nbsp;</td>
			<td class="main">Annual Power<br>Cost Savings</td>
			<td class="main">&nbsp;</td>
			<td class="main">Lifetime Power<br>Cost Savings</td>
		</tr>
		<tr align="center">
			<td class="main">
			<input name="txtReplacedLEDLife" type="text" value="50000" id="txtReplacedLEDLife" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:50px;">
			&nbsp;Hr</td>
			<td class="large">&nbsp;÷&nbsp;</td>
			<td class="main"><span id="lblTtlHrsUse" class="out">3640.00</span>&nbsp;hr/yr</td>
			<td class="large">&nbsp;=&nbsp;</td>
			<td class="main"><span id="lblLifeOfLEDs" class="out">16.03</span>&nbsp;Years</td>
			<td class="large">&nbsp;×&nbsp;</td>
			<td class="main"><big>$</big><span id="lblTotalYearlySavedCost2" class="out">2912.00</span></td>
			<td class="large">&nbsp;=&nbsp;</td>
			<td class="main"><big>$</big><span id="lblLifetimeSaving" class="out">56000.00</span></td>
		</tr>
		<tr><td height="25" valign="bottom" colspan="7" class="main" align="right">LED lifetime CO<sub>2</sub> savings * &nbsp;</td>
		<td class="large" align="center">=</td>
		<td class="main" align="center"><span id="lblLifeco2" class="out">396.74</span>&nbsp;Tons
</td></tr>
		<tr><td height="35" valign="bottom" colspan="9" class="main" align="left"><strong>
5. Compute payback from power cost savings.</strong></td></tr>	
		<tr><td height="50" valign="bottom" colspan="9">
		<table align="center" border="1" cellpadding="4" cellspacing="0">
			<tbody><tr><td class="small" align="left">NOTE:&nbsp; 
			<strong>LED Cost</strong> is the amount used to calculate payback.&nbsp;  It may be the direct cost if retrofit, or may be the cost<br>
			difference 
			between the LED and the fixture it substitutes if a new installation.&nbsp; This entry should include all installation costs.<br>
			</td></tr>
			</tbody></table></td></tr>
			<tr><td colspan="5">&nbsp;</td>
			<td colspan="2" align="left" class="small">&nbsp;&nbsp;(Enter <strong>LED Cost</strong>)</td>
			<td colspan="2">&nbsp;</td>
			</tr>
		<tr align="center">
			<td rowspan="2" class="main" align="center">Payback From<br>Power Savings</td>
			<td rowspan="2" class="large">=</td>
			<td style="border-bottom:solid 1px #000000;" colspan="3" class="main" align="center">LED Cost, or Diff. between LED &amp; Original</td>
			<td rowspan="2" class="large">=</td>
			<td style="border-bottom:solid 1px #000000;" class="main">
			$
			<input name="txtLEDPrice" type="text" value="220" id="txtLEDPrice" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:center; background-color:#ccff88;width:35px;"><big>×</big>&nbsp;<span id="lblChngdFixtures" class="out">50</span>&nbsp;Lights
			</td>
			<td rowspan="2" class="large">=</td>
			<td rowspan="2" align="left" class="main"><span id="lblTotalYearlySimplePayback" class="out">3.78</span>&nbsp;Years</td>
			</tr>
		<tr align="center">
			<td colspan="3" class="main" align="center">Power Cost Savings per Year</td>
			<td class="main" align="center"><big>$</big><span id="lblTotalYearlySavedCost3" class="out">2912.00</span></td>
			</tr>
			
		<tr align="center">
		<td height="28" colspan="9" class="main">&nbsp;</td></tr>
		<!--
		<tr align="center">
			<td rowspan="2" colspan="2" class="main" align="center" style="border-right:solid 1px #000000;">Return&nbsp;on <br>Investment &nbsp;(ROI)<br>from power savings</td>
			<td rowspan="2" class="main" align="center" style="border-right:solid 1px #000000;">100% is based on<br>full repayment<br> in first year</td>
			<td rowspan="2" class="large">=</td>
			<td style="border-bottom:solid 1px #000000;" class="main" align="center">100</td>
			<td rowspan="2" class="large">=</td>
			<td style="border-bottom:solid 1px #000000;" class="main" align="center">100</td>
			<td rowspan="2" class="large" align="center">=</td>
			<td rowspan="2" align="left" class="main"><span id="lblTotalYearlyROI" class="out">Label</span> %&nbsp;</td>
		</tr>
		
		<tr align="center">
			<td class="main" align="center">Simple Payback</td>
			<td class="main" align="center"><span id="lblTotalYearlySimplePayback2" class="out">Label</span>&nbsp;</td>
			</tr>	
			
		<tr>
			<td height="30" colspan="9">&nbsp;</td>
		</tr>
		-->
			<tr>
			<td height="24" colspan="9" class="main" align="left">
			<strong>
6. Compute maintenance savings during life of the LEDs. &nbsp; Include labor, equipment, fuel, parts, inventory, etc. </strong></td>
		</tr>
		<tr>
			<td colspan="9" class="main">				
			        <table cellpadding="0" cellspacing="0" border="0">
				    <tbody><tr align="center">
					    <td height="38" class="main" width="85">LED<br>Life (hours)</td>
					    <td class="main" width="15">&nbsp;</td>
					    <td class="main" width="100">Original Fixture<br>Life (hours)</td>
					     <td class="main" width="15">&nbsp;</td>
					    <td class="main" width="56"># of<br>Fixtures</td><td class="main" width="15">&nbsp;</td>
					    <td class="main" width="110">Maint Labor<br>Original Fixture</td>
					    <td class="main" width="15">&nbsp;</td>
					    <td class="main" width="110">Maint. Parts<br>Original Fixture</td>
					    <!--
						<td class="main" width="15">&nbsp;</td>
						<td class="main" width="120">Cost to Install<br>New LED Fixture</td>
					    <td class="main" width="15">&nbsp;</td>
					    <td class="main" width="56"># of<br>Fixtures</td>
						-->
					    <td class="main" width="15">&nbsp;</td>
					    <td class="main" width="90">Lifetime<br>Savings</td>					
				    </tr>
	<!-- note original code had error, it did not multiply quantity of LEDs to subtract from savings			-->
				    <tr align="center">
					    <td class="main"><span id="lblReplacedLEDLife" class="out">70000</span></td>
					    <td class="large">÷</td>
					    <td class="main"><input name="txtOrigFixtureLife" type="text" value="12000" id="txtOrigFixtureLife" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:45px;"></td>
					     <td class="large">×</td>
					    <td class="main"><span id="lblChngdFixtures2" class="out">50</span></td>
						<td class="large">×</td>
					    <td class="main"><big>(&nbsp;$</big>&nbsp;<input name="txtOriLabor" type="text" value="100" id="txtOriLabor" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:30px;"></td>
					    <td class="large">+</td>
					    <td class="main"><big>$</big>&nbsp;<input name="txtOriPrice" type="text" value="25" id="txtOriPrice" onblur="JAVASCRIPT:UpdateChanges();" style="text-align:right; background-color:#ccff88;width:30px;"><big>&nbsp;)</big></td>
					    <td class="large">=</td>
					    <td class="main"><big>$</big><span id="lblLifeTimeChangeoutSavings" class="out">36458.33</span></td>
				    </tr>
			    </tbody></table>					
			</td>
		</tr>
		<tr>
			<td height="55" valign="bottom" colspan="9" class="main" align="left">
			<strong>
7. Compute the amortized changeout cost savings per year.</strong></td>
		</tr>
		<tr align="center">
			<td colspan="3" valign="bottom" class="main">Total Lifetime Replacement Cost Savings</td>
			<td></td>
			<td colspan="3" valign="bottom" class="main">Lifetime of Replacement Fixture</td>
			<td>	</td>
			<td class="main">Total Amortized<br>Savings per Year</td>
		</tr>
		<tr align="center">
			<td colspan="3" class="main"><big>$</big><span id="lblLifeTimeChangeoutSavings2" class="out">36458.33</span></td>
			<td class="large" align="center">÷</td>
			<td colspan="3" class="main"><span id="lblLifeOfLEDs2" class="out">16.03</span>&nbsp;Years&nbsp;</td>
			<td class="large" align="center">=</td>
			<td class="main"><big>$</big><span id="lblTotalAmortizedReplacement" class="out">2274.38</span></td>
			</tr>
		<tr>
			<td height="35" colspan="9">&nbsp;</td>
		</tr>		
		<tr align="center">
			<td rowspan="2" valign="middle" colspan="2" class="main">Simple Payback on<br>Power Consumption<br><strong>And</strong>&nbsp;Maintenance&nbsp;Costs</td>
			<td rowspan="2" class="large">=<br><br></td>
			<td colspan="2" style="border-bottom:solid 1px #000000;" class="main" align="center">Initial Cost of Upgrade</td>
			<td rowspan="2" class="large" align="center">=<br><br></td>
			<td align="center" style="border-bottom:solid 1px #000000;" class="large">$ <span id="lblLEDPrice" class="out">220</span>
			&nbsp;×&nbsp;<span id="lblChngdFixtures3" class="out">50</span>
			</td>
			<td rowspan="2" class="large" align="center">=<br><br></td>
			<td rowspan="2" class="main" align="left"><span id="lblPaybackYears" class="out">2.12</span>&nbsp; Years<br><br></td>
		</tr>
		<tr align="center">
			<td colspan="2" class="main" align="center">Power <big>+</big> Maintenance<br>Cost Savings</td>
			<td valign="top" class="large" align="center">$ <span id="lblEnergyPlusReplacementCost" class="out">5186.38</span></td>
		</tr>		
		<tr>
			<td height="20" colspan="9">&nbsp;<p align="center">
			<font color="#FF0000">USE THE BACK BUTTON TO RETURN TO THE MAIN SITE</font></p></td>
		</tr>
		<!--
		<tr align="center">
			<td rowspan="2" colspan="3" class="large" align="right">ROI &nbsp;=&nbsp;&nbsp;</td>
			<td  colspan="2" class="main" align="center">100</td>
			<td rowspan="2" class="large" align="center">=</td>
			<td class="main" align="center">100</td>
			<td rowspan="2" class="large" align="center">=</td>
			<td rowspan="2" class="main" align="left">&nbsp;<span id="lblROI" class="out">Label</span> %</td>
		</tr>
		<tr align="center">
			<td style="border-top:solid 1px #000000;" colspan="2" class="main" align="center">Simple Payback</td>
			<td valign="top" style="border-top:solid 1px #000000;" class="main" align="center">&nbsp;<span id="lblPaybackYears2" class="out">Label</span></td>
			</tr>	
			-->
		</tbody></table>
    
   <script language="javascript">
UpdateChanges();
</script>
			
						        </td>
						    </tr>
						</tbody></table>
						<br><table align="center" border="0" cellpadding="0" cellspacing="0">
		</table><br>
		<br>
	  <!-- Start of StatCounter Code -->
<script type="text/javascript">                                                             
var sc_project=4532385; 
var sc_invisible=0; 
var sc_partition=34; 
var sc_click_stat=1; 
var sc_security="b564eec5"; 
</script>

<script type="text/javascript" src="./roi_files/counter.js"></script>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <small>&nbsp;©2010 Patrick Mullins</small>
				<br><br>
				</td>						
			</tr>
		</tbody></table>			
	

<iframe id="Solution Real_1" t="BA" style="width: 1px; height: 1px; display: none;"></iframe><iframe id="Solution Real_1BA" src="./roi_files/gscf.html" t="BA" style="width: 1px; height: 1px; display: none;"></iframe>



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
<br/><br/><br/><br/>    

<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>

<style>
    .errorMessage{
        font-weight: bold;
        color: #c82a2a;
    }
    </style>
    <br/> <br/> <br/> <br/> <br/>
  

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false,                                  //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
     <script type="text/javascript">

var num = 50; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});
</script>
