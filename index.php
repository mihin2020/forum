
<?php
session_start();   
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Inscription admin</title>
</head>
<body>          
    <div>
        <h2 class="text-center text-white text-uppercase display-3 mt-4 font-weight-bold">Groupe Lac Soft</h2>
    </div>/
  <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                         <div class="alert alert-success" role="alert">
                     <h4 class=" text-center">FELICITATION</h4>
                  <p class="text-center">Votre inscription a été effectuée avec succès. <br><a href="con_admi.php">Acceder à la page de connexion</a></p>
                        </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4  class="text-center">Erreur !!! mot de passe incorrect</h4>
                                <p  class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email non valide</Em></h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email trop long</h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php 
                        break;
                        case 'already':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur Compte déjà existant</h4>
                            </div>
                        <?php 
                    }
                }
                ?>
    <div class="login centre_forum">
        <h1 class="text-uppercase font-weight-bold">Inscription</h1>
        <form action="index_ins.php" method="post">
            <input type="text" name="utilisateur" placeholder="Utilisateur" required="required" class="font-weight-bold"/>
            <input type="email" name="email" placeholder="E-mail" required="required" class="font-weight-bold"/>
            <input type="password" name="passe" placeholder="Mot de passe" required="required"  class="font-weight-bold"/>
            <input type="password" name="passe2" placeholder="Confirmer mot de passe" required="required" class="font-weight-bold"/>
            <button type="submit" class="btn btn-primary btn-block btn-large">S'inscrire</button>
        </form>
    </div>
    <!--<footer>
        <p class="pied text-center text-white">© Copyright 2021.| Design by Groupe 5</p>
    </footer>-->
</body>
</html>