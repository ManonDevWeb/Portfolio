<header>
	<nav>
		<div class="gauche">
		  <img src="img/logo.png" alt="logo" height="40">
		  
		  <?php if (!isset($_SESSION)){ ?>
		  <div class="onglets">
		  <p><a href="accueil.php">Accueil</a></p>
		  <p><a href="serie.php">Séries</a></p>
		  <p><a href="film.php">Films</a></p>
		  </div>
		</div>

		
		<div class="droite">
		  <p><i class="fas fa-bell"></i></p>
		  <p>Mon compte</p>
		  <p><a href="logout.php">Déconnexion</a></p>
		</div>
		<?php } ?>
	  </nav>
</header>
