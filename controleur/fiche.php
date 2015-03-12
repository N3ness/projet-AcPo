<?php
include_once('modele/connexion_sql.php');
connexion_sql();
$patho = new Patho();

while ($donnees = $requete->fetch())
{
$patho = new Patho($donnee[1], $donnee[2],;
$donnees['possesseur'];
$donnees['console']; 
$donnees['possesseur'];
}
$smarty->display("vue/header.html");
$smarty->display("vue/title_nav.html");
$smarty->display("vue/aside.html");
$smarty->display("vue/fiche.html");

?>

