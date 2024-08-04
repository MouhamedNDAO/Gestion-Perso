<?php
if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["adresse"]) && !empty($_POST["anniversaire"]) && !empty($_POST["fonction"]) && !empty($_POST["specialite"])){
    $nom = $_POST["prenom"];
    $prenom =$_POST["nom"];
    $adresse = $_POST["email"];
    $datenaiss = $_POST["password"];
    $email =$_POST["adresse"];
    $fontion = $_POST["anniversaire"];
    $specialite = $_POST["fonction"];
    $info = $_POST["specialite"];
    $sexe = $_POST["sexe"];
     echo "c'est fait ! votre inscription a etait bien prise en charge Mr ".$prenom." ".$nom ;
 }else{
     echo "Votre inscription n'est pas complete";
 }
?>