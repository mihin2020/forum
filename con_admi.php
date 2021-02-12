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
    <title>Connexion admin</title>
</head>
<body>          
    <div>
        <h2 class="text-center text-white text-uppercase display-3 mt-4 font-weight-bold">Groupe Lac Soft</h2>
    </div>
    <div class="text-center text-white mt-5 text-uppercase font-weight-bold
">Veuillez vous authentifier!!!</div>
    <div class="login centre_forum">
    <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'passe':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
        <h1 class="text-uppercase font-weight-bold">Connexion</h1>
        <form action="con_traitement.php" method="post">
            <input type="email" name="email" placeholder="E-mail" required="required" class="font-weight-bold"/>
            <input type="password" name="passe" placeholder="Mot de passe" required="required"  class="font-weight-bold"/>
            <button type="submit" class="btn btn-primary btn-block btn-large">Se connecter</button>
        </form>
        
    </div>
    <!--<footer>
        <p class="pied text-center text-white">© Copyright 2021.| Design by Groupe 5</p>
    </footer>-->
</body>
</html>