<?php
session_start();
?>
<?php
 require_once 'config_admi.php';
 if(isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['categorie']) && isset($_POST['sujet']) && isset($_POST['message'])) 
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    $insert = $bdd->prepare('INSERT INTO poster (nom, prenom, categorie,sujet ,message) VALUES(:nom, :prenom,:categorie, :sujet, :message)');
    $insert->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'categorie' => $categorie,
    'sujet' => $sujet,
    'message' => $message))

;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/post.css">
    <title>post</title>
</head>
<body>
    <header>
         <nav class="navbar navbar-expand-lg navbar-light contour">
            <div class="container ">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img src="img/logo-forum1.png" width="200px" height="100px" alt="">
              <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03 ">
                <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item mt-2 mr-5 font-weight-bold ">
                    <a class="nav-link text-info text-uppercase " aria-current="page" href="acceuil.php">Acceuil</a>
                  </li>
                  <li class="nav-item mt-2 mr-5 font-weight-bold ">
                    <a class="nav-link text-info text-uppercase " aria-current="page" href="post.php">Poster</a>
                  </li>
                 <!-- <li class="nav-item mt-2 mr-5 font-weight-bold ">
                    <a class="nav-link text-info text-uppercase" href="#">Supprimer</a>
                  </li>-->
                  <li class="nav-item">
                    <a class="nav-link  " href="deconnexion_dev.php"><button onclick="myFunction()" type="button" class="btn btn-outline-info btn-lg">Se deconnecter</button></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>


    <div class="container couleur form_post mt-5 ">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="post.php" method="post">
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
                  <!--  <div class="form-group">
                      <label  class="text-info font-weight-bold" >Email</label>
                      <input type="email" name="email" class="form-control" >
                    </div>-->
                    <div class="form-row mt-3">
                        <div class="form-group col-md-6">
                            <label  class="text-info font-weight-bold"  >Catégories</label>
                            <select  class="form-control"  type="text" name="categorie" >
                              <option selected>HTML 5</option>
                              <option>CSS 3 </option>
                              <option>JAVASCRIPT </option>
                              <option>PHP</option>
                              <option>JQUERIE</option>
                              <option>BOOTSTRAP</option>
                              <option>LARAVEL</option>
                              <option>AJAX</option>
                              <option>JAVA</option><option>REACT</option><option>SYMPHONY</option>MATERIALIZE<option><option>SGBD</option><option>PYTHON</option>
                              <option>RUBIS</option>
                            </select>
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
                    <button type="submit" class="btn btn-info btn-lg">Envoyer</button>
                  </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <footer>
        <div class="container-fluid bg-info pied mt-4">
            <div>
                <h6 class="text-center font-weight-bold text-white ">© Copyright 2021.| Design by Groupe 5</h6>
            </div>
        </div>
    </footer>
    <script>
function myFunction() {
  alert("Voulez vous vraiment vous deconnecter?");
}
</script>
</body>
</html>