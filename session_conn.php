<?php

$Db_userName = "root";
$Db_password ="root";
    //ouverture d'une connexion a la  base de donne mon_projet 
        try
        {
            $connexion = new PDO('mysql:host=localhost;dbname=mon_projet;charset=utf8', $Db_userName,$Db_password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
                echo("Sorry somethings wrong");
                die('Erreur : '.$e->getMessage());
        }
?>