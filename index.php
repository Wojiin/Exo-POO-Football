<?php
# Importation des classes nécessaires
require_once "Equipe.php";
require_once "Pays.php";
require_once "Joueur.php";

# Création des pays
$france = new Pays(1, "France");
$espagne = new Pays(2, "Espagne");
$angleterre = new Pays(3, "Angleterre");
$italie = new Pays(4, "Italie");
$portugal = new Pays(5, "Portugal");
$argentine = new Pays(6, "Argentine");
$bresil = new Pays(7, "Brésil");

# Création des équipes
$psg = new Team(1,"Paris Saint Germain", [], $france);
$rcs = new Team(2,"Racing Club Strasbourg", [], $france);
$fcb = new Team(3,"FC Barcelone", [], $espagne);
$juv = new Team(4,"Juventus", [], $italie);
$mu = new Team(5,"Manchester United", [], $angleterre);
$rm = new Team(6,"Real Madrid", [], $espagne);

# Création des joueurs
$pl1 = new Player(1,"Kylian", "Mbappé",["2017"],"1998-12-20",$france,$psg);
$pl2 = new Player(2,"Cristiano", "Ronaldo",["2017","2009","2018","2021"],"1985-02-05",$portugal);
$pl3 = new Player(3,"Lionel", "Messi",["2014","2021"],"1987-06-24",$argentine);
$pl4 = new Player(4,"Neymar", "Junior",["2013","2017"],"1992-02-05", $bresil);


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.24.2/dist/css/uikit.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.24.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.24.2/dist/js/uikit-icons.min.js"></script>
    <title>Appli Exo football</title>
</head>
<body>
    <div>
        <main>
                <?php
                ?>
        </main>
    </div>
</body>
</html>