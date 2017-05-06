<?php
session_start()
	// Include le fichier config avec les informations DB
	include 'config.php';
	include 'connexion.php';
	// Hachage du mot de passe

if(isset($_POST['submit]'))
{
	$username = $_POST['pseudo'];
	$password = $_POST['mdp'];

	if($username&&$password)
	{
		$password = sha1($password);
		$query = $bdd=>prepare("SELECT * FROM membres where pseudo='$username'&&mdp='$password'");
		$rows = mysql_num_rows($query);
		if ($raws==1){
			$_SESSION['pseudo']=$username;
			header('Location: index_membre.php');	
		}else echo "Pseudo ou Password incorrect";
	} else echo"Veuillez saisir tous les champs";

}
?>
