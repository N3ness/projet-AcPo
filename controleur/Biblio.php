<?php

class Biblio
{
	public function execute()
	{
		$template = new RainTPL();
		$template->assign("authenticated",$_SESSION['authenticated']);
		$html=$template->draw('vueBiblio', $return_string=true);
		echo $html;
	}
}