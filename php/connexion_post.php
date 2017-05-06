<?php
// include 'config.php';
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['pseudo'];
	$password = $_POST['mdp'];

	if($username&&$password){

		$password = md5($password);
		$connect = mysql_connect('localhost','root','Pierre1998');
		mysql_select_db('siteweb');
		$query = mysql_query("SELECT * FROM membres WHERE pseudo='$username'&&mdp='$password'");
		$rows = mysql_num_rows($query);
		if ($rows==1){
			$_SESSION['pseudo']=$username;
			header('Location: media.php');
		}else echo "Pseudo ou Password incorrect";
	} else echo"Veuillez saisir tous les champs";
}
?>
