<?php
    include("session_conn.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste personnel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style = "background-image:url(img/personnels.jpg); background-size: cover">
    <?php
        include "navbar.php";
        ?><br><br><br><br><br><br>
        <h1 style="text-style:bold; align:center; text-color:white">Liste personnels</h1>

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
    </body>
</html>
