<?php

include "lib/rain.tpl.class.php"; //include Rain TPL
raintpl::$tpl_dir = "vue/"; // template directory
raintpl::$cache_dir = "cache/"; // cache directory
raintpl::configure("base_url",".");


if (!isset($_GET['section']) OR $_GET['section'] == 'accueil')
{
	require 'controleur/accueil.php';
	$vue = new accueil();
	$vue->execute();
}
else if ($_GET['section'] == 'fiche')
{
	require 'controleur/fiche.php';
	$vue = new fiche();
	$vue->execute();
}
else if ($_GET['section'] == 'signup')
{
    include_once('controleur/signup.php');
}
else if ($_GET['section'] == 'recherche')
{
    include_once('controleur/recherche.php');
}