<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>HardLife RP</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
<?php
if (isset($_SESSION['pseudo'])) {
?>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">HardLife RP</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Accueil</a></li>
		<li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="https://discord.gg/h2uhwUW">Discord</a></li>
		<li><a href="media.php">Média</a></li>
	 <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo htmlentities(trim($_SESSION['pseudo'])); ?><i class="material-icons right">arrow_drop_down</i></a></li>
	 <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Stats<i class="material-icons right">arrow_drop_down</i></a></li>
  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="profile.php">Profil</a></li>
    <li class="divider"></li>
  </ul>
    <ul id='dropdown2' class='dropdown-content'>
    <li><a href="banlist.php">Banlist</a></li>
    <li><a href="leaderboard.php">Leaderboard</a></li>
    <li class="divider"></li>
  </ul>
</ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Acceuil</a></li>
		<li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="https://discord.gg/h2uhwUW">Discord</a></li>
		<li><a href="media.php">Média</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="profile.php">Profil</a></li>
    <li><a href="banlist.php">Banlist</a></li>
    <li><a href="leaderboard.php">Leaderboard</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php
}
else {
	?>
	  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">HardLife RP</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Accueil</a></li>
    <li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="https://discord.gg/h2uhwUW">Discord</a></li>
    <li><a href="media.php">Média</a></li>

   <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Client<i class="material-icons right">arrow_drop_down</i></a></li>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="inscription.php">Inscription</a></li>
    <li><a href="connexion.php">Connexion</a></li>
    <li class="divider"></li>
  </ul>

</ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Acceuil</a></li>
    <li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="https://discord.gg/h2uhwUW">Discord</a></li>
    <li><a href="media.php">Média</a></li>
    <li><a href="inscription.php">Inscription</a></li>
    <li><a href="connexion.php">Connexion</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <?php
} // termine le else : si il est pas co afficher navbar client
  if (isset($_SESSION['pseudo'])) { 
	echo '<center><p>Tu es connecté sous le nom de '.$_SESSION['pseudo'].'</p></center>';
	echo '<center><p>Ton Email est'.$_SESSION['mail'].'</p></center>';
	echo '<center><p>Bientôt tu pourras changés d adresse Mail / Avatar MDP !</p></center>';
	
	?>
  
    <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">HardLife RP</h5>
          <p class="grey-text text-lighten-4">Nous sommes un serveur à l'écoute de nos joueurs, attentif et particulièrement drôle... ou pas.</p>
        </div>
          <h5 class="white-text">Sociabilité</h5>
          <ul>
            <li><a class="white-text" href="#!">Discord</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
<?php
}
  else {
	  echo '<center><p>Vous devez être connecté pour voir cette page.</p>';

	?>

	<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">HardLife RP</h5>
          <p class="grey-text text-lighten-4">Nous sommes un serveur à l'écoute de nos joueurs, attentif et particulièrement drôle... ou pas.</p>
        </div>
          <h5 class="white-text">Sociabilité</h5>
          <ul>
            <li><a class="white-text" href="#!">Discord</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

<?php
  } //fin du else ligne 139
  ?>

<? exit(); ?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>

</html>
