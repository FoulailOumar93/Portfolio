<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Boutton.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>BTS SIO</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background: #fff;
        }
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
        /* Additional responsive adjustments */
        @media (max-width: 600px) {
            .social-links a {
                margin: 0 5px;
                font-size: 24px;
            }
            .social-links img {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <header>
        <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
        <input type="checkbox" id="toggle-1">
        <?php include 'menu.php'; ?>
    </header>
    
    <main>
        <section id="QU-EST-CE-QUE-LE-BTS-SIO">
            <h1>Qu'est-ce que le BTS SIO ?</h1>
        </section>
        
        <section id="BTS-SIO-Au-Lycee-Voillaume">
            <h1>BTS SIO au Lycée Voillaume</h1>
            <p>Je vous mets un fichier PDF qui vous permettra de vous renseigner sur le BTS SIO à Voillaume.</p>
            <button class="glow-on-hover" type="button" onclick="location.href='Plaquette_SIO_JPO_2018.pdf';">Télécharger</button>
            <p>Je vais vous présenter le BTS SIO que je réalise au lycée Voillaume (Aulnay-Sous-Bois) ainsi que ses différentes options qui sont disponibles. En somme, mes différents projets de niveau BTS sont disponibles sur cette page. Les étudiants de BTS SIO arrivent souvent d’un BAC PRO et d’un BAC STI2D et qui souhaitent continuer les études tout en débutant le monde du travail… avant de faire un BTS SIO.</p>
            <img src="Logo BTS-SIO.png" alt="Logo BTS SIO"/> 
        </section>
        
        <section id="BTS-Service-informatiques-aux-organisations">
            <h1>BTS Services informatiques aux organisations</h1>
            <p>Le Brevet de Technicien Supérieur Services informatiques aux Organisations (SIO) s'adresse à ceux qui souhaitent se former en deux ans aux métiers d’administrateur réseau ou de développeur pour intégrer directement le marché du travail ou continuer des études dans le domaine de l’informatique. Avec la nouvelle réforme, la matière de cybersécurité est également disponible.</p>
        </section>
        
        <section id="OPTION-SLAM">
            <h1>Option SLAM</h1>
            <img src="https://aymeric-cucherousset.fr/wp-content/uploads/2021/10/bts-sio-slam-768x512.jpg" alt="Option SLAM BTS SIO" width="200" height="200">
            <p>L’acronyme SLAM signifie « Solutions Logicielles et Applications Métier ».</p>
            <p>L’option SLAM est principalement destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance de programmes applicatifs. Grâce à des cours spécifiques, les diplômés seront capables de gérer un parc informatique ou d’administrer un réseau au sein d’une entreprise. Ils pourront également gérer l’intégration, la sécurisation et la configuration des serveurs, des postes clients et des équipements d’interconnexion.</p>
            <ul>
                <li>Développeur d’applications informatiques</li>
                <li>Chargé d’études informatiques</li>
                <li>Responsable des services applicatifs</li>
                <li>Programmeur analyste</li>
                <li>Programmeur d’applications</li>
                <li>Technicien d’études informatiques</li>
            </ul>
        </section>
        
        <section id="OPTION-SISR">
            <h1>Option SISR</h1>
            <img src="https://aymeric-cucherousset.fr/wp-content/uploads/2021/10/bts-sio-sisr.jpeg" alt="Option SISR BTS SIO">
            <p>L’acronyme SISR signifie « Solutions d’Infrastructure, Systèmes et Réseaux ».</p>
            <p>L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Cela correspond principalement à assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques, constituant les principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.</p>
            <ul>
                <li>Technicien réseau-télécoms</li>
                <li>Technicien systèmes et réseaux</li>
                <li>Administrateur systèmes et réseaux</li>
                <li>Support systèmes et réseaux</li>
                <li>Technicien d'infrastructure</li>
                <li>Pilote d'exploitation</li>
                <li>Technicien de production</li>
            </ul>
        </section>

        <section id="Que-faire-apres-un-BTS-SIO">
    <h1>Que faire après un BTS SIO ?</h1>
    <p>Après un BTS SIO, les étudiants spécialisés en SLAM (Solutions Logicielles et Applications Métiers) ou en SISR (Solutions d'Infrastructure, Systèmes et Réseaux) ont plusieurs options.</p>
    <p>Certains choisissent de poursuivre leurs études en intégrant une licence professionnelle dans le domaine de l'informatique, ce qui leur permet d'approfondir leurs connaissances et de se spécialiser davantage.</p>
    <p>D'autres préfèrent entrer directement dans la vie active en recherchant un emploi dans des entreprises de services informatiques, des SSII (Sociétés de Services en Ingénierie Informatique) ou des entreprises ayant des besoins en développement logiciel ou en gestion d'infrastructures informatiques.</p>
    <p>Certains étudiants optent également pour des formations complémentaires ou des certifications techniques pour renforcer leurs compétences et augmenter leur employabilité sur le marché du travail.</p>
    <p>Enfin, certains choisissent de créer leur propre entreprise et de se lancer dans l'entrepreneuriat en développant des solutions informatiques ou en proposant des services de gestion d'infrastructures informatiques.</p>
</section>

        </main>

    
</head>
<body>
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