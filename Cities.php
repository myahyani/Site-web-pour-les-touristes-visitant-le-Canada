<!--
 * @author Mohamed Yahyani
 * @Code_Permanent: YAHM14059203
 * @Courriel: yahyani.mohamed@courrier.uqam.ca
 * @Cours: INF3190-40
 * @version 2020-10-29
-->
<?php
$city=$_GET["qst"];
if($city=="Toronto"){
    $img="img/hero-toronto.jpg";
    $title="DÉCOUVREZ LE CÔTÉ LOCAL DE <span class=\"text-primary\">TORONTO</span><br>REJOIGNEZ-NOUS POUR UNE VISITE GUIDÉE PAR DES EXPERTS";
    $paragraph="L'équipe YahyaniTour Toronto propose des visites régulières tout au long de l'année (y compris nos célèbres visites à pied) et est le fournisseur officiel des aventures urbaines à Toronto. Nos guides sont également disponibles pour animer des visites pour des voyages scolaires, des événements spéciaux, des familles, des individus et des groupes de toutes sortes. Les guides qui dirigent nos visites de la ville sont engageants, divertissants et experts dans tout ce qui concerne Toronto !.";
    $Duration="60 minutes";
    $Price="$ 279 ";
}elseif($city=="Vancouver"){
    $img="img/hero-Vancouver.jpg";
    $title="VOIR <span class=\"text-primary\">VANCOUVER</span> SOUS UNE LUMIÈRE DIFFÉRENTE <br>EXPÉRIMENTER CETTE VILLE DIVERSÉE À LA MANIÈRE LOCALE";
    $paragraph="Bénéficiant d'une vue imprenable sur les montagnes et les criques, une histoire riche mais tumultueuse et une culture diversifiée et progressive, Vancouver est une métropole comme peu d'autres. Nos guides locaux sont idéalement placés pour partager les hauts et déballer les bas dans cette ville de contrastes, et illustreront les histoires du passé fascinant de Vancouver avec des arrêts dans les attractions importantes de Vancouver ainsi que dans certains de leurs sites moins connus préférés.";
    $Duration="120 minutes";
    $Price="$159";
}elseif($city=="Hamilton"){
    $img="img/hero-hamilton.jpg";
    $title="ENTENDRE L'HISTOIRE DU BORD DE L'EAU D'<span class=\"text-primary\">HAMILTON</span> PAR UN EXPERT LOCAL!";
    $paragraph="Rejoignez YahyaniTour pour une visite à pied gratuite à Hamilton! Autrefois une ville sidérurgique industrielle, Hamilton a été revitalisée ces dernières années pour inclure de nombreux avantages culturels! C'est désormais une ville animée qui comprend des studios d'art, des bars branchés, une variété de restaurants et des boutiques uniques. Admirez la vue sur le magnifique port, découvrez les bizarreries cachées d'Hamilton et découvrez comment cette ville est passée d'une friche industrielle oubliée à la charmante métropole qu'elle est aujourd'hui!";
    $Duration="90 minutes";
    $Price="Gratuit! Nous vous demandons seulement de donner un pourboire à votre guide à la fin si vous avez apprécié la visite.";
}elseif($city=="Montreal"){
    $img="img/hero-Montreal.jpg";
    $title="DEVENEZ AMBASSADEUR DE <span class=\"text-primary\">MONTRÉAL!</span>";
    $paragraph=" Montréal accueille des millions de visiteurs chaque année. Dans de nombreux cas, ces visiteurs découvrent la ville à travers les yeux d'une personne qui joue un rôle clé dans leur voyage: leur guide touristique.";
    $Duration="90 minutes";
    $Price="$ 99";
}elseif($city=="Ottawa"){
    $img="img/hero-ottawa.jpg";
    $title="VISITES PERSONNALISÉES ET PRIVÉES À <span class=\"text-primary\">OTTAWA</span><br>POUR LES INDIVIDUS OU GROUPES DE TOUTES TAILLES";
    $paragraph="Considérez YahyaniTour comme votre «guichet unique» pour tous les services de guide et la planification d'itinéraire d'une journée dont vous pourriez avoir besoin. Que vous soyez un voyageur seul ou une famille en vacances, un planificateur d'événements d'entreprise à la recherche de quelque chose d'amusant à faire avec votre personnel ou un voyagiste à la recherche d'une expérience unique pour vos clients, nous pouvons créer une visite personnalisée ou modifier l'un de nos circuits existants adaptés à vos besoins et à votre budget! ";
    $Duration="50 minutes";
    $Price="$ 59";
}else{
    header("Location: PageNotfound.php");
}
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
            <li><a <?php if($city=="Ottawa"){echo 'class="active"';} ?> href="Cities.php?qst=Ottawa">Ottawa</a></li>
            <li><a <?php if($city=="Montreal"){echo 'class="active"';} ?> href="Cities.php?qst=Montreal">Montreal</a></li>
            <li><a <?php if($city=="Hamilton"){echo 'class="active"';} ?> href="Cities.php?qst=Hamilton">Hamilton</a></li>
            <li><a <?php if($city=="Vancouver"){echo 'class="active"';} ?> href="Cities.php?qst=Vancouver">Vancouver</a></li>
            <li><a <?php if($city=="Toronto"){echo 'class="active"';} ?> href="Cities.php?qst=Toronto">Toronto</a></li>
            <li><a href="index.html">Accueil</a></li>
            <li class="logo"><a href="index.html">Yahyani<span class="text-primary">Tours<i class="ri-compass-discover-line"></i></span></a></li>
          </ul>
    </div>
    <div class="bg" style="background-image: url('<?= $img ?>');">
        <div class="header Cities">
            <h1 class="display">VISITES À PIED DANS <?= $city ?></h1>
        </div>
    </div>
    <div class="section-0 city">
        <div class="section-1">
            <h1><?= $title ?></h1>
            <small class="paragraph"><?=$paragraph?></small><br>
            <p style="margin-bottom:5px"><b>Prix: </b><?= $Price ?></p>
            <p><b>Durée: </b><?= $Duration ?></p><br>
        </div>
        <div style="width: 100%; text-align: center;">
            <a href="#" class="btn btn-primary">Réserver une visite!</a>
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