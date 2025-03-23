<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
  <title>Parametres</title>
  <link rel="stylesheet" href="parametre.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
    <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/reglages.png" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="accueil.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Wallet</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="deconnexion.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
      <div class="main-top">
        <h1>Parametre</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <h3>Changer de Mot de Passe</h3>
          <form action="" method="post" id= "modif">
                <input class="input" type="text" name="email" id="email" placeholder= "Email">
                <input class="input" type="password" name="password" id="password" placeholder= "Old password"> 
                <input class="input" type="password" name="password" id="password" placeholder= "New password">        
                <button>Modifier</button>
          </form>
        </div>
        
      </div>
      <section class="main-course">
        <h1>Type de Paiement</h1>
        <div class="course-box">
          <ul>
            <li class="active">Choix</li>
            <li>En traitement</li>
            <li>Traité</li>
          </ul>
          <div class="course">
            <div class="box">
              <h3>PAYPAL</h3><br>
              <button>choisir</button>
              <i class="fab fa-paypal paypal"></i>
            </div>
            <div class="box">
              <h3>VISA</h3><br>
              <button>choisir</button>
              <i class="fab fa-cc-visa visa"></i>
            </div>
            <div class="box">
              <h3>MASTERCARD</h3><br>
              <button>choisir</button>
              <i class="fab fa-cc-mastercard mastercard"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
    </body>
</html>