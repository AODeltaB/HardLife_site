<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>HardLife RP</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index_membre.php" class="brand-logo">HardLife RP</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Accueil</a></li>
		<li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="https://discord.gg/h2uhwUW">Discord</a></li>
		<li><a href="media.php">Média</a></li>

	 <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Client<i class="material-icons right">arrow_drop_down</i></a></li>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="logout.php">Profil</a></li>
    <li class="divider"></li>
  </ul>

</ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index_membre.php">Acceuil</a></li>
		<li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="https://discord.gg/h2uhwUW">Discord</a></li>
		<li><a href="media.php">Média</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="logout.php">Profil</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">HardLife RP</h1>
        <div class="row center">
          <h5 class="header col s12 light">Un serveur GTA V RP basé sur le Fun !</h5>
        </div>
        <div class="row center">
          <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Commencez !</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Un serveur performant !</h5>

            <p class="light">Serveur by Jacky Tunning.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Une ambiance conviviale !</h5>

            <p class="light">Serveur 90% RP (Faut bien rigoler des fois avec des Events WTF ! :D)</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Des Admins à votre écoute !</h5>

            <p class="light"> - AO_DeltaB</p>
			<p class="light"> - DD</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Beaucoup de Fun !</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Nous aider ?</h4>
          <p class="left-align light">Vous voulez nous aider à financer le serveur ?</p>
		  <p class="left-align light">Nous disposons d'une adresse PayPal : gmod.hardlife.rp@gmail.com</p>

<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YVEAZQYMV4TGL">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">C'est presque fini :D !</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">HardLife RP</h5>
          <p class="grey-text text-lighten-4">Nous sommes un serveur à l'écoute de nos joueurs, attentif et particulièrement drôle... ou pas.</p>

        </div>

        <div class="col l3 s12">
          <h5 class="white-text">Sociabilité</h5>
          <ul>
            <li><a class="white-text" href="https://discord.gg/h2uhwUW">Discord</a></li>

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


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
