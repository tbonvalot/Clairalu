<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8"/>
		<title>CLAIRALU Tolerie industriel Pesmes</title>
		<link rel="shortcut icon" type="image/x-icon" href="public/images/logo.png" />
		<link rel="stylesheet" href="public/css/styles.css"/>
		<script type='text/javascript' src='public/js/jquery-2.1.3.js'></script>
		<script type='text/javascript' src='public/js/sliderAuto.js'></script>

			<!--Gallerie Photo Réalisation-->
		<link rel="stylesheet" href="index_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
		<script src="index_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="index_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
	</head>

<!-- CORP DE PAGE -->
	<header>

	</header>
	<body id="big">
			<?php include "pages/header.php"; ?>

			<div>
					<?php
							$p=strtolower ($_GET['p']); //strtolower sert a passer l'url en miniscule
								if(isset($p) && preg_match("/^[a-z0-9]+$/i",$p)){ //Empeche de pouvoir taper des caracteres autres que a-z et 0-9
									if (file_exists("pages/$p.php")){
										include "pages/$p.php";
									}
									else{
										include "pages/404.php"; //Sinon affiche la page 404
									}
								}

								else{
									include "pages/404.php"; //Sinon affiche la page 404
								}
					?>
			</div>

			<footer>
<!-- PIED DE PAGE -->
				<?php include "pages/footer.php"; ?>
			</footer>
	</body>
</html>