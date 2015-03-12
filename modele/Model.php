<?php
	include_once('modele/Patho.php');
	class Model{
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
	    
	    public function getBdd(){
			return $this->bdd;
	    }
	    
	    public function getPathos(){
			$requete = $this->bdd->query('SELECT * FROM patho');
			
			for ($i = 0 ; $donnees = $requete->fetch() ; $i++){
				$patho = new Patho($donnees['idP'],$donnees['mer'],$donnees['type'],$donnees['desc']);
				$pathos[$i] = $patho;
			}
			return $pathos;
			
			/*while($donnees = $requete->fetch())
			{
				$patho = new Patho($donnees['idP'],$donnees['mer'],$donnees['type'],$donnees['desc']);
				$pathos[i
			}*/
	    }

	}

	
?>
