<?php
    session_start();

    //connexion base de données 
    include("Connexion_base_de_données.php");

    if(isset($_SESSION["Email"])){
        $userEmail = $_SESSION["Email"];
        $sql="SELECT * FROM gestion";
        $request=$connexion->query($sql);

        while($data_db = $request->fetch()){
            if($userEmail == $data_db["email"]){

                $useName= $data_db['nom'];
                $usePrenom= $data_db['prenom'];
                $useFonction= $data_db['fonction'];
                $useSpecialite= $data_db['specialite'];
                $useId= $data_db['id'];
        
            }
        }
    }
    
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
<body >
        <?php
        include("navbar.php");
        ?>
      

    <br><br>
    <div class="container-fluid">
        
          <!--Card Présentation-->
                <div class="card">
                    <img class="card-img-top img-fluid" src="../Image/28_sept_2018_Bannière-site-UVS_corporate.jpg" alt="Card image cap" style="width:fit-content; height:fit-content;">
                    <div class="card-body " style="display:flex;">
                        <div class="Gestion_containeur">
                            <h2 class="card-title">SEN POSTE DE SANTE</h2>
                            <p class="card-text">Ce site est dedie aux peronnels des postes de sante afin qu'ils puisse y trouver les directives qu'ils doivent suivre
                                pour le bon fonctionnement des activites.</p>
                        </div>
                        <div class="FONEk text-center" >

                                <!--Text animation wave-->
                                    <svg class="animation_fonek" style="width:200px; height:50px" viewbox="0 0 100 20">
                                        <defs>
                                            <linearGradient id="gradient">
                                            <stop color="#000"/>
                                            </linearGradient>
                                            <pattern id="wave" x="0" y="-0.5" width="100%" height="100%" patternUnits="userSpaceOnUse">
                                            <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
                                                <animateTransform
                                                    attributeName="transform"
                                                    begin="0s"
                                                    dur="1.5s"
                                                    type="translate"
                                                    from="0,0"
                                                    to="40,0"
                                                    repeatCount="indefinite"/>
                                            </path>
                                            </pattern>
                                        </defs>
                                        <text text-anchor="middle" x="50" y="15" font-size="10" fill="white" fill-opacity="0.1">VOTRE BIEN ETRE NOTRE CREDO</text>
                                        <text text-anchor="middle" x="50" y="15" font-size="10" fill="url(#wave)"  fill-opacity="1" >VOTRE BIEN ETRE NOTRE CREDO</text>
                                    </svg>
                                <!--Text animation wave-->

                        </div>  
                    </div>
                </div>
            <!--Card Présentation-->

            </br>
            </br>

            <!--Grille de carte -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 ">
                        <div class="row">
                            <div class="col-md-4">
                            <img src="img/depistage diabete.jpeg" class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8 bg-primary">
                            <div class="card-body">
                                <h5 class="card-title text-white"><b>Journées de sensibilisation et de depistage du diabete</b></h5>
                                <p class="card-text text-white"> Dans le cadre de la célébration de la journée mondiale de lutte contre le diabète, l'association des femmes du Ministère 
                                    de la Santé et de l'Action sociale, en collaboration avec la division de lutte contre les maladies non transmissibles, a organisé une séance de dépistage 
                                    du diabète et de l'hypertension artérielle pour les agents dudit ministère. Ainsi, près de 200 agents ont été dépistés et sensibilisés.
                                </p>
                                <p class="text-white"><b>cette journee auras lieu dans le centre de sante de Cambererne 2 </b></p>
                                <p class="card-text text-white"><small>Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row ">
                            <div class="col-md-4">
                            <img src="img/sang.jpeg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-8 bg-success">
                            <div class="card-body">
                                <h5 class="card-title text-white"><b>Journée mondiale du don de sang</b></h5>
                                <p class="card-text text-white">" J'exhorte tout un chacun à communiquer avec son entourage pour inciter tout le monde à accepter de prendre 30mn de son temps pour effectuer un don de sang et contribuer à sauver des vies.
