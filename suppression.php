<?php //fichier de publication des developpeurs

   require_once 'config_admi.php';

    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        if(!empty($id) && is_numeric ($id))
        {
            $query = "DELETE FROM user_dev WHERE id=$id";
            $bdd->exec($query);
            header("Location:dash.php");
        }
    }
?>