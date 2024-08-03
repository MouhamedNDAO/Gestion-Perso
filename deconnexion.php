<?php

    session_start();

    //connexion base de donnée
    include("session_conn.php");

    //close déconnexion base de donnée
    $connexion=null;

    //écrasement de la variable session
    $_SESSION = array();
    //close session
    session_destroy();
    unset($_SESSION["Email"]);
    // redirection page login
    header("location:Login.php");
?>