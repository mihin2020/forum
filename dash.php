<?php
    session_start();   
    if(!$_SESSION['email'])
    { //si la session n'est pas active alors rediriger vers la page de connexion
      header('Location: con_admi.php');
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dash.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Administrateur</title>
</head>
<body class="container gris"> <!--le tableau de bord-->
           <div class="row">
              <div class="col-md-3">
                <div class="sidebar-container">
                  <div class="sidebar-logo">
                    <div class="text-center">
                        <img src="img/logo-forum.png" alt="" width="225px" height="175px">
                    </div>
                        <div>
                            <h3 class="font-weight-bold text-uppercase text--center mt-1">Administrateur</h3>
                        </div>
                </div>
                  <ul class="sidebar-navigation">
                      <li></li>
                      <li>
                         <a href="#ajout" class=" opt1">
                            <i class="fa fa-home" aria-hidden="true"></i>Ajouter un Utilisateur 
                         </a>
                      </li>
                      <li class="mt-4">
                         <a href="#" class="opt2">
                            <i class="fa fa-tachometer " aria-hidden="true"></i> Poster
                         </a>
                      </li>
                      <li class="mt-4">
                         <a href="#" class="opt3">
                            <i class="fa fa-users" aria-hidden="true"></i> Supprimer un post
                         </a>
                      </li>
                      <li class="mt-4">
                        <a href="#supp" class="opt4">
                            <i class="fa fa-cog" aria-hidden="true"></i>Retirer un Utilisateur
                      </a>
                      </li>
                  </ul>
                <div class="row mt-5">
                     <div class="offset-3"></div>
                        <div class="col-6">
                          <a href="deconnexion.php"> <button type="submit" class="btn     btn-outline-primary"onclick="myFunction()">Deconnexion </button></a>  
                        <div class="offset-3"></div>
                      </div>
                </div>
                <div class="pied">
                    <p class="mt-5 ">© Copyright 2021.| Design by Groupe 5</p>
                </div>
              </div>
        </div>

            <div class="m-auto pb-3">
                <h1 class="text-uppercase text-center font-weight-bold text-info">groupe Lac soft</h1>
            </div>

<!-- affichage des categories et des posts-->
<?php
      require_once('config_admi.php');
      $result = $bdd->query("SELECT * FROM poster ORDER BY categorie ASC");
      if (!$result){
          echo"la recuperation a echoue";
      }else{
          $nbre = $result->rowCount();
?>

<table  border=2 width= 100%  class="position border-black">
    <tr class="border bg-info">
         <th class="text-center text-uppercase">Nom</th>
         <th class="text-center text-uppercase">Catégorie</th>
         <th class="text-center text-uppercase">sujet</th>
         <th class="text-center text-uppercase">message/preoccupation</th>
         <th class="text-center text-uppercase">Heure du poste</th>
         <th class="text-center text-uppercase">Action</th>
     </tr>
<?php
  while($ligne = $result->fetch())
  {
      echo"<tr>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white '>".$ligne[2]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white '>".$ligne[3]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white'>".$ligne[4]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white'>".$ligne[5]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white'>".$ligne[6]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white'><a href='suppression_publication.php?id=".$ligne[0]."' class='btn btn-info'onclick='return confirm(\"Voulez-vous vraiment supprimer cet developpeur?\")'; >Supprimer</a>";
      echo"</tr>";
  }
?>
</table>

<?php  
  }
?>

<?php
 
    $result = $bdd->query("SELECT * FROM user_dev ORDER BY utilisateur ASC");
    if (!$result){
        echo"la recuperation a echoue";
    }else{
        $nbre = $result->rowCount();
?>
     <h3  id='supp' class="text-center font-weight-bold text-uppercase text-info position_titre pt-4">La table comprend <?= $nbre ?> developpeurs enregistrées</h3> 
<table  border=2 width= 75% class="mt-4  position border-black">

    <tr class="border bg-info">
         <th class="text-center text-uppercase">nom</th>
         <th class="text-center text-uppercase">email</th>
         <th class="text-center text-uppercase">action</th>
     </tr>

<?php
  while($ligne = $result->fetch())
  {
      echo"<tr>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white '>".$ligne[1]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white'>".$ligne[2]."</td>";
      echo"<td class='text-center font-weight-bold bg-secondary text-white'><a href='suppression.php?id=".$ligne[0]."' class='btn btn-info'onclick='return confirm(\"Voulez-vous vraiment supprimer cet developpeur?\")'; >Supprimer</a>";
      echo"</tr>";
  }
?>

</table>
    <?php  
 }
?>
     
<div class="col-md-9 fond gris ">
    <div class="container">
       <div class="row gris p-0 ">
          <div class="offset-2"></div>
            <div class="col-8 form_center">


                <?php // affichage des message d'erreur
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                         <div class="alert alert-success" role="alert">
                     <h4 class="alert-heading text-center">FELICITATION</h4>
                  <p class="text-center">Votre inscription a été effectuée avec succès.</p>
                              <hr>
                     <p class="text-center"></p>
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

                        case 'pseudo_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                              <h4 class="text-center">Erreur !!! Nom d'utlisateur trop long</h4>
                                <p>Merci de réessayer</p>
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur Compte déjà existant</h4> 
                            </div>
                        <?php 

                    }
                }
                ?>

                <form action="inscription_traitement.php" method="post">
                      <h3 id="ajout" class="text-center font-weight-bold text-uppercase text-info">Ajouter un developpeur</h3>       
                      <div class="form-group">
                          <input type="text" name="utilisateur" class="form-control" placeholder="Utilisateur" required="required" >
                      </div>
                      <div class="form-group">
                          <input type="email" name="email" class="form-control"  placeholder="Email" required="required" >
                      </div>
                      <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required">
                      </div>
                      <div class="form-group">
                          <input type="password" name="password_retype" class="form-control" placeholder="Confirmer le mot de passe" required="required" >
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-info btn-block text-uppercase font-weight-bold">Inscrire</button>   
                  </form>
              </div>
              <div class="offset-2"></div>
            </div>
          </div>
        </div>
    </div>

