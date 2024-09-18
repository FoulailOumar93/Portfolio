<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification</title>
    <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* CSS pour le nouveau contenu de footer */
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
            font-size: 30px; /* Adjusted for better visibility */
        }
        .social-links img {
            width: 50px; /* Uniform size for social icons */
            height: 50px;
            vertical-align: middle;
        }
        .footer p {
            margin-top: 20px;
        }
        .footer h4 {
            margin-bottom: 10px;
            color: #e91e63; /* Stylish pink underline effect removed for clarity */
        }

    </style>
</head>
<body>
    <!-- Inclusion du menu -->
    <header>
        <?php include 'menu.php'; ?>
    </header>

    <!-- Contenu principal -->
    <div class="container">
        <!-- Ajoutez ici le contenu de votre page -->
        <img src="Certificat OpenClassroom HTML5 et CSS3.jpg" alt="Certificat HTML5 et CSS3" width="40%" height="500px" />
        <img src="Certificat OpenClassroom PHP et MySQL.jpg" alt="Certificat PHP et MySQL" width="40%" height="500px" />
        <img src="Certificat OpenClassroom Maîtrisez les fondamentaux d'Excel.jpg" alt="Certificat Excel" width="40%" height="500px" />
    </div>

    <!-- Footer -->
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


    <!-- Lien vers vos fichiers JavaScript -->
    <script src="script.js"></script>
</body>
</html>
