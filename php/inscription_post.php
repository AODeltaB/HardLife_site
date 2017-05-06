<?php
include 'config.php';
include 'inscription.php';
	// Hachage du mot de passe
$pass_hache = md5($_POST['mdp']);
    if($_POST['pseudo'] != NULL AND $_POST['mdp'] != NULL AND $_POST['mdp_confirm'] != NULL AND $_POST['mail'] != NULL AND $_POST['mail_confirm'] != NULL AND $_POST['mdp'] == $_POST['mdp_confirm'] AND $_POST['mail'] == $_POST['mail_confirm'])
    {
        try
        {
            $reqpost = $bdd->prepare('INSERT INTO membres(pseudo, mdp, mail, inscritdate) VALUES(:pseudo, :mdp, :mail, CURDATE())');
            $reqpost->execute(array(
            'pseudo' => $_POST['pseudo'],
            'mdp' => $pass_hache,
            'mail' => $_POST['mail']
            ));

            header('Location: fin_inscription.php');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    if($_POST['pseudo'] == NULL)
    {
        echo 'Vous devez entrer un pseudo';
    }
    if($_POST['mdp'] == NULL)
    {
        echo 'Vous devez entrer un mot de passe';
    }
    if($_POST['mdp_confirm'] == NULL)
    {
        echo 'Vous devez confirmer votre mot de passe';
    }
    if($_POST['mail'] == NULL)
    {
        echo 'Vous devez entrer une adresse email';
    }
    if($_POST['mail_confirm'] == NULL)
    {
        echo 'Vous devez confirmer votre adresse email';
    }
    if($_POST['mdp'] != $_POST['mdp_confirm'])
    {
        echo 'Les deux mots de passe doivent être identiques';
    }
    if($_POST['mail'] != $_POST['mail_confirm'])
    {
        echo 'Les deux adresses email doivent être identiques';
    }
    header('Location: fin_inscription.php');
?>
