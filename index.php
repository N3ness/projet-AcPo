<?php
require("tpl/smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();
//include_once('modele/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'accueil')
{
    include_once('controleur/accueil.php');
}
else if ($_GET['section'] == 'fiche')
{
    include_once('controleur/fiche.php');
}
else if ($_GET['section'] == 'signup')
{
    include_once('controleur/signup.php');
}
else if ($_GET['section'] == 'recherche')
{
    include_once('controleur/recherche.php');
}
?>