<?php

include("../session_conn.php");

//Remplissage de l'heure de pointage
if(isset($_POST["submit"]) )
{
    
    $email_pointage= $_POST["email"];
    $date_pointage = $_POST["date"];
    $time_pointage =$_POST["time"];
    $statut =$_POST["statut"];
    
        //Insertion dans la base de donnée

        $insertion = ("INSERT INTO 
        pointage (email,jours,heure,statut) 
        VALUES(:email,:jours,:heure,:statut)")OR die(print_r($db->errorInfo()));
         
        $insert =$connexion->prepare($insertion);

        $insert->bindParam(':email', $email_pointage);
        $insert->bindParam(':jours', $date_pointage);
        $insert->bindParam(':heure', $time_pointage);
        $insert->bindParam(':statut',$statut);

        $insert->execute();

        header("location:Remplissage_payement.php");
       echo("bien enregister");
}

?>