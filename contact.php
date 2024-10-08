<?php
session_start();
//include("session_conn.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>  
  <title>Gestion | Service central d'Authentification (SCG)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="contact.css">
  
</head>
<body>



  <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://th.bing.com/th/id/R.1488a3624a54e976ae585dd1a7481741?rik=siJ%2f7H9ppZ%2bpXw&pid=ImgRaw&r=0" alt=""/>
            <h3>UN-CHK</h3>
            <p>FONEK FOFOU LA!</p>
            <button type="submit" class="btn btn-outline-success " > <a href="connexion.php"> Se Connecter</a></button>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Medecin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Infirmier</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Ajouter comme Medecin</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group" action="recup_donne.php" method="POST">
                                <input type="text" id="prenom" class="form-control" placeholder="Prenom *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text"  id="nom" class="form-control" placeholder="Nom *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="adresse" class="form-control"  placeholder=" adresse *" value="" />
                            </div>
                            <div class="form-group">
                              <input type="date" id="anniversaire" class="form-control"  placeholder=" Anniversaire *" value="" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="fonction" class="form-control" placeholder="Fonction *" value="" />
                            </div>
                            <div class="form-group">
                              <input type="text" id="specialite" class="form-control" placeholder="Specialite *" value="" />
                          </div>
                          <div class="form-group">
                            <select class="form-control">
                                <option class="hidden"  selected disabled>Homme</option>
                                <option>Femme</option>
                            </select>
                          </div>
                            <div class="form-group">
                                <input type="password" minlength="10" maxlength="10" class="form-control" placeholder="Mot de passe *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirmer le Mot de passe *" value="" />
                            </div>
                            <button type="submit" class="btn btn-primary " >S'inscrire</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Ajouter comme Infirmier</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group" action="recup_donne.php" method="POST">
                                <input type="text" id="prenom" class="form-control" placeholder="Prenom *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text"  id="nom" class="form-control" placeholder="Nom *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="adresse" class="form-control"  placeholder=" adresse *" value="" />
                            </div>
                            <div class="form-group">
                              <input type="date" id="anniversaire" class="form-control"  placeholder=" Anniversaire *" value="" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="fonction" class="form-control" placeholder="Fonction *" value="" />
                            </div>
                            <div class="form-group">
                              <input type="text" id="specialite" class="form-control" placeholder="Specialite *" value="" />
                          </div>
                          <div class="form-group">
                            <select class="form-control">
                                <option class="hidden"  selected disabled>Homme</option>
                                <option>Femme</option>
                            </select>
                          </div>
                            <div class="form-group">
                                <input type="password" minlength="10" maxlength="10" class="form-control" placeholder="Mot de passe *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirmer le Mot de passe *" value="" />
                            </div>
                            <button type="submit" class="btn btn-primary " >S'inscrire</button>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>				                            
</body>
</html>


