<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="icon" type="image/png" href="images/favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon"
	href="images/favicon.ico" />
<META NAME="AUTHOR" CONTENT="Guillermo Enrique,Daniel Ruiz">
<META NAME="REPLY-TO"
	CONTENT="gsanchez1687@gmail.com, Daruizg@gmail.com">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta
	content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
	name="viewport">
<meta name="language" content="en" />
<!--[if lt IE 8]>
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
                        <![endif]-->
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<div style="display: inline;">
	<img height="1" width="1" style="border-style: none;" alt=""
		src="//www.googleadservices.com/pagead/conversion/1001610015/?label=_sXQCLGl9gkQn7bN3QM&amp;guid=ON&amp;script=0" />
</div>

<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
</noscript>
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
	height: 300px;
	background: #666666;
	margin-bottom: 20px;
}

html, body, .banner, .container {
	height: 100%;
	text-align: center;
}

.menu {
	background: #000000;
	color: #000000;
	z-index: 1;
	padding: .5em;
	position: absolute; //
	top: 400px;
	width: 100%;
}

.fixed {
	position: fixed;
	top: 0;
}
</style>
<div class="menu" style="background: #CCCCCC;">

	<table width="100%" height="100px" border="0">
		<tr>
			<td valign="middle">

				<div class="container">
					<nav role="navigation" class="navbar navbar-inverse">
						<div class="navbar-header">

							<button type="button" data-target="#navbarCollapse"
								data-toggle="collapse" class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>

							<a href="#" class="navbar-brand"
								style="font-family: Arial, Helvetica, sans-serif; font-size: 1px;">
								<img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/sonaray_small.png"
								alt="a cute kitten">
							</a>
						</div>

						<div id="navbarCollapse" class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.php"
									style="color: #666666; font-weight: bold;">HOME</a></li>
								<li class="dropdown"><a data-toggle="dropdown"
									class="dropdown-toggle" href="#"
									style="color: #666666; font-weight: bold;">PRODUCT <b
										class="caret"></b></a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="#" style="font-weight: bold;">HighBay</a></li>
										<li><a href="#" style="font-weight: bold;">Flood Ligth</a></li>
										<li><a href="#" style="font-weight: bold;">Flood Bar</a></li>
										<li><a href="#" style="font-weight: bold;"> tubes & Paneis</a></li>
										<li><a href="#" style="font-weight: bold;"> Downlight</a></li>
										<li><a href="#" style="font-weight: bold;"> StreetLight</a></li>
									</ul></li>
								<li><a href="about.php"
									style="color: #666666; font-weight: bold;">SOLUTIONS</a></li>
								<li class="dropdown"><a data-toggle="dropdown"
									class="dropdown-toggle" href="#"
									style="color: #666666; font-weight: bold;">SERVICE <b
										class="caret"></b></a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="#" style="font-weight: bold;">Avantages</a></li>
										<li><a href="#" style="font-weight: bold;">FAQ</a></li>
										<li><a href="roi.php" style="font-weight: bold;">ROI Calcultor</a></li>
										<li><a href="#" style="font-weight: bold;">Retrofit</a></li>
										<li><a href="DownloadCenter.html" target="_blank"
											style="font-weight: bold;">Download Center</a></li>
										<li><a href="#" style="font-weight: bold;">Newsletter</a></li>
									</ul></li>
								<li><a href="#" style="color: #666666; font-weight: bold;">WHERE
										TO BUY</a></li>
								<li><a href="#" style="color: #666666; font-weight: bold;">DEALER
										AREA</a></li>

								<li style="background: #FFFFFF" class="dropdown"><a
									data-toggle="dropdown" class="dropdown-toggle" href="#"
									style="color: #666666; font-weight: bold;">ABOUT US<b
										class="caret"></b></a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="about.php" style="font-weight: bold;">Mission
												Statement</a></li>
										<li><a href="about.php" style="font-weight: bold;">Press
												Releases</a></li>
										<li><a href="about.php" style="font-weight: bold;">Contact</a></li>
										<li><a href="about.php" style="font-weight: bold;">Carrer</a></li>
										<li><a
											href="http://www.dascomla.com/sonaray-toolbox-test/site/login"
											target="_blank" style="font-weight: bold;">Partner</a></li>

									</ul></li>
							</ul>

						</div>
					</nav>

				</div>
			</td>
		</tr>
	</table>

</div>
                                    <?php echo $content; ?>

                                    <div class="clear"></div>

