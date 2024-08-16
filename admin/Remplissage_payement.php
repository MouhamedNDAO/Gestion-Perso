<?php
   // session_start();

    include("../session_conn.php");

    
    

    if(isset($_POST["submit"]) )
                    {
                        
                        $email_payement= $_POST["email"];
                        $date_payement = $_POST["date"];
                        $time_payement =$_POST["time"];
                        $montant =$_POST["montant"];
                        
                            //Insertion dans la base de donnée

                            $insertion = ("INSERT INTO 
                            payement (email,date_payement,heure_payement,montant) 
                            VALUES(:email,:date_payement,:heure_payement,:montant)")OR die(print_r($db->errorInfo()));
                             
                            $insert =$connexion->prepare($insertion);

                            $insert->bindParam(':email', $email_payement);
                            $insert->bindParam(':date_payement', $date_payement);
                            $insert->bindParam(':heure_payement', $time_payement);
                            $insert->bindParam(':montant',$montant);

                            $insert->execute();

                           echo("bien enregister");
                    }else{
                        //header("location:Remplissage_payement.php");
                       // echo("somethings wrong");
                    }
                    var_dump($_POST);
                     //deconnexion de l'admin
                        if(isset($_GET['deconnexion']))
                        { 
                        if($_GET['deconnexion']==true)
                        { 
                        session_unset();
                        header("location:login.php");
                        }
                        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>payement</title>
        <link rel="stylesheet" href="remplissage.css" />
          <!-- Font Awesome Cdn Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
             <h2>
                <?php
                session_start();
                if($_SESSION['username'] !== ""){
                $user = $_SESSION['username'];
                // afficher un message
                echo "Bonjour $user, Ravis de vous revoir !!";
                }
                ?>
             </h2>
    
        </div>
        <div id="card">
            <h3>Allocation de Paiement</h3>
            <form action="Remplissage_payement.php" method="POST">
                <input class="input" name="email" type="email" placeholder ="email">
                <input class="input" name="date" type="date">
                <input class="input" name="time" type="time">
                <input class="input" name="montant" type="floatval" placeholder ="Montant">
                <button name="submit" type="submit">payer</button>
            </form>
        </div>
        

        <div id="dec">
            <a href="adminlog.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
            </a>  
        </div>
    </body>
</html>