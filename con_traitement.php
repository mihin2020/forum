<?php
session_start();
require_once 'config_admi.php'; // connexion à la BD
$email = htmlspecialchars($_POST['email']); // declaration de variables et securisation
$passe = htmlspecialchars($_POST['passe']);
//preparation de la requette
$check = $bdd->prepare('SELECT email, passe FROM user_admin WHERE email = ?');
$check->execute(array($email));//exceuction de la requette
$data = $check->fetch();//affichage
$row = $check->rowCount();

if($row == 1)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) //Selection et filtre des mail dans la BD
    {
        
        if(password_verify($passe, $data['passe']))//Verification et comparaison  de mot de passe dans la BD avec celui saisis dans les champs
        {
            $_SESSION['email'] = $email;
            header('Location: dash.php');die();
        }else{ header('Location: con_admi.php?login_err=password'); die(); }
    }else{ header('Location: con_admi.php?login_err=email'); die(); }
}else{ header('Location: con_admi.php?login_err=already'); die(); }
?>