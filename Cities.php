<?php
$city=$_GET["qst"];
if($city=="Toronto"){
    $img="img/hero-toronto.jpg";
    $title="EXPERIENCE THE LOCAL SIDE OF <span class=\"text-primary\">TORONTO</span><br>JOIN US ON AN EXPERTLY-LED TOUR";
    $paragraph="The YahyaniTour Toronto team offers regularly scheduled tours throughout the year (including our famous walking tours), and is the official provider of Urban Adventures in Toronto. Our guides are also available to lead tours for school trips, special events, families, individuals and groups of all kinds. The tour guides that lead our city tours are engaging, entertaining, and experts in all things Toronto!.";
    $Duration="60 minutes";
    $Price="$ 279 ";
}elseif($city=="Vancouver"){
    $img="img/hero-Vancouver.jpg";
    $title="SEE <span class=\"text-primary\">VANCOUVER</span> IN A DIFFERENT LIGHT<br>EXPERIENCE THIS DIVERSE CITY THE LOCAL WAY";
    $paragraph="Boasting stunning mountain and inlet views, a rich yet tumultuous history, and a diverse and progressive culture, Vancouver is a metropolis like few others. Our local guides are uniquely positioned to share the highs and unpack the lows in this city of contrasts, and will illustrate stories of Vancouver’s fascinating past with stops at significant Vancouver attractions as well as some of their favorite lesser-known sites.";
    $Duration="120 minutes";
    $Price="$159";
}elseif($city=="Hamilton"){
    $img="img/hero-hamilton.jpg";
    $title="HEAR <span class=\"text-primary\">HAMILTON</span> WATERFRONT HISTORY FROM A LOCAL EXPERT!";
    $paragraph="Join YahyaniTour on a free walking tour in Hamilton! Once just an industrial steel town, Hamilton has been revitalized in recent years to include many cultural perks! It’s now a lively city that features art studios, hip bars, a variety of eateries, and unique shops. Take in views of the stunning harbour, discover Hamilton’s hidden quirks, and learn how this city evolved from a forgotten industrial wasteland to the charming metropolis it is today!";
    $Duration="90 minutes";
    $Price="$ 99";
}elseif($city=="Montreal"){
    $img="img/hero-Montreal.jpg";
    $title="Become an ambassador for <span class=\"text-primary\">Montreal!</span>";
    $paragraph=" Montréal welcomes millions of visitors every year. In many cases, these visitors discover the city through the eyes of a person who plays a key role in their trip: their tourist guide.<br>Would you like to work as a guide, or to perfect your skills if you already work in the field? This program is a first-rate asset that will give you access to a select position in the Montréal tourism industry. It will make you THE resource sought after not only by tourists visiting the city, but by convention organizers, hotel establishments and numerous other tourism operators. ";
    $Duration="90 minutes";
    $Price="Free! We only ask that you tip your guide at the end if you enjoyed the tour.";
}elseif($city=="Ottawa"){
    $img="img/hero-ottawa.jpg";
    $title="CUSTOM & PRIVATE TOURS IN <span class=\"text-primary\">OTTAWA</span><br>FOR INDIVIDUALS OR GROUPS OF ALL SIZES";
    $paragraph="Consider YahyaniTour your “one-stop-shop” for any guide services and day tour itinerary planning you might need. Whether you are a solo traveller or a family on vacation, a corporate event planner looking for something fun to do with your staff, or a tour operator looking for a unique experience for your customers, we can build a custom tour or modify any of our existing tours to fit your needs and budget!";
    $Duration="50 minutes";
    $Price="Free! We only ask that you tip your guide at the end if you enjoyed the tour.";
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
        Appelez-nous au : +1 (514) 863-2918 📞| De 8h à 21h | 7j/7 
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
            <h1 class="display">WALKING TOURS IN <?= $city ?></h1>
        </div>
    </div>
    <div class="section-0 city">
        <div class="section-1">
            <h1><?= $title ?></h1>
            <small class="paragraph"><?=$paragraph?></small><br>
            <p style="margin-bottom:5px"><b>Price: </b><?= $Price ?></p>
            <p><b>Duration: </b><?= $Duration ?></p><br>
        </div>
        <div style="width: 100%; text-align: center;">
            <a href="#" class="btn btn-primary">Book A Tour!</a>
        </div>
    </div>
    <div style="height: 250px;"></div>
    
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
                    <li><a href="index.html">
                        Accueil</a></li>

                    <li><a href="plainte.php">
                        Plainte</a></li>

                    <li><a href="apropos.html">
                        About</a></li>

                </ul>
            </div>
            <div class="footer-items">
                <h3>Cities</h3>
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

</body>

</html>