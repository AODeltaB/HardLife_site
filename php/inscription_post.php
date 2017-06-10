<?php
if(isset($_POST['submit']))
{
	$username = htmlentities(trim($_POST['pseudo']));
	$password = htmlentities(trim($_POST['mdp']));
	$mail = htmlentities(trim($_POST['mail']));
	$password_confirm = htmlentities(trim($_POST['mdp_confirm']));

	if($username&&$password&&password_confirm&&$mail) {
		if($password==$password_confirm) {
			$password = md5($password);
			$connect = mysql_connect('localhost','root','root') or die ('Error');
			mysql_select_db('siteweb');
			$reg = mysql_query("SELECT * FROM membres WHERE pseudo='$username'");
			$rows = mysql_num_rows($reg);
			if($rows==0)
			{
				$query = mysql_query("INSERT INTO membres VALUES('', '$username', '$password', '$mail', '')");
				die("Inscription terminée ! <a href='connexion.php'> connectez</a> vous");
			}else echo "Pseudo pas disponnible";
		} else echo"Les mots de passes doivent être identique !";
	} else echo"Veuillez saisir tous les champs";
}
?>
