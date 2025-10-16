<?php
require_once 'Pays.php';
require_once 'Equipe.php';
require_once 'Joueur.php';
require_once 'Carriere.php';


# Création des pays
$france = new Pays(1, "France");
$espagne = new Pays(2, "Espagne");
$angleterre = new Pays(3, "Angleterre");
$italie = new Pays(4, "Italie");
$portugal = new Pays(5, "Portugal");
$bresil = new Pays(6, "Brésil");
$argentine = new Pays(7, "Argentine");

# Création des équipes
$psg = new Team(1, "PSG", "1970", $france);
$racing = new Team(2, "Racing Club Stras", "1906", $france);
$barca = new Team(3, "FC Barcelone", "1899", $espagne);
$juventus = new Team(4, "Juventus", "1897", $italie);
$manu = new Team(5, "Manchester United", "1878", $angleterre);
$real = new Team(6, "Real Madrid", "1902", $espagne);


# Création des joueurs
$mbappe = new Player(1, "Kylian", "Mbappé", "1998", $france);
$messi = new Player(2, "Lionel", "Messi", "1987", $argentine);
$ronaldo = new Player(3, "Cristiano", "Ronaldo", "1985", $portugal);
$neymar = new Player(4, "Neymar", "Junior", "1992", $bresil);


# Créations des carrières
$c1 = new Career($mbappe, $psg, 2017);
$c2 = new Career($messi, $barca, 2004);
$c3 = new Career($messi, $psg, 2021);
$c4 = new Career($ronaldo, $manu, 2003);
$c5 = new Career($ronaldo, $real, 2009);
$c6 = new Career($ronaldo, $juventus, 2018);
$c7 = new Career($neymar, $barca, 2013);
$c8 = new Career($neymar, $psg, 2017);

$france->listeTeams();
echo "<br><br>";
$espagne->listeTeams();
echo "<br><br>";
$italie->listeTeams();
echo "<br><br>";
$angleterre->listeTeams();
echo "<br><br>";

echo "$c8";
?>


