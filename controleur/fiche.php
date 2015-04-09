<?php

class Fiche
{
	public function execute($id)
	{
		include_once('modele/Model.php');
		$model = new Model('Pathologies');
		$table = $model->getPathoById($id);

		//var_dump($table);
		
		$chaineXML = '<?xml version="1.0" encoding="UTF-8" ?>';
		$chaineXML .= '<?xml-stylesheet type="text/xsl" href="patho.xsl" ?>';
		$chaineXML .= '<pathologie>';
		$chaineXML .= '<description>'.$table[0]['Description'].'</description>';
		$chaineXML .= '<meridien>'.$table[0]['Meridien'].'</meridien>';
		$chaineXML .= '<symptomes>';
		foreach($table as $sympt){
			$chaineXML .= '<symptome>'.$sympt['Symptome'].'</symptome>';
		}
		$chaineXML .= '</symptomes>';
		$chaineXML .= '</pathologie>';
		
		$dom = new DomDocument();
		$dom->loadXML($chaineXML);
		$dom->save('patho'.$id.'.xml');
		header('Location: patho'.$id.'.xml');
		exit();
		
/* 		$template = new RainTPL();
		$template->assign('table',$table);
		$template->assign('xml',$chaineXML);
		$template->assign("authenticated",$_SESSION['authenticated']);
		$html=$template->draw('vueFiche', $return_string=true);
		echo $html;  */
	}
}