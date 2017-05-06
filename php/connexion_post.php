	<?php

	// Include le fichier config avec les informations DB
	include 'config.php';
	// Hachage du mot de passe
	$pass_hache = sha1($_POST['mdp']);

	// Vérification des identifiants

	$reqselect = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND mdp = :mdp');
	$reqselect->execute(array(
	    'pseudo' => $pseudo,
	    'mdp' => $pass_hache));

	$resultat = $reqselect->fetch();

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
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
			header('Location: index.php');
	}
?>
