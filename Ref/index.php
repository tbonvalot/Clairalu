<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8"/>
		<title>Portfolio de Mathieu BOUTER</title>
		<link rel="shortcut icon" type="image/x-icon" href="public/images/icon.png" />
		<link rel="stylesheet" href="public/css/styles.css"/>
	</head>

<!-- CORP DE PAGE -->
	<header>

	</header>
	<body id="big">
		<div id="blocPage">
			<?php include "pages/menu.html"; ?>

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

			</footer>
		</div>
	</body>
</html>