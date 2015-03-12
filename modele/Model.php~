<?php

	abstract class Model{
	    private $table;

	    // identifiant de connexion
	    protected $bdd;

	    public function __construct($table)
	    {
		$this->table = $table;
		try
		{
			$this->bdd = new PDO('mysql:host=localhost;dbname=acubd;charset=utf8', 'root', 'tp');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
	    }
	}

	
?>
