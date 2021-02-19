<?php
 require_once 'config_admi.php';
 if(isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['contenu'])) 
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $contenu = htmlspecialchars($_POST['contenu']);

  $insert = $bdd->prepare('INSERT INTO reponse (nom, prenom, contenu) VALUES(:nom, :prenom,:contenu)');
        $insert->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'contenu' => $contenu, ));

}
?>