<?php

class Recherche
{
	public function execute($motCle)
	{
		include_once('modele/Model.php');
		$model = new Model('Pathologies');
		$listPathos = $model->getPathosMC($motCle);

		$template = new RainTPL();
		$template->assign('listPathos',$listPathos);
		$template->assign('authenticated',$_SESSION['authenticated']);
		$html=$template->draw('vueRecherche', $return_string=true);
		echo $html;
	}
}