<div id="footer">
	<p
		style="font-size: 11px; font-family: Helvetica-Condensed-Light; color: #9c9aa0; width: 100%"
		class="text-center">

                                            <?php if (@ strtolower(Yii::app()->session['flag']) != 'de') { ?>
                                                © 2012-2014 DASCOM Americas SBI LLC
                                                <?php
																																													if (Yii::app()->language == 'en') echo utf8_decode("All rights reserved.");
																																													if (Yii::app()->language == 'es') echo utf8_decode("Todos los derechos reservados.");
																																													if (Yii::app()->language == 'po') echo utf8_decode("Todos os direitos reservados.");
																																												}
																																												else
																																												{
																																													// only for german
																																													?>                          

                                                
	
	
	
	
	
	<div
		style="color: #999; padding: 10px; border-top: solid 1px #ccc; border-bottom: solid 1px #ccc; margin-bottom: 15px;">
		<span style="padding: 10px; cursor: pointer;" id="impressum">
			Impressum </span>  |                                          
                                                    <?php
																																													foreach ($menus as $menu)
																																													{
																																														if ($menu['parent'] == 0)
																																														{
																																															$total_sub = count($menu['menu']);
																																															// para saber si tiene hijos
																																															?>
                                                            <span
			style="padding: 10px;"><?php echo CHtml::link(ucfirst($menu['name']), array($menu['url']), array('role' => "menuitem", "style" => "color:#999")); ?></span> |
                                                            <?php
																																														}
																																													}
																																													?>
                                                    <div
			style="display: none;">
                                                        <?php
																																													/* ventana modal para impressum (solo para aleman) */
																																													$this->beginWidget('zii.widgets.jui.CJuiDialog', array ('id' => 'Impressumdialog',
																																															// additional javascript options for the dialog plugin
																																															'options' => array ('position' => 'center','title' => 'Impressum','autoOpen' => false,'minWidth' => 600,'modal' => true ) ));
																																													?>


                                                        <div
				class="text-left"
				style="font-size: 12px; padding-left: 30px; line-height: 18px;">

				DASCOM Europe GmbH<br /> Heuweg 3<br /> 89079 Ulm<br /> <br />
				Telefon: +49 (0) 731 - 20 75 - 0<br /> Telefax: +49 (0) 731 - 20 75
				- 100<br /> email: info.de@dascom.com<br /> Diese E-Mail-Adresse ist
				gegen Spambots geschützt! Sie müssen JavaScript aktivieren, damit
				Sie sie sehen können.<br /> Internet: <a
					href="http://www.dascom.com">www.dascom.com</a> <br /> <br /> <b>Geschäftsführer:</b><br />
				Holger Benke<br /> <br /> Registergericht: Amtsgericht Ulm<br />
				Registernummer: HRB 723920<br /> USt.-IdNr.: DE264947359<br />
				WEEE-Reg-Nr.: DE 39196009<br /> <br /> <br /> <b>Haftungshinweis:</b><br />
				Trotz sorgfältiger inhaltlicher Kontrolle übernimmt DASCOM keine
				Haftung für die Inhalte externer Links. Für den Inhalt der
				verlinkten Seiten sind ausschließlich deren Betreiber
				verantwortlich. <br /> <br />
			</div>
                                                        <?php
																																													$this->endWidget('zii.widgets.jui.CJuiDialog');
																																													?>
                                                    </div>
		<span style="padding: 10px;"> <a style="color: #999;" target="_blank"
			href="<?php echo Yii::app()->baseUrl ?>/downloads/AGB_Deutsch_2013-07.pdf">
				AGB </a>
		</span> <br />
	</div>
	<div
		style="font-size: 11px; font-family: Helvetica-Condensed-Light; color: #9c9aa0; width: 100%"
		class="text-center">

		Copyright © 2014 DASCOM Europe GmbH <br /> Alle Firmen- und
		Produktnamen sind Marken der jeweiligen Eigentümer.
	</div>

                                                <?php
																																												}
																																												?>
                                        </p>
</div>

<!-- footer -->

</div>
<!-- page -->

<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script>
                            $('.carousel').carousel({
                                interval: 4500
                            })

                            $('.carousel').mouseover(function() {
                                $(this).carousel('pause');
                            }).mouseleave(function() {

                                // $(this).carousel('cycle')
                            });
                            $('.dropdown-toggle').dropdown();

                            $(function() {
                                $("#impressum").click(function() {
                                    $("#Impressumdialog").dialog("open");
                                })
                            })
                                </script>


</body>
</html>

