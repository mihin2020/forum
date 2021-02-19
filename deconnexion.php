<?php
    session_start();
    $_SESSION = array(); //stockage de toutes les sessions au prealable identifier dans con_admin
    session_destroy();// destruction de toutes les sessions dans le tableau
    header("Location: con_admi.php");
?>