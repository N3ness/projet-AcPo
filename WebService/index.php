<?php
	
	require('vue/header.html');
	require('vue/vueAccueil.html');
	require('controleur/fiche.php');
	$vue = new Fiche();
	$vue->execute($_GET['id']);
	
	require('vue/footer.html');
?>