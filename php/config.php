<?php

// Définition des variables
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'siteweb';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

 ?>
