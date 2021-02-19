<?php 
    require_once 'config_admi.php';
    if(isset($_POST['utilisateur']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) 
{
         $utilisateur = htmlspecialchars($_POST['utilisateur']);
         $email = htmlspecialchars($_POST['email']);
         $password = htmlspecialchars($_POST['password']);
         $password_retype = htmlspecialchars($_POST['password_retype']);

         $check = $bdd->prepare('SELECT utilisateur, email, passe FROM user_admin WHERE email = ?');
         $check->execute(array($email));
         $data = $check->fetch();
         $row = $check->rowCount();

if($row == 0){          
    if(strlen($email) <= 25){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($password == $password_retype){

                $password = password_hash($password, PASSWORD_BCRYPT); 
                $password_retype = password_hash($password_retype, PASSWORD_BCRYPT); 

                $insert = $bdd->prepare('INSERT INTO user_dev (utilisateur, email, password,password_retype) VALUES(:utilisateur,:email, :password, :password_retype)');
                $insert->execute(array(
                'utilisateur' => $utilisateur,
                'email' => $email,
                'password' => $password,
                'password_retype' => $password_retype, ));
                 header('Location:dash.php?reg_err=success');die();
            }else{ header('Location: dash.php?reg_err=password'); die();}
       }else{ header('Location: dash.php?reg_err=email'); die();}
    }else{ header('Location: dash.php?reg_err=email_length'); die();}  
}else{ header('Location: index.php?reg_err=already'); die();}    
}

?>

   