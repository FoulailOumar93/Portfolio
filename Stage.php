<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage</title>    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        /* Styles généraux */
        body {
            line-height: 1.6;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .container {
            max-width: 1170px;
            margin: auto;
            padding: 0 15px;
        }

        /* Styles pour les sections */
        section {
            padding: 50px 0;
        }

        h1, h2 {
            text-align: center;
            color: #343a40;
        }

        h2 {
            margin-bottom: 30px;
        }

        p {
            color: #6c757d;
            font-size: 16px;
            line-height: 1.8;
        }

        /* Styles pour le footer */
        .footer {
            background-color: #212529;
            color: #ffffff;
            padding: 50px 0;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 20px;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-weight: 600;
            position: relative;
            color: #e91e63;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            background-color: #e91e63;
            height: 2px;
            width: 50px;
        }

        .social-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-links a {
            display: inline-block;
            margin-right: 15px;
        }

        .social-links img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        /* Styles pour les médias */
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <!-- Menu inclus ici -->
        <?php include 'menu.php'; ?>  
    </header>
    <section id="Stage">
        <div class="container">
            <h1>Stage</h1>
            <section id="Stage première année">
                <h2>Stage première année</h2>
                <fieldset>
                    <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Mairie_la_Courneuve.JPG/1200px-Mairie_la_Courneuve.JPG" alt="Mairie de la Courneuve" width="400" height="300">
                    <p>
                        Stage à la Mairie de la Courneuve, service informatique <br>
                        Période de stage : 23 Mai 2022 au 16 Juin 2022 <br>
                        La fonction principale du service est d’aider les personnes dans le milieu professionnel qui ont des problèmes techniques ou panne informatique. Mes principales missions :
                        <br>
                        Changement de poste pour le personnel et service liés à la Mairie qui étaient sous Windows 7 à Windows 10. Les interventions avec le tuteur étaient principalement pour le dépannage des problèmes informatiques du personnel de la Mairie.
                        Selon le niveau du problème niveau 1 à niveau 2. J'ai appris à réparer des PC défectueux et je les ai mis en état de marche. J'ai mis les PC sous Windows 11, par le logiciel Rufus. Ce même logiciel m'a permis personnellement de remettre en marche mon PC portable qui était hors service.
                        <br>
                        Les interventions se font sur place ou à distance selon le problème.
                        On utilisait le logiciel GLPI, c'est un logiciel de gestion des actifs informatiques libre et open source qui permet aux organisations de gérer efficacement leurs ressources informatiques. Il offre une interface web pour gérer les actifs, suivre les stocks, gérer les tickets de support et gérer les contrats et les licences.
                        GLPI signifie "Gestionnaire Libre de Parc Informatique" en français. Il a été initialement publié en 2003 et est depuis devenu un outil populaire pour la gestion des actifs informatiques.
                        Certaines des principales fonctionnalités de GLPI incluent :
                        <br>
                        - Gestion de l'inventaire des actifs <br>
                        - Gestion des tickets <br>
                        - Gestion des contrats et des licences <br>
                        - Gestion de la base de connaissances <br>
                        - Rapports et statistiques <br>
                        - Intégration avec d'autres outils informatiques <br>
                        GLPI est utilisé par une variété d'organisations, y compris les petites entreprises, les institutions éducatives et les agences gouvernementales. Il est disponible dans plusieurs langues et peut être personnalisé pour répondre aux besoins spécifiques de l'organisation. 
                        Cette expérience était enrichissante et m'a permis d'acquérir de nouvelles compétences informatiques.
                    </p>
                </fieldset>
            </section>
            <section id="Stage deuxième année">
                <h2>Stage deuxième année</h2>
                <fieldset>
                    <p>
                        Stage au Lycée Voillaume <br>
                        Période de stage : 16 Janvier 2023 au 13 Mars 2023 <br>
                        Mon stage consistait à faire un site en Linux. En premier on a rédigé un cahier de charge. En suite on a fait un maquettage et ensuite on a commencé à faire le site.
                        <br>
                        - Création d'un site de formation pour l’entreprise sur le thème Cupper. <br>
                        - Conception d'une maquette. <br>
                        - Utilisation du langage de programmation Hugo. <br>
                        - Mise en ligne du site sur Gitlab. <br>
                    </p>
                    <p>
                        Voici le lien du site créé avec mes camarades : <a href="https://group_stage.gitlab.io/project1/"> Site de formation Bureau 89</a>
                    </p>
                </fieldset>
                <fieldset>
                    <p>
                        Stage au NTIC FORMATION CENTER <br>
                        Période de stage : 15 Janvier 2024 au 15 Mars 2024 <br>
                        Mon stage consistait à accomplir les missions demandées par mon tuteur de stage. La première mission consistait à créer un site similaire à IMDB, où les utilisateurs peuvent donner leur avis et attribuer une note. Ce site a été développé en PHP et SQL, avec des fonctionnalités CRUD. Ma deuxième mission, réalisée en Symfony, consistait à permettre à l'administrateur Jean Dupont de publier des articles sur son blog, que les internautes peuvent lire et commenter après s'être inscrits. Jean Dupont, en tant qu'administrateur, peut également visualiser :
                        <br>
                        - Un tableau de bord <br>
                        - Une liste des catégories avec la possibilité de les afficher <br>
                        - Une liste des articles avec la possibilité de les afficher <br>
                        - Une liste des tags avec la possibilité de les afficher <br>
                        - Des statistiques sur les utilisateurs et les commentaires <br>
                    </p>
                </fieldset>
            </section>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://x.com/oumar_foulail"><img src="X Icon.jpg" alt="Twitter Icon"></a>
                        <a href="https://www.instagram.com/oumar_foulail93/"><img src="Instagram Icon.png" alt="Instagram Icon"></a>
                        <a href="https://www.linkedin.com/in/oumar-foulail-9b0232178/"><img src="LinkedIn Icon.png" alt="LinkedIn Icon"></a>
                        <a href="https://github.com/FoulailOumar93"><img src="GitHub Icon.png" alt="Follow on Github"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <p style="text-align: center;">Copyright © <script>document.write(new Date().getFullYear());</script> Tous Droits Réservés Foulail Oumar</p>
</body>
</html>
