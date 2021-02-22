<?php //fichier de publication des publication

   require_once 'config_admi.php';

    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        if(!empty($id) && is_numeric ($id))
        {
            $query = "DELETE FROM poster WHERE id=$id";
            $bdd->exec($query);
            header("Location:dash.php");
        }
    }
?>