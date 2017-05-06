<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Connexion - HardLife RP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

 <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">HardLife RP</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Accueil</a></li>
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

	<form method="post" action="connexion_post.php" class="connexion">
	<p>
  <label for="pseudo">Pseudo</label><br />
	<input type="text" name="pseudo" id="pseudo" size="30" />
	<br />
	<br />
	<label for="mdp">Mot de passe</label><br />
	<input type="password" name="mdp" id="mdp" size="30" /><br />
	<input type="submit" value="Valider" class="valider" />
		</p>
	</form>

	<?php
	// Hachage du mot de passe
	$pass_hache = sha1($_POST['mdp']);

	// Vérification des identifiants
	$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND mdp = :mdp');
	$req->execute(array(
	    'pseudo' => $pseudo,
	    'mdp' => $pass_hache));

	$resultat = $req->fetch();

	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{
	    session_start();
	    $_SESSION['id'] = $resultat['id'];
	    $_SESSION['pseudo'] = $pseudo;
	    echo 'Vous êtes connecté !';
	}

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
            <li><a class="white-text" href="#!">Discord 1</a></li>

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
