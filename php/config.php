<?php

// Définition des variables
$dsn = 'mysql:dbname=siteweb;host=127.0.0.1';
$user = 'root';
$password = 'Pierre1998';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

 ?>
