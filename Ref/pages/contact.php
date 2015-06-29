<div class="corpPage" >
				<?php
					session_start();
				?>

				<?php if(array_key_exists('errors', $_SESSION)): ?> <!--Si elle existe dans la session-->
					<article id="messageError">
							<?= implode('<br>', $_SESSION['errors']); ?><!--affiche les erreurs a l'users-->
							<?php unset($_SESSION['errors']); endif; ?><!--Enleve les erreurs lors de l'actualisation de la page-->
					</article>

				<?php if(array_key_exists('succes', $_SESSION)): ?> <!--Si elle existe dans la session-->
					<article id="messageSucces">
							<p>Votre message a bien été envoyé ! </p> <!--Message de succes du mail-->
					</article>
				<?php endif; ?>


							<form id="formContact" method="POST" action="envoi.php">
										<label for="nom">Nom :</label>
										<input required type="text" name="nom" id="nom"  value=<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ""; ?> >

										<label for="prenom" >Prénom :</label><input required type="text" name="prenom" id="prenom" value=<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ""; ?> >

										<label for="mail" >Email :</label>
										<input required type="email" name="mail" id="mail" type="email" value=<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ""; ?> >
										

										<label for="message" >Message :</label>
										<textarea required type="text" name="message" id="message" ><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ""; ?></textarea></p>

										<p id="boutonCenterContact" ><button id="boutonContact">Envoyer</button></p>	
							</form>

				<?php //efface les champs si aucunes erreurs
					unset($_SESSION['inputs']); 
					unset($_SESSION['succes']); 
					unset($_SESSION['errors']);
				?>
</div>