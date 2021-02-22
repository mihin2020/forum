 <?php
 /*Fichier de connexion à la base de donnée */
 try 
 {
     $bdd = new PDO('mysql:host=localhost;dbname=forumls;charset=utf8', 'root', '');
 }
 catch(Exception $e)
 {
     die('Erreur'.$e->getMessage());
 }
 ?>