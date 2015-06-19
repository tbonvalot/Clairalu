<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8"/>
		<title>CLAIRALU Tolerie industriel Pesmes</title>
		<link rel="shortcut icon" type="image/x-icon" href="public/images/logo.jpg" />
		<link rel="stylesheet" href="public/css/styles.css"/>
		<script type='text/javascript' src='public/js/jquery-2.1.3.js'></script>
		<script type='text/javascript' src='public/js/sliderAuto.js'></script>
	</head>

<!-- CORP DE PAGE -->
	<header>

	</header>
	<body id="big">
		<div id="blocPage">
			<?php include "pages/header.html"; ?>

			<div id="frontRight" >
					<?php
							$p=strtolower ($_GET['p']); //strtolower sert a passer l'url en miniscule
								if(isset($p) && preg_match("/^[a-z0-9]+$/i",$p)){ //Empeche de pouvoir taper des caracteres autres que a-z et 0-9
									if (file_exists("pages/$p.html")){
										include "pages/$p.html";
									}
									else{
										include "pages/404.html"; //Sinon affiche la page 404
									}
								}

								else{
									include "pages/404.html"; //Sinon affiche la page 404
								}
					?>
			</div>

			<footer>
<!-- PIED DE PAGE -->
				<?php include "pages/footer.html"; ?>
			</footer>
		</div>
	</body>
</html>