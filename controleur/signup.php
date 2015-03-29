<?php

class Signup
{
	public function execute()
	{
		$template = new RainTPL();
		$html=$template->draw('vueSignup', $return_string=true);
		echo $html;
	}
}