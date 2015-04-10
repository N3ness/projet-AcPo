<?php

class Accueil
{
	public function execute($msg)
	{
		$template = new RainTPL();
		$template->assign("authenticated",$_SESSION['authenticated']);
		$template->assign("message",$msg);
		require_once("lib/rsslib.php");
		$url = "http://www.france24.com/fr/france/rss/";
		$rss= RSS_Display($url, 15, false, true);
		$template->assign("rss",$rss);
		$html=$template->draw('vueAccueil', $return_string=true);
		echo $html;
	}
}