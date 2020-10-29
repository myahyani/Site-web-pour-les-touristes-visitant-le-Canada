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
            <li><a  href="index.html">Accueil</a></li>
            <li class="logo"><a href="index.html">Yahyani<span class="text-primary">Tours<i class="ri-compass-discover-line"></i></span></a></li>
          </ul>
    </div>
   
    <div class="section-0">
       <div class="section-4">
           <h1>Formulaire de réclamation</h1>
           <p>Veuillez nous envoyer les détails de l'incident que vous souhaitez signaler. Notre centre de réclamation analysera votre réclamation et prendra les mesures appropriées afin que la situation signalée ne se reproduise plus à l'avenir.</p>
            <form action="F_plainte.php" method="post">
                <div class="inline">
                    <div class="input-group">
                        <label for="Nom">Nom</label><br>
                        <input class="input-text" id="Nom" name="Nom" required type="text">
                    </div>
                    <div class="input-group">
                        <label for="Prenom">Prénom</label><br>
                        <input class="input-text" id="Prenom" name="Prenom" required type="text">
                    </div>
                </div>
                <div class="inline" style="margin-bottom: 15px;">
                        <div class="input-group">
                            <label for="email">E-mail</label>
                            <input class="input-text" id="email" name="email" required type="email">
                        </div>
                        <div class="input-group">
                            <label for="contre">Nom de la personne contre qui la plainte est déposée</label>
                            <input class="input-text" id="contre" name="contre" required type="text">
                        </div>
                    </div>
                <label for="Plainte">Les détails spécifiques de la plainte</label><br>
                <textarea class="input-text" name="Plainte" id="Plainte" cols="30" rows="10" required></textarea>
                <div class="wid-alite">
                    <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
                </div>
            </form>
       </div>
    </div>
    
    
    
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
                <h3>Contactez nous</h3>
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