<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Inscription - Hardlife RP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	 <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">HardLife RP</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Acceuil</a></li>
		<li><a href="/forum">Forum</a></li>
        <li><a href="equipe.php">Notre équipe</a></li>
        <li><a href="collapsible.php">Nous rejoindre</a></li>
		<li><a href="media.php">Média</a></li>
			    <!-- Dropdown Trigger -->
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
        <li><a href="collapsible.php">Nous rejoindre</a></li>
		<li><a href="media.php">Média</a></li>
    <li><a href="inscription.php">Inscription</a></li>
    <li><a href="connexion.php">Connexion</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
  <center>
  <form method="post" action="inscription_post.php" class="inscription">
  <p>
        <label for="pseudo">Pseudo</label><br />
	<input type="text" name="pseudo" id="pseudo" size="30" />
        <br />
						
	<br />
					
	<label for="mdp">Mot de passe</label><br />
	<input type="password" name="mdp" id="mdp" size="30" /><br />
						
	<label for="mdp_confirm">Confirmez votre mot de passe</label><br />
	<input type="password" name="mdp_confirm" id="mdp_confirm" size="30" />
        <br />
						
	<br />
						
	<label for="mail">Adresse email</label><br />
	<input type="email" name="mail" id="mail" size="30" /><br />
						
	<label for="mail_confirm">Confirmez votre adresse email</label><br />
	<input type="email" name="mail_confirm" id="mail_confirm" size="30" />
        <br />
						
	<br />
						
	<input type="submit" value="Valider" class="valider" />
	
    </p>
	
	</form>
</center>
	<br>
<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YVEAZQYMV4TGL">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">HardLife RP</h5>
          <p class="grey-text text-lighten-4">Nous sommes un serveur à l'écoute de nos joueurs, attentif et particulièrement drôle... ou pas.</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Option</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Sociabilité</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
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
</body>
</html>
