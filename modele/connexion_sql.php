<?php
function connexion_sql ()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=acubd;charset=utf8', 'root', 'tp');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return $bdd;
}

	
?>
