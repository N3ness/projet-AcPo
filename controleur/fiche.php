<?php

class Fiche
{
	public function execute()
	{
		include_once('modele/Model.php');
		$model = new Model('Pathologies');
		$pathos = $model->getPathos();

		$template = new RainTPL();
		$template->assign('pathos',$pathos);
		$html=$template->draw('vueFiche', $return_string=true);
		echo $html;
	}
}