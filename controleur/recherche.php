<?php

class Recherche
{
	public function execute($meridien,$carac,$typePatho,$motCle)
	{
		include_once('modele/Model.php');
		$model = new Model('Pathologies');
				
		$listPathos = $model->getPathosMC($meridien,$carac,$typePatho,$motCle);
		$listMeridiens = $model->getMeridiens();

		$template = new RainTPL();
		$template->assign('listPathos',$listPathos);
		$template->assign('listMeridiens',$listMeridiens);
		$template->assign('authenticated',$_SESSION['authenticated']);
		$html=$template->draw('vueRecherche', $return_string=true);
		echo $html;
	}
}
