<?php
require ("config.php");

session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['pseudo'];
	$password = $_POST['mdp'];

	if($username&&$password){

		$password = md5($password);
<<<<<<< HEAD
		$connect = mysql_connect($db_host,$db_user,$db_password);
		mysql_select_db($db_name);
=======
		$connect = mysql_connect('localhost','root','root');
		mysql_select_db('siteweb');
>>>>>>> origin/master
		$query = mysql_query("SELECT * FROM membres WHERE pseudo='$username'&&mdp='$password'");
		$rows = mysql_num_rows($query);
		if ($rows==1){
			$_SESSION['pseudo']=$username;
			header('Location: index.php');
		}else echo "Pseudo ou Password incorrect";
	} else echo"Veuillez saisir tous les champs";
}
?>
