<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Profil.jpg" />
    <link rel="stylesheet" href="Boutton.css"/>

    <?php include 'menu.php';?>

    <title>Profil de Oumar Foulail</title>    

    <style>
        /* Styles CSS spécifiques à cette page */
        .footer {
            background-color: #24262b;
            padding: 20px 0;
            text-align: center;
        }
        .social-links {
            display: inline-block;
            margin: 0 auto;
            padding: 0;
        }
        .social-links a {
            margin: 0 10px;
            color: #fff;
            font-size: 30px; /* Ajusté pour une meilleure visibilité */
        }
        .social-links img {
            width: 50px; /* Taille uniforme pour les icônes sociales */
            height: 50px;
            vertical-align: middle;
        }
        .footer p {
            margin-top: 20px;
        }
        .footer h4 {
            margin-bottom: 10px;
            color: #e91e63; /* Couleur pour un effet de soulignement stylisé supprimé pour plus de clarté */
        }
    </style>
</head>
<body>
    <!-- Section À propos de moi -->
    <section id="a-propos-de-moi" class="container">
        <h1>À PROPOS DE MOI</h1>
        <p>
            Je m’appelle Foulail Oumar, j’ai 21 ans. Je suis actuellement en 
            <a href="BTS SIO.php">Brevet Technicien Supérieur (BTS) en SLAM (Solutions Logicielles et Applications Métier)</a> 
            à Aulnay-Sous-Bois. Depuis mon plus jeune âge, je me passionne pour l’informatique. Je me suis orienté vers un 
            BAC STMG spécialité Mercatique au Lycée Jacques Brel. Durant ces années de lycée, j'ai continué à nourrir ma passion 
            pour l'informatique, le développement et la cybersécurité, ce qui a motivé mon choix pour l'option SLAM.
        </p>
    </section>

    <!-- Section Expérience professionnelle -->
    <section id="experience-professionnelle" class="container">
        <h1>EXPÉRIENCE PROFESSIONNELLE</h1> 
        <ul>
            <li>Stage d'observation à la Médiathèque John Lenon.</li>
            <li>Stage de première année dans la Mairie de la Courneuve dans le service informatique.</li>
            <li>Stage de deuxième année dans le Lycée Voillaume.</li>
        </ul>
        <h2>Voici mon CV</h2>
        <button class="glow-on-hover" type="button" onclick="window.location='CV_Oumar FOULAIL.pdf';">Télécharger CV</button>
    </section>



    <!-- Section Mes Qualités -->
    <section id="mes-qualites" class="container">
        <h1>MES QUALITÉS</h1>
        <ul>
            <li>Rigoureux</li>
            <li>Curieux</li>
            <li>Persévérant</li>
            <li>Passionné</li>
        </ul>
    </section>
<br>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <h4>Follow Us</h4>
            <div class="social-links">
                <a href="https://x.com/oumar_foulail"><img src="X Icon.jpg" alt="Follow on Twitter"></a>
                <a href="https://www.instagram.com/oumar_foulail_realmadrid/"><img src="Instagram Icon.png" alt="Follow on Instagram"></a>
                <a href="https://www.linkedin.com/in/oumar-foulail-9b0232178/"><img src="LinkedIn Icon.png" alt="Follow on LinkedIn"></a>
                <a href="https://github.com/FoulailOumar93"><img src="GitHub Icon.png" alt="Follow on Github"></a>
            </div>
        </div>
        <p>Copyright © 2024 Tous Droits Réservés Foulail Oumar</p>
    </footer>
</body>
</html>
