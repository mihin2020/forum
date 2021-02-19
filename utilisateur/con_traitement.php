<?php
    session_start();
    require_once 'config_admi.php'; // connexion à la BD
    $email = htmlspecialchars($_POST['email']); // declaration de variables et securisation
    $password = htmlspecialchars($_POST['password']);
    //preparation de la requette
    $check = $bdd->prepare('SELECT email, password FROM user_dev WHERE email = ?');
    $check->execute(array($email));//exceuction de la requette
    $data = $check->fetch();//affichage
    $row = $check->rowCount();

if($row == 1)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) //Selection et filtre des mail dans la BD
    {
        
        if(password_verify($password, $data['password']))//Verification et comparaison  de mot de passe dans la BD avec celui saisis dans les champs
        {
            header('Location: acceuil.php');die();
        }else{ header('Location: index.php?login_err=password'); die(); }
    }else{ header('Location:  index.php?login_err=email'); die(); }
}else{ header('Location: index.php?login_err=already'); die(); }
?>