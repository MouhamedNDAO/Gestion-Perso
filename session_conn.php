<?php

$Db_userName = "rassul";
$Db_password ="pass123";
    //ouverture d'une connexion a la  base de donne mon_projet 
        try
        {
            $connexion = new PDO('mysql:host=localhost:8888;dbname=mon_projet;charset=utf8', $Db_userName,$Db_password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
                echo("Sorry somethings wrong");
                die('Erreur : '.$e->getMessage());
        }
?>