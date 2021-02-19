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
    <link rel="stylesheet" href="css/acceuil.css">
    <title>Acceuil</title>
</head>

<?php // requete permettant de classer les questions et publications en sur la page d'acceuil
    require_once ('config_admi.php');
    $result = $bdd->query("SELECT * FROM poster ORDER BY date_mess DESC ");
    if (!$result){
        echo"la recuperation a echoue";
    }else{
        $nbre = $result->rowCount();
 }
?>


<?php // requete permettant de lister les questions reponses sur la page d'acceuil
    require_once ('config_admi.php');
    $result1 = $bdd->query("SELECT * FROM reponse ");
    if (!$result1){
        echo"la recuperation a echoue";
    }else{
        $nbre = $result1->rowCount();
 }
?>
<body class="bg-white">
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
                  <li class="nav-item mt-2 mr-5 font-weight-bold ">
                    <a class="nav-link text-info text-uppercase" href="#">Supprimer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  " href="deconnexion_dev.php"><button onclick="myFunction()" type="button" class="btn btn-outline-info btn-lg">Se deconnecter</button></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <div class="container couleur post mt-5 pt-5">
<?php 
while($ligne = $result->fetch()) {
?>
     <div class="container-fluid  ">
     <div class="row ">
         <div class="col-md-12 ">
             <div class="card mb-4">
                 <div class="card-header ">
                     <div class="media flex-wrap w-100 align-items-center"> <img src="img/avatar.png" width="50px" height="50px" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true"><div class=' font-weight-bold text-info text-white '>
                           <?= $ligne['nom']?></div></a>
                             <div class="text-muted small"><div class='text-black'>
                           <?= $ligne['prenom']?></div></div>
                         </div>
                         <div class="text-muted small ml-3">
                           <h6>DATE DE PUBLICATION</h6>
                         <div class='text-center font-weight-bold  text-black'>
                           <?= $ligne['date_mess']?></div>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <p><div class='text-justify font-weight-bold '>
                          <?= $ligne['message']?></div>
                     </p>
                 </div>
                 <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                     <div class="px-4 pt-3"> 
                     <div class=' font-weight-bold'>
                          <?= $ligne['categorie']?> POST N°<?= $ligne['id']?></div>
                     </div>
                     <!--integration du formulaire defilant-->
                     <button type="button" class="btn btn-info mr-4 mt-2" data-toggle="modal" data-target="#exampleModal" data-whatever="">Repondre</button>

                       <!--reponse aux question-->
<?php /*

while($ligne = $result1->fetch()) {
    ?>
    <div class="container-fluid mt-100">
    <div class="d-flex flex-wrap justify-content-between">
        <div> <button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> New thread </button> </div>
        
    </div>
    <div class="card mb-3">
        <div class="card-header pl-0 pr-0">
            <div class="row no-gutters w-100 align-items-center">
                <div class="col ml-3">Topics</div>
                <div class="col-4 text-muted">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">Replies</div>
                        <div class="col-8">Last update</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true"><?= $ligne['contenu']?></a>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Neon Mandela</a></div>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Tim cook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <hr class="m-0">
    <?php
}
*/
?>
   

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Proposition de réponses</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <div class='text-center font-weight-bold'>
                          <?=$ligne['message']?></div>
                            <form action="reponse_traitement.php" method="post">
                              <div class=row>
                              <div class="form-group col-6">
                                <label for="" class="col-form-label text-info font-weight-bold">Nom</label>
                                <input type="text" name="nom" class="form-control" id="recipient-name">
                              </div>
                              <div class="form-group col-6">
                                <label for="" class="col-form-label text-info font-weight-bold">Prénom</label>
                                <input type="text" name="prenom" class="form-control" id="recipient-name">
                              </div>
                              </div>
                              <div class="form-group">
                                <label for="message-text"  class="col-form-label text-info font-weight-bold">Message:</label>
                                <textarea class="form-control" name="contenu" id="message-text"></textarea>
                              </div>
                              <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                          </div>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php 
}

?>






 <footer>
        <div class="container-fluid bg-info pied mt-4">
            <div>
                <h6 class="text-center font-weight-bold text-white ">© Copyright 2021.| Design by Groupe 5</h6>
            </div>
        </div>
    </footer>

  <script src="js/main.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  

    <script>
              function myFunction() {
                alert("Voulez vous vraiment vous deconnecter?");
              }

              function bascule(elem)
              {
              etat=document.getElementById(elem).style.visibility;
              if(etat=="hidden"){document.getElementById(elem).style.visibility="visible";}
              else{document.getElementById(elem).style.visibility="hidden";}
              }

              $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Proposition de reponses ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

    </script>
    







<style>
  .post{
    border-radius:20px;
  }
</style>
</body>
</html>