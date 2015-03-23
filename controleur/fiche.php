<?php
include_once('modele/Model.php');

$model = new Model('Pathologies');

$pathos = $model->getPathos();

require "vue/vueFiche.php";
?>