<!-- poser une question ou faire une publication-->

    <div class="container couleur form_post mt-5 center ">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div><h3  class="text-center font-weight-bold text-uppercase text-info">Poser une question/publication</h3></div>
                <form action="post_traitement.php" method="post" class="ml-5 pt-3">
                    <div class="form-row mt-3">
                      <div class="form-group col-md-6">
                        <label class="text-info font-weight-bold">Nom</label>
                        <input type="text" name="nom" class="form-control" required pattern="[A-Za-z]{2,9}" >
                      </div>
                      <div class="form-group col-md-6">
                        <label class="text-info font-weight-bold">Prenom</label>
                        <input type="text" name="prenom" class="form-control"  required pattern="[A-Za-z]{,20}" >
                      </div>
                    </div>
                    <div class="form-row mt-3">

                        <div class="form-group col-md-6">
                            <label  class="text-info font-weight-bold"  >Catégories</label>
                            <select  class="form-control"  type="text" name="categorie" >
                              <option selected>HTML 5</option>
                              <option>CSS 3</option>
                              <option>JAVASCRIPT </option>
                              <option>PHP</option>
                              <option>JQUERIE</option>
                              <option>BOOTSTRAP</option>
                              <option>LARAVEL</option>
                              <option>AJAX</option>
                              <option>JAVA</option><option>REACT</option><option>SYMPHONY</option><option>MATERIALIZE</option><option>SGBD</option><option>PYTHON</option>
                              <option>RUBIS</option></select>
                     </div>
                          <div class="form-group col-md-6">
                            <label  class="text-info font-weight-bold" >Sujet</label>
                            <input type="text" name="sujet" required class="form-control" >
                          </div>
                          </div>
                        <div class="form-group">
                        <label class="text-info font-weight-bold">Questions/Préoccupations</label>
                        <textarea class="form-control " name="message" required rows="3"></textarea>
                      </div>
                    <button type="submit"  onclick="myFunction1()" type="button" class="btn btn-info btn-lg">Envoyer</button>
                  </form>
              </div>
            <div class="col-md-1"></div>
        </div>
    </div>

<style>
     .fond{
       margin-left:275px;
       background-color:white;
     }
     .position{
    margin-left: 25%;
     }
     .position_titre{
    margin-left: 35%;
     }
     .form_center
     {
	  margin-top: 5%;
     }
     .gris{
      background-color: rgba(234, 234, 238, 0.534);
     }
     .center{
       margin-left:250px;
     }
</style>
<script>
  function myFunction() {
  alert("Voulez vous vraiment vous deconnecter?");
}
</script>
</body>
</html>