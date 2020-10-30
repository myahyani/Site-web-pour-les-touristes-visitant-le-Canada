<!--
 * @author Mohamed Yahyani
 * @Code_Permanent: YAHM14059203
 * @Courriel: yahyani.mohamed@courrier.uqam.ca
 * @Cours: INF3190-40
 * @version 2020-10-29
-->
<?php

$text= "\nNom:".$_POST["Nom"]." Prénom:".$_POST["Prenom"]." E-mail:".$_POST["email"]." Contre:".$_POST["contre"]." Plainte:".$_POST["Plainte"];
file_put_contents('plaintes.txt', $text, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title>YahyaniTours</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div class="info" id="info">
        Appelez-nous au : +1 (514) 863-2918 📞| De 8h à 21h | 7j / 7j 
    </div>
    <div class="nav">
        <ul id="header">
            <li><a href="plainte.php">Plainte</a></li>
            <li><a href="Cities.php?qst=Ottawa">Ottawa</a></li>
            <li><a href="Cities.php?qst=Montreal">Montreal</a></li>
            <li><a href="Cities.php?qst=Hamilton">Hamilton</a></li>
            <li><a href="Cities.php?qst=Vancouver">Vancouver</a></li>
            <li><a href="Cities.php?qst=Toronto">Toronto</a></li>
            <li><a href="index.html">Accueil</a></li>
            <li class="logo"><a href="index.html">Yahyani<span class="text-primary">Tours<i class="ri-compass-discover-line"></i></span></a></li>
          </ul>
    </div>
   
    <div class="section-0">
       <div class="section-4">
           <h1><i class="ri-check-double-line"></i> La réclamation a été envoyée avec succès</h1>
       </div>
    </div>
    <div style="height: 65%;"></div>
    
    
    <!--  FOOTER START -->

    <div class="footer">
        <div class="inner-footer">
            <div class="footer-items">
                <h1>Yahyani<span class="text-primary">Tours<i class="ri-compass-discover-line"></i></span></h1>
                <p>VISITES À PIED DANS <br>CINQ VILLES CANADIENNES.</p>
            </div>
            <div class="footer-items">
                <h3>Liens rapides</h3>
                <ul>
                    <li><a href="index.html">
                        Accueil</a></li>

                    <li><a href="plainte.php">
                        Plainte</a></li>

                    <li><a href="apropos.html">
                        À propos</a></li>

                </ul>
            </div>
            <div class="footer-items">
                <h3>Villes</h3>
                <ul>
                    <li><a href="Cities.php?qst=Toronto">
                        Toronto</a></li>

                    <li><a href="Cities.php?qst=Vancouver">
                        Vancouver</a></li>

                    <li><a href="Cities.php?qst=Hamilton">
                        Hamilton</a></li>

                    <li><a href="Cities.php?qst=Montreal">
                        Montreal</a></li>

                    <li><a href="Cities.php?qst=Ottawa">
                        Ottawa</a></li>

                </ul>
            </div>
            <div class="footer-items">
                <h3>Contactez-nous</h3>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Montreal Gouin Boulevard, Canada</li>
                    <li><i class="fa fa-envelope"></i>yahyaniTours@gmail.com</li>
                    <li><i class="fa fa-phone"></i>+1 (514) 863-2918</li>
                </ul>
                <div class="social-media">
                    <a href="#"><i class="ri-instagram-fill"></i></a>
                    <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="#"><i class="ri-youtube-fill"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>