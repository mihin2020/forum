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
        'message' => $message, ));

}
?>