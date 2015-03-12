<?php
include_once('modele/Model.php');

$model = new Model('Pathologies');

$pathos = $model->getPathos();

$smarty->display("vue/header.html");
$smarty->display("vue/title_nav.html");
$smarty->display("vue/aside.html");
include_once('vue/fiche.php');
//$smarty->display("vue/fiche.php");

?>

