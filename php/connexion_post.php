
	<?php
	// Hachage du mot de passe
	$pass_hache = sha1($_POST['mdp']);

	// Vérification des identifiants
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $bdd = new PDO('mysql:host=localhost;dbname=database', 'login', 'mdp',   $pdo_options);
	$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND mdp = :mdp');
	$req->execute(array(
	    'pseudo' => $pseudo,
	    'mdp' => $pass_hache));

	$resultat = $req->fetch();
  header('Location: connexion.php');

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
	}
?>
