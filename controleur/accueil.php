<?php

class Accueil
{
	public function execute($msg)
	{
		$template = new RainTPL();
		$template->assign("authenticated",$_SESSION['authenticated']);
		$template->assign("message",$msg);
		$html=$template->draw('vueAccueil', $return_string=true);
		echo $html;
	}
}