Le défi est grand puisque le Sénégal ne dispose que de 6,4 dons de sang pour 1.000 habitants alors que les besoins sont estimés à 10 dons pour 1000 habitants.
Le Sénégal a une forte tradition d'entraide et de solidarité et je compte sur la mobilisation de tous, et particulièrement des jeunes pour résorber ce gap.
"Extrait du message du Ministre de la Santé et de L'action sociale donc n'hesitons pas a vous rendre dans le centre de sante le plus proche le 24 Aout afin de pouvoir contribuer a ce noble cause</p>
                                <p class="card-text text-white"><small>Last updated 10 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 ">
                        <div class="row">
                            <div class="col-md-4">
                            <img src="img/sang.jpeg" class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8 " style="background-color:orange">
                            <div class="card-body">
                                <h5 class="card-title text-white"><b>Formation sur flutter</b></h5>
                                <p class="card-text text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab distinctio consequatur quasi numquam, labore doloribus. Voluptas, aperiam cupiditate voluptatem quibusdam ratione vel reiciendis maiores reprehenderit unde commodi atque. Assumenda, dignissimos.
                                </p>
                                <p class="text-white"><b>cette conférence ce tiendra le samedi 14 novembre 2021 à l'emphithéâtre du ENO de dakar </b></p>
                                <p class="card-text text-white"><small>Last updated 2 hours ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grille de carte -->
            

         <!--Onglet-->


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#home" data-toggle="tab"   role="tab" >Liste Personnels Present</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#profile" data-bs-toggle="tab"  role="tab" >Payement</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#contact" data-toggle="tab"  role="tab">Calendrier des tâches</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!--Liste personnel-->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table table-bordered table-primary table-striped">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First-Name</th>
                                    <th scope="col">Last-Name</th>
                                    <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <?php
                                    $reponse=$connexion->query("SELECT * FROM gestion");
                                    while($données=$reponse->fetch()){
                                        $email=$données["email"];
                                        $prenom=$données["prenom"];
                                        $nom=$données["nom"];
                                ?>
                                      <tbody>
                                      <tr>
                                      <th scope="row">1</th>
                                      <td><?php echo("<p>"."$prenom"."</p>");?></td>
                                      <td><?php echo("<p>"."$nom"."</p>");?></td>
                                      <td><?php echo("<p>"."$email"."</p>");?></td>
                                      </tr>
                                  </tbody>
                                    <?php
                                        }
                                    ?> 
                                
                            </table>
                </div>
                <!--Liste personnel-->

                <!--Payement-->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card bg-primary">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../Image/Payement_vector.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">

                                    <!--header payement-->
                                    <h5 class="card-title text-center" style="color:white;">Payement</h5>
                                    <!--header payement-->

                                    <!--Informations Allocations de payement-->
                                    <p class="card-text" style="color:white;">Bonsoir votre allocations de Payement du mois de Novembre n'est pas encore disponible</p>
                                    <!--Informations Allocations de payement-->

                                    <!--Tableau Payement-->
                                    <table class="table  table-bordered table-striped">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th scope="col">Jour</th>
                                                        <th scope="col">Mois</th>
                                                        <th scope="col">Année</th>
                                                        <th scope="col">Heure</th>
                                                        <th scope="col">Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-light">
                                                    <tr>
                                                        <th scope="row">20</th>
                                                        <td>Avril</td>
                                                        <td>2024</td>
                                                        <td>12h00</td>
                                                        <td>50.000 Fcfa</td>
                                                    </tr>
                                                </tbody>
                                    </table>
                                    <!--Tableau Payement-->

                                    <!--container Solde employé-->
                                        <div class="Solde" style="display:flex; justify-content:space-between">
                                            <div class="Solde_label">
                                                <h4 style="color:white;">Votre solde:</h4>
                                            </div>
                                            <div class="Montant_solde">
                                                <h4 style="color:white;">50.000 Fcfa</h4>
                                            </div>
                                        </div>
                                    <!--container Solde employé-->

                                    <!--Date de mis à jour Table payement-->
                                        <p class="card-text" style="color:white;"><small >Last updated 3 mins ago</small></p>
                                    <!--Date de mis à jour Table payement-->

                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!--Payement-->

                <!--Calendrier de tâches--> 
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-bordered table-success table-striped">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Heures/Jours</th>
                        <th scope="col">Lundi</th>
                        <th scope="col">Mardi</th>
                        <th scope="col">Mecredi</th>
                        <th scope="col">Jeudi</th>
                        <th scope="col">Vendredi</th>
                        <th scope="col">Samedi</th>
                        <th scope="col">Dimanche</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">8h-10h</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">10h-12h</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr class="table-danger">
                        <th scope="row">12h-13h</th>
                        <td colspan="6" class="text-center">Pause</td>
                        </tr> 
                        <tr>
                        <th scope="row">13h-15h</th>
                            <td>Larry</td>
                            <td>Dieng</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">15h-17h</th>
                            <td>Bird</td>
                            <td>Fall</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <!--Calendrier de tâches--> 
           
        <!--Onglet-->

    </div>

    <!--Footer Page-->

    <footer class="bg-primary text-center text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating" href="#!" role="button"
                            ><i class="fab fa-facebook-f"></i
                        ></a>

                        <!-- Twitter -->
                        <a class="btn btn-secondary btn-floating" href="#!" role="button"
                            ><i class="fab fa-twitter"></i
                        ></a>

                        <!-- Google -->
                        <a class="btn btn-success btn-floating" href="#!" role="button"
                            ><i class="fab fa-google"></i
                        ></a>

                        <!-- Instagram -->
                        <a class="btn btn-danger btn-floating" href="#!" role="button"
                            ><i class="fab fa-instagram"></i
                        ></a>

                        <!-- Linkedin -->
                        <a class="btn btn-white btn-floating" href="#!" role="button"
                            ><i class="fab fa-linkedin-in"></i
                        ></a>

                        <!-- Github -->
                        <a class="btn btn-dark btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-github"></i
                        ></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2024 Copyright:
                    <a class="text-white" href="#"><b>Gestion employe</b></a>
                    <h4>By UN-CHK Etudiant</h4>
                </div>
                <!-- Copyright -->
            </footer>

    <!--Footer Page-->

    <!--j Query and poper plugins-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--j Query and poper plugins-->
</body>
</html>