<?php
session_start();
$error= isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="connexion.css">
        <!-- <script src="script.js"></script> -->
    </head>
    <body>
        <!-- <style type="text/css">
          body{
              background-image: url("télécharger.jpg");
              background-repeat: no-repeat;
              background-size: cover;
          }
        </style> -->
        <div class="container">
            <div class="row">
                <div class="col-ms-12">
                    <div class="perso">
                    <h3>GESTION DES PERSONNELS DU POST DE SANTE</h3></div>
                </div>
            </div>
        </div>
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action="Identification.php" method="POST">
                    <h1>SE CONNECTER</h1>
                    <p class="text-muted"> Veuiller enter votre login et mot de passe!</p> 
                    <input type="text" name="Email" placeholder="Login"> 
                    <input type="password" name="Password" placeholder="Password"> 
                    <a class="forgot text-muted" href="#">Mot de passe oublier?</a><br>
                    <a class="inscription text-muted" href="Formulair_inscription.php">Je n'est pas encore de compte</a><br><br> 
                    <button type="submit" class="btn btn-primary btn-circle" >
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
