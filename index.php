<?php
require_once "Country.php";
require_once "Team.php";
require_once "Player.php";
require_once "Recruting.php";

/* =============================
   Pays
   ============================= */
$france = new Country('France');
$espagne = new Country('Espagne');
$allemagne = new Country('Allemagne');
$italie = new Country('Italie');
$angleterre = new Country('Angleterre');
$portugal = new Country('Portugal');
$argentine = new Country('Argentine');
$bresil = new Country('Brésil');

/* =============================
   Equipes
   ============================= */
$psg = new Team('PSG', '1970', $france);
$racing = new Team('Racing Club Strasbourg', '1906', $france);
$barca = new Team('FC Barcelone', '1899', $espagne);
$juventus = new Team('Juventus', '1897', $italie);
$manu = new Team('Manchester United', '1878', $angleterre);
$real = new Team('Real Madrid', '1902', $espagne);

/* =============================
   Joueurs
   ============================= */
$mbappe = new Player('Kylian', 'Mbappé', '1998-12-20', $france);
$ronaldo = new Player('Cristiano', 'Ronaldo', '1985-02-05', $portugal);
$messi = new Player('Lionel', 'Messi', '1987-06-24', $argentine);
$neymar = new Player('Neymar', 'Junior', '1992-02-05', $bresil);

/* =============================
   Recrutements
   ============================= */
new Recruting(2017, 2024, $psg, $mbappe);
new Recruting(2024, 2025, $real, $mbappe);
new Recruting(2009, 2018, $real, $ronaldo);
new Recruting(2018, 2021, $juventus, $ronaldo);
new Recruting(2021, 2025, $manu, $ronaldo);
new Recruting(2004, 2021, $barca, $messi);
new Recruting(2021, 2025, $psg, $messi);
new Recruting(2013, 2017, $barca, $neymar);
new Recruting(2017, 2025, $psg, $neymar);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Football - POO</title>
<link rel="stylesheet" href="uikit/css/uikit.min.css" />
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1> Football - Gestion POO</h1></header>

<main>
<h2>Équipes par pays</h2>
<div class="cardcontainer">
    <?php
        $france->displayTeams();
        $espagne->displayTeams();
        $italie->displayTeams();
    ?>
</div>

<h2>Joueurs par équipe</h2>
<div class="cardcontainer">
    <?php
        $psg->displayPlayers();
        $barca->displayPlayers();
        $juventus->displayPlayers();
        $real->displayPlayers();
    ?>
</div>

<h2>Équipes par joueur</h2>
<div class="cardcontainer">
    <?php
        $mbappe->displayTeams();
        $ronaldo->displayTeams();
        $messi->displayTeams();
        $neymar->displayTeams();
    ?>
</div>
</main>
</body>
</html>
