<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    /* CSS commun */
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.5;
      margin: 0;
      padding: 0;
	  background-color: #fff;
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Cette ligne garantit que le corps occupe au moins la hauteur de l'écran */
    }

    /* Contenu CSS */
    .wrapper {
      flex: 1; /* Cette ligne permet au contenu de remplir l'espace disponible */
      text-align: center;
      padding: 20px;
    }

    /* Texte de démonstration CSS */
    .typing-demo {
      font-family: 'Poppins', sans-serif; /* Utilise la police Poppins */
      font-size: 24px; /* Taille de la police */
      color: #333; /* Couleur du texte */
      margin-top: 20px; /* Espace en haut du texte */
    }

    /* Footer CSS */
    .footer {
      background-color: #24262b;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      margin-top: auto; /* Cette ligne pousse le footer vers le bas de la page */
    }

    .social-links {
      display: inline-block;
      margin: 0 auto;
      padding: 0;
    }

    .social-links a {
      margin: 0 10px;
      color: #fff;
      font-size: 30px;
    }

    .social-links img {
      width: 50px;
      height: 50px;
      vertical-align: middle;
    }

    /* Ajoutez des règles de style supplémentaires au besoin */
  </style>
</head>
<body>

<header>
  <?php include 'menu.php' ?>
</header>

<div class="wrapper">
  <div class="typing-demo">
    Bienvenue dans le Portfolio de Foulail Oumar
  </div>
</div>
<br>

<footer class="footer">
  <h4>Follow Us</h4>
  <div class="social-links">
    <a href="https://x.com/oumar_foulail"><img src="X Icon.jpg" alt="Follow on Twitter"></a>
    <a href="https://www.instagram.com/oumar_foulail_realmadrid/"><img src="Instagram Icon.png" alt="Follow on Instagram"></a>
    <a href="https://www.linkedin.com/in/oumar-foulail-9b0232178/"><img src="LinkedIn Icon.png" alt="Follow on LinkedIn"></a>
	<a href="https://github.com/FoulailOumar93"><img src="GitHub Icon.png" alt="Follow on Github"></a>
</div>
  <p>Copyright © 2024 Tous Droits Réservés Foulail Oumar</p>
</footer>

</body>
</html>
