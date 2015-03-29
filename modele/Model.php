<?php
	include_once('modele/Patho.php');
	include_once('lib/PDO1.php');
	class Model{
	    private $table;

	    // identifiant de connexion
	    protected $bdd;

	    public function __construct($table)
	    {
			$this->table = $table;
			$this->bdd = PDO1::getInstance();
	    }
	    
	    public function getBdd(){
			return $this->bdd;
	    }
	    
	    public function getPathos(){
			try {
				$requete = $this->bdd
				->query('	SELECT p.type as Type, 
						p.desc as Description,
						m.nom as Meridien,
						m.element as Element,
						s.desc as Symptome,
						k.name as tags 
						FROM patho p
						JOIN meridien m ON p.mer = m.code
						JOIN symptPatho sp ON p.idP = sp.idP
						JOIN symptome s ON s.idS = sp.idS
						JOIN keySympt ks ON ks.idS = s.idS
						JOIN keywords k ON k.idK = ks.idK;');

			} catch(PDOException $ex) {
				echo "An Error occured!"; //user friendly message
			}
			$donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
			$pathos = "";
			return $donnees;
	    }
		
		public function getListPatho(){
			try {
				$requete = $this->bdd
				->query('SELECT p.desc,p.type FROM patho p;');

			} catch(PDOException $ex) {
				echo "An Error occured!"; //user friendly message
			}
			$listPathos = $requete->fetchAll(PDO::FETCH_ASSOC);
			return $listPathos;
	    }
 
	}	
?>