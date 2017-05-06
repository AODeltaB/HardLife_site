
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
?>
