<?php

class Recherche
{
	public function execute()
	{
		include_once('modele/Model.php');
		$model = new Model('Pathologies');
		$listPathos = $model->getListPatho();

		$template = new RainTPL();
		$template->assign('listPathos',$listPathos);
		$html=$template->draw('vueRecherche', $return_string=true);
		echo $html;
	}
}
