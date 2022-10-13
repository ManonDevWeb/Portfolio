<!-- PAGE DE CONNEXION A LA PLATEFORME  -->
	
	<?php
		session_start();

		require('log.php');

		if(!empty($_POST['email']) && !empty($_POST['password'])) {

			require('actions/connect.php');

			// VARIABLES
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);

			// ADRESSE EMAIL CORRECTE
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

				header('location: login.php?error=1&message=Votre email est invalide!');
				exit();
			}
			
			// CHIFFRAGE DU MOT DE PASSE
			$password = "aq1" . sha1($password. "123"). "25";

			//EMAIL DEJA UTILISE
			$req = $db->prepare("SELECT count(*) as numberEmail FROM netflixUsers WHERE email = ?");
			$req->execute(array($email));

			while($email_verification = $req->fetch()){
				if($email_verification['numberEmail'] != 1){
					header('location: login.php?error=1&message=Impossible de vous authentifier correctement.');
					exit();
				}
			}

			// CONNEXION
			$req = $db->prepare("SELECT * FROM netflixUsers WHERE email = ?");
			$req->execute(array($email));

			while($user = $req->fetch()){
				if($password == $user['password']){

					$_SESSION['connect'] = 1;
					$_SESSION['email'] = $user['email'];

					// si le bouton 'se souvenir de moi' est coché : création d'un cookie
					if(isset($_POST['auto'])){
						setcookie('auth', $user['secret'], time() + 364*24*3600, '/', null, false, true);
					}

				}else {
					header('location: login.php?error=1&message=Impossible de vous authentifier correctement.');
					exit();
				} 
			}

		}

	?>

<!-- PARTIE FORMULAIRE DE CONNEXION HTML -->

<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>

	<body>

	<?php include('includes/navbar.php'); ?>
	
		<section>
			<div id="login-body">

			<?php
				if (isset($_SESSION['connect'])) { 
					header ('location:accueil.php');
					?>

			<?php	} else { ?>
						<h1>S'identifier</h1>

						<?php
							if(isset($_GET['error'])){
								if($_GET['message']) {
									echo '<div class="alert error">' . htmlspecialchars($_GET['message']) . '</div>';
							}
						}

						?>

						<form method="post" action="login.php">
							<input type="email" name="email" placeholder="Votre adresse email" required />
							<input type="password" name="password" placeholder="Mot de passe" required />
							<button type="submit">S'identifier</button>
							<label id="option"><input type="checkbox" name="auto" checked />Se souvenir de moi</label>
						</form>
					

						<p class="grey">Première visite sur Netflix ? <a href="inscription.php">Inscrivez-vous</a>.</p>
						<?php } ?>
			</div>
		</section>

	<?php include('includes/footer.php'); ?>
</body>
</html>