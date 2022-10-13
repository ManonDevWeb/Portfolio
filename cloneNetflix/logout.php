<!-- PARTIE DECONNEXION DE LA PLATEFORME -->

<?php
    session_start(); // INITIALISE LA SESSION
    session_unset(); //DESACTIVE LA SESSION
    session_destroy(); //DETRUIT LA SESSION
    setcookie('auth', '', time()-1, '/', null, false, true); //DESTRUCTION DU COOKIE POUR POUVOIR SE DECONNECTER DE LA SESSION
    // Dans setcookie les parametres /, null, false et true sont des paramètres de sécurité

    header ('location: login.php');
    exit();
?>