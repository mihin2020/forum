<?php
require_once 'config_admi.php';// connexion à la base de donnée
if(isset($_POST['utilisateur']) && isset($_POST['email']) && isset($_POST['passe']) && isset($_POST['passe2'])) //etape1:verification si les données ont ete saisis
{
    $utilisateur = htmlspecialchars($_POST['utilisateur']);//declaration des variable et recuperation a travers le post
    $email = htmlspecialchars($_POST['email']);
    $passe = htmlspecialchars($_POST['passe']);
    $passe2 = htmlspecialchars($_POST['passe2']);

    // verification du email dans la base de donnée(s'il n'exite pas le meme mail)
    $check = $bdd->prepare('SELECT utilisateur, email, passe FROM user_admin WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

 if($row == 0){   // verification du email dans la base de donnée
    if(strlen($email) <= 25){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
             if($passe == $passe2){ // verification des mots de passe

                   $passe = password_hash($passe, PASSWORD_BCRYPT); 
                   $passe2 = password_hash($passe2, PASSWORD_BCRYPT); 

                     $insert = $bdd->prepare('INSERT INTO user_admin (utilisateur, email, passe,passe2) VALUES(:utilisateur,:email, :passe, :passe2)');// insertion dans la base de donnée
                     $insert->execute(array(
                    'utilisateur' => $utilisateur,
                    'email' => $email,
                    'passe' => $passe,
                    'passe2' => $passe2, ));
                    header('Location:index.php?reg_err=success');die();
             }else{ header('Location: index.php?reg_err=password'); die();}
        }else{ header('Location: inscription.php?reg_err=email'); die();}
    }else{ header('Location: index.php?reg_err=email_length'); die();}
 }else{ header('Location: index.php?reg_err=already'); die();}

}
?>
