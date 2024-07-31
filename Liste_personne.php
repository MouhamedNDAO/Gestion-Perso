<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste personnel</title>
    </head>
    <body>
    <?php
        include("navbar.php");
        ?>
        <h1>Liste personnel</h1>

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
