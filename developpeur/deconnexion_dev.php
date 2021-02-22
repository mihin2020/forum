<?php
    session_start();
    $_SESSION = array(); //stockage de toutes les sessions au prealable identifier
    session_destroy();// destruction de toutes les sessions dans le tableau
    header("Location:index.php");
?>