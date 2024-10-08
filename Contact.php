<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Contact.css"/>
    <title>Contact</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #fff;
            
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
    <?php include 'menu.php'?>

    <section id="Formulaire-de-Contact">
        <h1>Formulaire de Contact</h1>
        <center>
            <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
                <form action="https://formspree.io/f/mjvzjnqy" method="POST">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="156">
                        <input type="hidden" name="_wpcf7_version" value="3.7.2">
                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f156-p143-o1">
                        <input type="hidden" name="_wpnonce" value="d1da331d93">
                    </div>
                    <p>
                        <span class="wpcf7-form-control-wrap Name">
                            <input type="text" name="Nom" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nom & Prénom" required>
                        </span>
                        <span class="wpcf7-form-control-wrap Email">
                            <input type="email" name="Email"  size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" required>
                        </span>
                        <span class="wpcf7-form-control-wrap Subject flat">
                            <select name="Subject" class="indent wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required>
                                <option value="Question">Question</option>
                                <option value="Recommandation">Recommandation</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </span>
                        <span class="wpcf7-form-control-wrap Message">
                            <textarea name="Message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" required></textarea>
                        </span>
                        <input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit btn">
                        <img class="ajax-loader" src="http://www.jordancundiff.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Envoie en cours ..." style="visibility: hidden;">
                    </p>
                    <div class="wpcf7-response-output wpcf7-display-none">
                    </div>
                </form>
            </div>
        </center>
    </section>

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
</html>
