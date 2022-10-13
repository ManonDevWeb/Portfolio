<?php

// Verification de l'existance du cookie
if (isset($_COOKIE['auth']) && !isset($_SESSION['connect'])){

    //variable
    $secret = htmlspecialchars($_COOKIE['auth']);

    //verification si le code secret est lié a un compte
    require('actions/connect.php');

    $req = $db->prepare('SELECT count(*) as numberAccount FROM netflixUsers WHERE secret = ?');
    $req->execute(array($secret));

    while ($user = $req->fetch()){

        if ($user['numberAccount'] == 1){

            $reqUser = $db->prepare('SELECT * FROM netflixUsers WHERE secret = ?');
            $reqUser->execute(array($secret));

            while ($userAccount = $reqUser->fetch()){
                
                $_SESSION['connect'] = 1;
				$_SESSION['email'] = $userAccount['email'];
            }
        }
    }

}

?>