<?php

class fiche
{
	public function execute()
	{
		include_once('modele/Model.php');

		$model = new Model('Pathologies');

		$pathos = $model->getPathos();

		
		$template = new RainTPL();
		$template->assign('pathos',$pathos);
		$template->draw('vueFiche');
		//require "vue/vueFiche.php";
	}
}