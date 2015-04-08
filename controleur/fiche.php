<?php

class Fiche
{
	public function execute()
	{
		include_once('modele/Model.php');
		$model = new Model('Pathologies');
		$pathos = $model->getPathos();
		$listMeridiens = $model->getMeridiens();

		$template = new RainTPL();
		$template->assign('pathos',$pathos);
		$template->assign('listMeridiens',$listMeridiens);
		$template->assign("authenticated",$_SESSION['authenticated']);
		$html=$template->draw('vueFiche', $return_string=true);
		echo $html;
	}
}