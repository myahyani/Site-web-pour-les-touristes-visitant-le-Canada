<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <title>YahyaniTours</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div class="info" id="info">
        Appelez-nous au : +1 (514) 863-2918 📞| De 8h à 21h | 7j/7 
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
            <li style="float:left"><a href="index.html">Yahyani<span class="text-primary">Tours<i class="ri-compass-discover-line"></i></span></a></li>
          </ul>
    </div>
   
    <div class="section-0" style="margin-top:15px">
       <div class="section-4">
           <h1 style="margin-bottom: 15px;">Formulaire de réclamation</h1>
           <p>Veuillez nous envoyer les détails de l'incident que vous souhaitez signaler. Notre centre de réclamation analysera votre réclamation et prendra les mesures appropriées afin que la situation signalée ne se reproduise plus à l'avenir.</p>
            <form action="F_plainte.php" method="post">
                <div class="inline">
                    <div class="input-group">
                        <label for="Nom">Nom</label><br>
                        <input class="input-text" id="Nom" name="Nom" required type="text">
                    </div>
                    <div class="input-group">
                        <label for="Prenom">Prénom </label><br>
                        <input class="input-text" id="Prenom" name="Prenom" required type="text">
                    </div>
                </div>
                <div class="inline" style="margin-bottom: 15px;">
                        <div class="input-group">
                            <label for="email">E-mail </label>
                            <input class="input-text" id="email" name="email" required type="email">
                        </div>
                        <div class="input-group">
                            <label for="contre">Nom de la personne contre qui la plainte est déposée </label>
                            <input class="input-text" id="contre" name="contre" required type="text">
                        </div>
                    </div>
                <label for="Plainte">Les détails spécifiques de la plainte</label><br>
                <textarea class="input-text" style="width: 95%;margin-bottom: 15px;" name="Plainte" id="Plainte" cols="30" rows="10" required></textarea>
                <div style="width: 98%;text-align: right;">
                    <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
                </div>
            </form>
       </div>
    </div>
    <div style="height: 1000px;"></div>
    
    
<!--  FOOTER START -->
  
<div class="footer">
    <div class="inner-footer">
        <div class="footer-items">
            <h1 style="margin-bottom: 5px;">Yahyani<span class="text-primary">Tours<i class="ri-compass-discover-line"></i></span></h1>
            <p>WALKING TOURS IN FIVE<br>CANADIAN CITIES.</p>
        </div>
        <div class="footer-items">
            <h3>Quick Links</h3>
            <ul>
                <a href="index.html"><li>Accueil</li></a>
                <a href="plainte.php"><eli>Plainte</eli></a>
                <a href="aboutus.html"><li>About</li></a>
            </ul>
        </div>
        <div class="footer-items">
            <h3>Cities</h3>
            <ul>
                <a href="Cities.php?qst=Toronto"><li>Toronto</li></a>
                <a href="Cities.php?qst=Vancouver"><li>Vancouver</li></a>
                <a href="Cities.php?qst=Hamilton"><li>Hamilton</li></a>
                <a href="Cities.php?qst=Montreal"><li>Montreal</li></a>
                <a href="Cities.php?qst=Ottawa"><li>Ottawa</li></a>
            </ul>
        </div>
        <div class="footer-items">
            <h3>Contact us</h3>
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

<script src="script.js"></script>
</body>
</html>
