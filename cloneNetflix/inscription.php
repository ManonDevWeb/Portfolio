<!--  PAGE D'INSCRIPTION  -->

	<?php
		session_start();

		require('log.php');

		if(isset($_SESSION['connect'])){
			header('location: login.php');
			exit();
		}

		if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_two'])) {

			require('actions/connect.php');

			//VARIABLES
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);
			$password_two = htmlspecialchars($_POST['password_two']);
		
			// PASSWORD = PASSWORD_TWO?
			if ($password != $password_two) {
				header('location: inscription.php?error=1&message=Vos mots de passe ne sont pas identiques.');
				exit();
			}

			//ADRESSE EMAIL NON VALIDE?
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header('location: inscription.php?error=1&message=Votre adresse mail est invalide.');
				exit();
			}

			//EMAIL DEJA UTILISE
			$req = $db->prepare("SELECT count(*) as numberEmail FROM netflixUsers WHERE email = ?");
			$req->execute(array($email));

			while($email_verification[] = $req->fetch()){

				if($email_verification['numberEmail'] != 0){

					header('location: inscription.php?error=1&message=Votre adresse email est déja utilisée par un autre utilisateur!');
					exit();
				}
			}
			
			//HASH (cryptage mdp)
			$secret = sha1($email).time();
			$secret = sha1($secret).time();

			//CHIFFRAGE DU MOT DE PASSE DANS LA DB
			$password = "aq1" . sha1($password. "123"). "25";

			// ENVOIE
			$req = $db->prepare("INSERT INTO user(email, password, secret) VALUES (?, ?, ?)");
			$req->execute(array($email, $password, $secret));

			header('location: inscription.php?sucess=1');
			exit();
		
		}

	?>

<!-- PARTIE FORMULAIRE D'INSCRIPTION -->

<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>

<body>

	<?php include('includes/navbar.php'); ?>
		
		<section>
			<div id="login-body">
				<h1>S'inscrire</h1>

				<?php 
					if(isset($_GET['error'])){
						if($_GET['message']) {
							echo '<div class="alert error">' . htmlspecialchars($_GET['message']) . '</div>';
						}
					}elseif(isset($_GET['success'])) {

						echo '<div class="alert success"> Vous êtes désormais inscrit. <a href="login.php">Connectez-vous</a>.';

					}
				?>

				<form method="post" action="inscription.php">
					<input type="email" name="email" placeholder="Votre adresse email" required />
					<input type="password" name="password" placeholder="Mot de passe" required />
					<input type="password" name="password_two" placeholder="Retapez votre mot de passe" required />
					<button type="submit">S'inscrire</button>
				</form>

				<p class="grey">Déjà sur Netflix ? <a href="login.php">Connectez-vous</a>.</p>
			</div>
		</section>

	<?php include('includes/footer.php'); ?>
</body>
</html>