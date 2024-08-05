<?php
    include("session_conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../CSS/acceuil.css">
    <!--CDN CSS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Accueil</title>
    
</head>
<body>

<!--Navbar-->
<div class="navbar fixed-top navbar-expand-md navbar-dark primary-color">
        <a href="../gp/accueil.php" class="navbar-brand ">POSTE</a>
            <ul class="nav navbar-nav" >
            <li class="nav-item">
                    <a class="nav-link
                    font-weight-bold" 
                    href="../gp/accueil.php" >Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link 
                    font-weight-bold" 
                    href="../gp/Liste_personne.php" >Liste des Personnels</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link
                    font-weight-bold" 
                    href="../gp/parametre.php">Parametres</a>
                </li>
            </ul>
            <div class="form-user-icon-main-container" style="position:relative; left:380px">
                <div class="container-form-user-icon" style="display:flex;">
                    <div class="form-search-container">
                        <form class="form-inline">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width:300px; height:32px;">
                            <button class="btn bg-light btn-sm" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                            </button>
                        </form>
                    </div>

                    
                    <div class="icon-user-container">
                        <!--Icon user-->
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person " viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                </svg>
                                                <span class="badge rounded-pill bg-danger">8</span>
                                            </i>
                                                <?php
                                                echo("<h8>".$usePrenom."</h8>");
                                                ?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarScrollingDropdown">
                                        <li><a class="dropdown-item" href="#">Mon Compte</a></li>
                                       <!-- <li><a class="dropdown-item" href="#">Paramétre</a></li>-->
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="deconnexion.php">Déconnexion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <!--Icon user-->
                    </div>
                </div>
                
            </div>
            
    </div>
<!--Navbar-->
</body>
</html>
