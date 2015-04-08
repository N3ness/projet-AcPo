<?php
session_start();
include "lib/rain.tpl.class.php"; //include Rain TPL
raintpl::$tpl_dir = "vue/"; // template directory
raintpl::$cache_dir = "cache/"; // cache directory
raintpl::configure("base_url",".");

////////DEBUG
		// echo '<p>';
			// echo 'Session :';print_r($_SESSION);echo '<br/>';
			// echo 'Post :';print_r($_POST);echo '<br/>';
			// echo 'Get :';print_r($_GET);echo '<br/>';
			// echo '<br/></p>';
////////
//Declaration var
	$msg = '';
	
/////////////////////////Actions USER///////////////
//Authentif
if (isset($_POST['user']) AND isset($_POST['pass'])){
//		echo 'Passage dans l\'authentication du front'; //DEBUG
	require 'modele/User.php';
	$connexion = new User();
	$msg = $connexion->connexion($_POST['user'],$_POST['pass']);
}
//Creation utilisateur
if (isset($_POST['newUser']) AND isset($_POST['newPass'])){
//		echo 'Passage dans creation de compte'; //DEBUG
	require 'modele/User.php';
	$inscription = new User();
	$msg = $inscription->creation($_POST['newUser'],$_POST['newPass']);
}
//Deconnexion
if (isset($_GET['disconnect']) AND $_GET['disconnect'] == 'true'){
//		echo 'Passage dans disconnect'; //DEBUG
	require 'modele/User.php';
	$connexion = new User();
	$msg = $connexion->deconnexion();
}


////////////////////////////Actions Session///////////////////
//initialisation var session
if (!isset($_SESSION['authenticated'])){
//	echo 'var session auth mise a false car inexistante';
	$_SESSION['authenticated'] = 'false';
}


/////////////////////////////Routage des pages
if (!isset($_GET['section']) OR $_GET['section'] == 'accueil'){
	require 'controleur/Accueil.php';
	$vue = new Accueil();
	$vue->execute($msg);
}
else if ($_GET['section'] == 'biblio'){
	require 'controleur/Biblio.php';
	$vue = new Biblio();
	$vue->execute();
}
else if ($_GET['section'] == 'fiche'){
	require 'controleur/Fiche.php';
	$vue = new Fiche();
	$vue->execute();
}
else if ($_GET['section'] == 'signup'){
	require 'controleur/Signup.php';
	$vue = new Signup();
	$vue->execute();
}
else if ($_GET['section'] == 'recherche'){
	require 'controleur/Recherche.php';
	$vue = new Recherche();
	$meridien ='';
	$carac ='';
	$typePatho ='';
	$motCle ='';
	if(isset($_POST['meridien']))
		$meridien = $_POST['meridien'];
	if(isset($_POST['keyword']))
		$motCle = $_POST['keyword'];
	if(isset($_POST['carac']))
		$carac = $_POST['carac'];
	if(isset($_POST['typePatho']))
		$typePatho = $_POST['typePatho'];
	$vue->execute($meridien,$carac,$typePatho,$motCle);
}
else{
	include_once("vue/vue404.html");
}
