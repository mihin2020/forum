<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>Connexion administrateur</title>
	<link rel="stylesheet" type="text/css" href="styles/connect.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<script src="font-awesome-4.7.0/css/font-awesome.min.css"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-light">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 position">
				<img src="img/img1.png" width="700px" height="550px" alt="">
			</div>
			<div class="col-md-6 position1">
			<?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);
                    switch($err)
                    {
                		case 'passe':
                        ?>
                        <div class="alert alert-danger ">
                     		  <div class="text-center">
							   Erreur!!!! mot de passe incorrect
							   </div>
                        </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger ">
                               <div class="text-center"> Erreur email incorrect</div>
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                               <div class="text-center">
							   <strong>Erreur</strong> compte  inexistant
							  <div><a href="index.php"  class="text-center font-weight-bold">Veuillez vous inscrire!!!Merci</a></div> 
							   </div>
                            </div>
                        <?php
                        break;
                    }
                }
             ?> 
				<div class="login-content">
					<form  class="ml-5" action="con_traitement.php" method="POST">
						<img src="img/avatar.png">
						<h3 class="title font-weight-bold">Connectez vous a l'espace administrateur</h3>
						   <div class="input-div one">
							  <div class="i">
								 <i class="fas fa-user"></i>
							  </div>
							  <div class="div">
								 <h5>Email</h5>
								 <input type="email" name="email"  class="input"> <!--completer name et action-->
							  </div>
						   </div>
						   <div class="input-div pass">
							  <div class="i"> 
								 <i class="fas fa-lock"></i>
							  </div>
							  <div class="div">
								 <h5>Mot de passe</h5>
								 <input type="password" name="passe" class="input">
						   </div>
						</div>
						<input type="submit" class="bt" value="Se connecter">
					</form>
					</div>
			</div>	
	   </div>
	</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
