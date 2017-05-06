<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('pseudo', '');
setcookie('password', '');

echo '<div id="ok"><center>Vous allez être redirigé vers l accueil</center></div>
<script type="text/javascript"> window.setTimeout("location=(\'index.php\');",3000) </script>'


?>
