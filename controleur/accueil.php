<?php

class accueil
{
	public function execute()
	{
		$template = new RainTPL();
		
		$template->assign('titrePage',"Acupuncteurs Associés Accessibles - ");
		
		$html=$template->draw('vueAccueil', $return_string=true);
		echo $html;
	}
}